<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Gregwar\Captcha\CaptchaBuilder;  
use Illuminate\Support\Facades\Session;

class SessionsController extends Controller
{
    /**
     * 登录页
     */
    public function index()
    {
        return view('admin.sessions.login');
    }

    /**
     * 登录动作
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6',
            'yzm' => 'required|string|yzmgz',  
        ]);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($credentials,$request->has('remember'))){
            session()->flash('success','欢迎登录');
            return redirect()->intended('admin');
        }else{
            session()->flash('danger','用户名或密码错误');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 退出登录
     */
    public function destroy()
    {
        Auth::logout();
        session()->flash('success','退出成功');
        return redirect()->route('admin.login');
    }
    
    //验证码
    public function captcha()  
    {  
        $builder = new CaptchaBuilder;  
        $builder->build($width = 100, $height = 38, $font = null);  
        $phrase = $builder->getPhrase();  
        Session::flash('captcha', $phrase);  
        header("Cache-Control: no-cache, must-revalidate");  
        header('Content-Type: image/jpeg');  
        $builder->output();  
    }  
    
    
    
}
