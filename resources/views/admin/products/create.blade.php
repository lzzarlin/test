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

                <form action="{{ route('products.store') }}" method="POST" accept-charset="UTF-8" class="card"
                    enctype="multipart/form-data">
                    @include('shared._error')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-header">
                        <h3 class="card-title">添加产品</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="form-label required">产品类目<span style="color: red;">（请选择产品对应的分类栏目）</span></div>
                            <select name="category_id" class="form-select">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">产品名称</label>
                            <input name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Url</label>
                            <input name="slug" class="form-control">
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
                        <div class="mb-3">
                            <label class="form-label">关键词</label>
                            <input name="keywords" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">产品简介</label>
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
                            <label class="form-label">price</label>
                            <input name="price" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">package</label>
                            <input name="package" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">行业应用</label>
                            <textarea name="application" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="row row-cards">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card card-md">
                                        <div class="card-body text-center">
                                            <ul class="list-unstyled lh-lg">
                                                <li>
                                                    <img src="/dist/img/000f.jpg" alt="">
                                                </li>
                                            </ul>
                                            <div class="text-center mt-4">
                                                <label class="form-label">产品图片1</label>
                                                <input type="file" class="form-control" name="pic_one">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card card-md">
                                        <div class="card-body text-center">
                                            <ul class="list-unstyled lh-lg">
                                                <li>
                                                    <img src="/dist/img/000f.jpg" alt="">
                                                </li>
                                            </ul>
                                            <div class="text-center mt-4">
                                                <label class="form-label">产品图片1</label>
                                                <input type="file" class="form-control" name="pic_two">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card card-md">
                                        <div class="card-body text-center">
                                            <ul class="list-unstyled lh-lg">
                                                <li>
                                                    <img src="/dist/img/000f.jpg" alt="">
                                                </li>
                                            </ul>
                                            <div class="text-center mt-4">
                                                <label class="form-label">产品图片1</label>
                                                <input type="file" class="form-control" name="pic_three">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card card-md">
                                        <div class="card-body text-center">
                                            <ul class="list-unstyled lh-lg">
                                                <li>
                                                    <img src="/dist/img/000f.jpg" alt="">
                                                </li>
                                            </ul>
                                            <div class="text-center mt-4">
                                                <label class="form-label">产品图片1</label>
                                                <input type="file" class="form-control" name="pic_four">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3"><label class="form-label">产品详细介绍</label>
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
