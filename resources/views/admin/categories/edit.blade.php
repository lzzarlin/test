@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                {{-- <form action="{{ route('users.update', $topic->id) }}" method="POST" accept-charset="UTF-8" class="card">
                        <input type="hidden" name="_method" value="PUT"> --}}

                <form action="{{ route('categories.update', $category->id) }}" method="POST" accept-charset="UTF-8" class="card">
                    @include('shared._error')
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-header">
                        <h3 class="card-title">栏目编辑</h3>
                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label">栏目名称</label>
                            <input name="name" class="form-control" value="{{$category->name}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">上级栏目ID</label>
                            <input name="parent_id" class="form-control" value="{{$category->parent_id}}">
                        </div>
                        <div class="mb-3">
                            <div class="form-label">栏目类型</div>
                            <select name="type" class="form-select" >
                                @if ($category->type == 1)
                                <option value="1" selected>产品</option>
                                <option value="2">应用案例</option>
                                <option value="3">新闻</option>
                                @elseif ($category->type == 2)
                                <option value="1">产品</option>
                                <option value="2" selected>应用案例</option>
                                <option value="3">新闻</option>
                                @else
                                <option value="1">产品</option>
                                <option value="2">应用案例</option>
                                <option value="3" selected>新闻</option>
                                @endif
                            </select>
                          </div>
                        <div class="mb-3">
                            <label class="form-label">Url</label>
                            <input name="slug" class="form-control" value="{{$category->slug}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">关键词</label>
                            <input name="keywords" class="form-control" value="{{$category->keywords}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">栏目简介</label>
                            <textarea name="description" class="form-control" rows="5" >{{$category->description}}</textarea>
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
