@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                {{-- <form action="{{ route('users.update', $topic->id) }}" method="POST" accept-charset="UTF-8" class="card">
                        <input type="hidden" name="_method" value="PUT"> --}}

                <form action="{{ route('categories.store') }}" method="POST" accept-charset="UTF-8" class="card">
                    @include('shared._error')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-header">
                        <h3 class="card-title">添加新栏目</h3>
                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label">栏目名称</label>
                            <input name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">上级栏目ID</label>
                            <input name="parent_id" class="form-control">
                        </div>
                        <div class="mb-3">
                            <div class="form-label">栏目类型</div>
                            <select name="type" class="form-select" >
                              <option value="1">产品</option>
                              <option value="2">应用案例</option>
                              <option value="3">新闻</option>
                              <option value="4">单页面栏目</option>
                            </select>
                          </div>
                        <div class="mb-3">
                            <label class="form-label">Url</label>
                            <input name="slug" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">关键词</label>
                            <input name="keywords" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">栏目简介</label>
                            <textarea name="description" class="form-control" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
