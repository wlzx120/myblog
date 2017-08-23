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
        <li><a href="#"><i class="fa fa-dashboard"></i> Level </a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <section class="content">
    <div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header">
              <div class="row">
              <form action="{{ route('admin.articles.index') }}" method="post">
                <div class="col-md-3">
                    <div class="col-md-12 input-group input-group-sm ">
                        <select name="search_sid" class="form-control">
                            <option value="">选择分类</option>
                            @foreach($sorts as $sort)
                            <option value="{{ $sort->id }}">{{ $sort->name }}</option>
                            @endforeach
                        </select>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-info btn-flat">分类搜索</button>
                        </span>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-md-12 input-group input-group-sm ">
                        {{ csrf_field() }}
                        <input type="text" name='search_title' class="form-control" placeholder="标题搜索" />
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-info btn-flat">标题搜索</button>
                        </span>
                    </div>
                </div>
              </form>
              </div>
            </div>
            <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <div class="row"><div class="col-sm-12">
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">
                    <th rowspan="1" colspan="1">文章id</th><th rowspan="1" colspan="1">作者</th>
                    <th rowspan="1" colspan="1">分类</th><th rowspan="1" colspan="1">标题</th>
                    <th rowspan="1" colspan="1">添加时间</th><th rowspan="1" colspan="1">操作</th></tr>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                <tr role="row" class="odd">
                  <td class="sorting_1">{{ $article->id }}</td>
                  <td>{{ $article->author }}</td>
                  <td>{{ $article->sort->name }}</td>
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
              </table>
                </div></div>
                  <div class="row">
                      <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                            {!! $articles->appends(['search_sid'=>$articles->sid, 'search_title'=>$articles->title])->render() !!}
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