<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Pagination;

class ArticlesController extends Controller
{
    /**
     * 列表页
     */
    public function index(Request $request)
    {
        $Article = new Article;
        //搜索条件
        $where = $Article;
        if($request->search_title){
            $where = $Article->where('title','like','%'.$request->search_title.'%');
        }
        $articles = $where->paginate(3);
        //$articles = Article::where('id','>','10')->where('is_auth','=','1')->where('id','=','14')->paginate(3);
        return view('admin.articles.index',compact('articles'));
    }

    /**
     * 添加页
     */
    public function create()
    {
        return view('admin.articles.create');
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
        ]);
        $data = [
            'author' => $request->author,
            'title' => $request->title,
            'content' => $request->content,
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
        $article = Article::findOrFail($id);
        return view('admin.articles.edit',compact('article'));
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
        ]);
        $article = Article::findOrFail($id);
        $article->update([
            'author' => $request->author,
            'title' => $request->title,
            'content' => htmlentities($request->content),
        ]);
        return redirect()->route('admin.articles.index');
    }

    /**
     * 删除动作
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        session()->flash('success','删除成功');
        return redirect()->route('admin.articles.index');
    }
}
