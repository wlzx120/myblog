@extends('admin.layouts.default')
@section('content')
<div class="content-wrapper">
    @include('admin.shared.messages')
    @include('admin.shared.errors')
    <section class="content-header">
      <h1>
        分类管理
        <small>分类列表</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level </a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <section class="content">
    <div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row"><div class="col-sm-12">
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                    <th rowspan="1" colspan="1">分类id</th><th rowspan="1" colspan="1">分类名称</th>
                    <th rowspan="1" colspan="1">添加时间</th><th rowspan="1" colspan="1">操作</th></tr>
                </tr>
                </thead>
                <tbody>
                @foreach($sorts as $sort)
                <tr role="row" class="odd">
                  <td class="sorting_1">{{ $sort->id }}</td>
                  <td>{{ $sort->name }}</td>
                  <td>{{ $sort->created_at }}</td>
                  <td>
                      <a href="{{ route('admin.sortarts.edit',[$sort->id]) }}" class="btn btn-xs btn-info" >编辑</a>
                      <form method="post" action="{{ route('admin.sortarts.destroy',[$sort->id]) }}"  class="inline">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <button type="submit"class="btn btn-xs btn-info">删除</button>
                      </form>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
                </div></div>
              </div>
            </div>
          </div>
    </div>
    </div>
    </section>
  </div>
@stop