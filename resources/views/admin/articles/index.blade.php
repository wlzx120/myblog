@extends('admin.layouts.default')
@section('content')
<div class="content-wrapper">
    @include('admin.shared.messages')
    @include('admin.shared.errors')
    <section class="content-header">
      <h1>
        文章管理
        <small>文章列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <section class="content">
        <div class='row'>
    <div class='col-md-6'>
        <!-- Box1 -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">盒子一</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <table></table>
            </div>
            <div class="box-footer">
                <form action='#'>
                    <input type='text' placeholder='New task' class='form-control input-sm' />
                </form>
            </div>
        </div>
    </div>
    <div class='col-md-6'>
        <!-- Box2 -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">盒子二</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                A separate section to add any kind of widget. Feel free
                to explore all of AdminLTE widgets by visiting the demo page
                on <a href="https://almsaeedstudio.com">Almsaeed Studio</a>.
            </div>
        </div>
    </div>

</div>
    </section>
  </div>
@stop