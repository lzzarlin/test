@extends('layouts.app')
@section('style')
    <link href="/css/simditor.css" rel="stylesheet" />

@stop
@section('content')
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                {{-- <form action="{{ route('users.update', $topic->id) }}" method="POST" accept-charset="UTF-8" class="card">
                        <input type="hidden" name="_method" value="PUT"> --}}

                <form action="{{ route('banners.update', $banner->id) }}" method="POST" accept-charset="UTF-8" class="card"
                    enctype="multipart/form-data">
                    @include('shared._error')
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-header">
                        <h3 class="card-title">修改Banner</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="form-label required">案例类目<span style="color: red;">（请选择案例的分类栏目）</span></div>
                            <select name="category_id" class="form-select">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">图片名称</label>
                            <input name="name" class="form-control" value="{{ $banner->name }}">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <img src="{{$banner->url}}"
                                    alt="{{$banner->name}}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">请选择替换的图片</label>
                            <input type="file" class="form-control" name="url">
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">保存</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@stop
@section('javascript')
    <script src="/js/jquery.min.js"></script>
    <script src="/js/module.js"></script>
    <script src="/js/hotkeys.js"></script>
    <script src="/js/uploader.js"></script>
    <script src="/js/simditor.js"></script>

    <script>
        $(document).ready(function() {
            var editor = new Simditor({
                textarea: $('#editor'),
                upload: {
                    url: '{{ route('products.upload_image') }}',
                    params: {
                        _token: '{{ csrf_token() }}'
                    },
                    fileKey: 'upload_file',
                    connectionCount: 3,
                    leaveConfirm: '文件上传中，关闭此页面将取消上传。'
                },
                pasteImage: true,
            });
        });
    </script>
@stop
