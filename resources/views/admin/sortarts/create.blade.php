@extends('admin.layouts.default')
@section('content')
<div class="content-wrapper">
    @include('admin.shared.tips')
    <section class="content-header">
      <h1>
        分类管理
        <small>分类添加</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <section class="content">
    <div class='row'>
    <div class='col-md-6'>
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">填写表单</h3>
            </div>
            <form class="form-horizontal" method="post" action="{{ route('admin.sortarts.store') }}">
                {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-5 control-label">分类名称</label>
                  <div class="col-sm-5">
                      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="分类名称">
                  </div>
                </div>
              </div>
              <div class="box-footer text-center">
                <button type="reset" class="btn btn-default">重置</button>&nbsp;
                <button type="submit" class="btn btn-info">提交</button>
              </div>
            </form>
          </div>
    </div>
    

</div>
    </section>
  </div>
@stop