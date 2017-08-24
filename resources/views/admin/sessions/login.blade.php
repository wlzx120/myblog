<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="/admin-lte/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="/admin-lte/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="/admin-lte/plugins/iCheck/square/blue.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page" style="height:auto;background-color:#3c8dbc">
<div class="login-box">
   @include('admin.shared.errors')
   @include('admin.shared.messages')
  <div class="login-logo">
      <a href="javascript:void(0)"><b style="color:#fff">后台管理系统</b></a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">请填写登录信息</p>
    <form action="{{ route('admin.login') }}" method="post">
        {{ csrf_field() }}
      <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
            <input type="text" name="yzm"  class="form-control" placeholder="验证码">
        </div>
        <div class="col-xs-4">
             <img src="{{ route('admin.yzm') }}" onclick="javascript:this.src='{{ route('admin.yzm') }}?tm='+Math.random()" height="34px">  
        </div>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
                <input type="checkbox" name="remember"> 记住我
            </label>
          </div>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
        </div>
      </div>
        <a href="{{ route('password') }}">忘记密码</a>
    </form>
  </div>
</div>
<script src="/admin-lte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="/admin-lte/bootstrap/js/bootstrap.min.js"></script>
<script src="/admin-lte/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
