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
                    <th rowspan="1" colspan="1">文章id</th><th rowspan="1" colspan="1">作者</th><th rowspan="1" colspan="1">标题</th>
                    <th rowspan="1" colspan="1">添加时间</th><th rowspan="1" colspan="1">操作</th></tr>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                <tr role="row" class="odd">
                  <td class="sorting_1">{{ $article->id }}</td>
                  <td>{{ $article->author }}</td>
                  <td>{{ $article->title }}</td>
                  <td>{{ $article->created_at }}</td>
                  <td>
                      <a href="{{ route('admin.articles.edit',[$article->id]) }}" class="btn btn-xs btn-info" >编辑</a>
                      <form method="post" action="{{ route('admin.articles.destroy',[$article->id]) }}"  class="inline">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <button type="submit"class="btn btn-xs btn-info">删除</button>
                      </form>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table></div></div>
                  <div class="row">
                      <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                            
<!--                            <ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li>
                                <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li>
                            </ul>-->
                            {!! $articles->render() !!}
                        </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
    </div>
    </div>
    </section>
  </div>
@stop