@extends('home.layouts.default')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="/admin-lte/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="/admin-lte/plugins/iCheck/square/blue.css">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<div style="background-color: #eee">
<section class="content-header">
    <div class="row">
    <div class="col-md-6">
        <h3>
          <small>重置密码</small>
        </h3>
    </div>
    </div>
</section>
<section class="content">
    <div class="row">
    <div class="col-md-6">
        @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <div class="box box-info">
<form method="POST" action="{{ Route('reset') }}" class="form-horizontal">
    <input type="hidden" name="token" value="{{ $token }}">
    {{ csrf_field() }}
<div class="box-body">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
      <div class="col-sm-10">
        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">密码</label>
      <div class="col-sm-10">
        <input type="password" name="password" class="form-control" id="inputEmail3" placeholder="密码">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">密码</label>
      <div class="col-sm-10">
        <input type="password" name="password_confirmation" class="form-control" id="inputEmail3" placeholder="重新输入密码">
      </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-info">提交</button>
    </div>
  </div>
</form>
            
</div>
        </div>
      </div>
    </section>
    </div>          
@stop