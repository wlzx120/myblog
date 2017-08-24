<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Sortart;
use Illuminate\Pagination;

class ArticlesController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    
    /**
     * 列表页
     */
    public function index(Request $request)
    {
        $sorts = Sortart::all();
        $article = new Article;
        //搜索条件
        $where = $article;
        if($request->search_sid){
            $where = $where->where('sort_id','=',$request->search_sid);
        }
        if($request->search_title){
            $where = $where->where('title','like','%'.$request->search_title.'%');
        }
        $articles = $where->paginate(3);
        $articles->sid = $request->search_sid;
        $articles->title = $request->search_title;
        
        //$articles = Article::where('id','>','10')->where('is_auth','=','1')->where('id','=','14')->paginate(3);
        //dd($articles);
        return view('admin.articles.index',compact('articles','sorts'));
    }

    /**
     * 添加页
     */
    public function create()
    {
        $sorts = Sortart::all();
        return view('admin.articles.create',compact('sorts'));
    }

    /**
     * 添加动作
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'author' => 'required|string',
            'title' => 'required|string',
            'content' => 'required|string',
            'sort_id' => 'required|integer',
        ]);
        $data = [
            'author' => $request->author,
            'title' => $request->title,
            'content' => $request->content,
            'sort_id' => $request->sort_id,
        ];
        Article::create($data);
        session()->flash('success','添加成功');
        return redirect()->route('admin.articles.index');
    }
    
    /**
     * 详情页
     */
    public function show($id)
    {
        //
    }

    /**
     * 修改页
     */
    public function edit($id)
    {
        $sorts = Sortart::all();
        $article = Article::findOrFail($id);
        $article->oldurl = $_SERVER['HTTP_REFERER'];
        return view('admin.articles.edit',compact('article','sorts'));
    }

    /**
     * 修改动作
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'author' => 'required|string',
            'title' => 'required|string',
            'content' => 'required|string',
            'sort_id' => 'required|integer',
        ]);
        $article = Article::findOrFail($id);
        $article->update([
            'author' => $request->author,
            'title' => $request->title,
            'content' => htmlentities($request->content),
            'sort_id' => $request->sort_id,
        ]);
        return redirect($request->oldurl);
    }

    /**
     * 删除动作
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        session()->flash('success','删除成功');
        return redirect()->back();
    }
}
