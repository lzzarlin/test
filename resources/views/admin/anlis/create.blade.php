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

                <form action="{{ route('anlis.store') }}" method="POST" accept-charset="UTF-8" class="card"
                    enctype="multipart/form-data">
                    @include('shared._error')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-header">
                        <h3 class="card-title">添加案例</h3>
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
                            <div class="form-label required">对应产品<span style="color: red;">（请选择案例对应的产品）</span></div>
                            <select name="product_id" class="form-select">
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">标题</label>
                            <input name="title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">关键词</label>
                            <input name="keywords" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">简介</label>
                            <textarea name="description" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="form-label">是否推荐</div>
                            <label class="form-check form-switch">
                                <input class="form-check-input" name="isRecommend" value="1" type="checkbox">
                                <span class="form-check-label">打开表示推荐</span>
                            </label>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar avatar-xl" style="background-image: url(/dist/img/000f.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">缩略图</label>
                                        <input type="file" class="form-control" name="thumpic">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3"><label class="form-label">主体内容</label>
                            <textarea name="body" class="form-control" id="editor" rows="6" placeholder="请填入至少三个字符的内容。" required></textarea>
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
                    url: '{{ route('products.uploadimage') }}',
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
