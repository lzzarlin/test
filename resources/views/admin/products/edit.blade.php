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

                <form action="{{ route('products.update', $product->id) }}" method="POST" accept-charset="UTF-8" class="card"
                    enctype="multipart/form-data">
                    @include('shared._error')
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-header">
                        <h3 class="card-title">产品信息修改</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="form-label required">产品类目<span style="color: red;">（请选择产品对应的分类栏目）</span></div>
                            <select name="category_id" class="form-select">
                                <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">产品名称</label>
                            <input name="name" class="form-control" value="{{ $product->name }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Url（轻易不要修改，影响现有关键词的排名）</label>
                            <input name="slug" class="form-control" value="{{ $product->slug }}">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar avatar-xl"
                                        style="background-image: url({{ $product->thumpic }})"></span>
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
                            <input name="keywords" class="form-control" value="{{ $product->slug }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">产品简介</label>
                            <textarea name="description" class="form-control" rows="5">{{ $product->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">price</label>
                            <input name="price" class="form-control" value="{{ $product->price }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">packge</label>
                            <input name="package" class="form-control" value="{{ $product->pakage }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">行业应用</label>
                            <textarea name="application" class="form-control" rows="5">{{ $product->application }}</textarea>
                        </div>
                        <div class="mb-3">
                            <div class="row row-cards">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card card-md">
                                        <div class="card-body text-center">
                                            <ul class="list-unstyled lh-lg">
                                                <li>
                                                    <img src="{{ $product->pic_one }}" alt="">
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
                                                    <img src="{{ $product->pic_two }}" alt="">
                                                </li>
                                            </ul>
                                            <div class="text-center mt-4">
                                                <label class="form-label">产品图片2</label>
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
                                                    <img src="{{ $product->pic_three }}" alt="">
                                                </li>
                                            </ul>
                                            <div class="text-center mt-4">
                                                <label class="form-label">产品图片3</label>
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
                                                    <img src="{{ $product->pic_four }}" alt="">
                                                </li>
                                            </ul>
                                            <div class="text-center mt-4">
                                                <label class="form-label">产品图片4</label>
                                                <input type="file" class="form-control" name="pic_four">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3"><label class="form-label">产品详细介绍</label>
                            <script id="contents" name="body" type="text/plain">{!! $product->body !!}</script>
                            {{-- <textarea name="body" class="form-control" id="editor" rows="6" placeholder="请填入至少三个字符的内容。" required>{{ $product->body }}</textarea> --}}
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
{{-- 编辑器JS --}}
<script type="text/javascript" id="ne1" charset="utf-8" src="/neditor/neditor.config.js?v={{time()}}"></script>
<script type="text/javascript" id="ne2"  charset="utf-8" src="/neditor/neditor.all.min.js?v={{time()}}"> </script>
<script type="text/javascript" id="ne3" charset="utf-8" src="/neditor/neditor.service.js?v={{time()}}"></script>
<script>
    setTimeout(function(){
        var ue = UE.getEditor('contents', {
            autoHeight: false,
            initialFrameHeight:300
        });
    },1000)
</script>
{{-- 编辑器JS结束 --}}
    {{-- <script src="/js/jquery.min.js"></script>
    <script src="/js/module.js"></script>
    <script src="/js/hotkeys.js"></script>
    <script src="/js/uploader.js"></script>
    <script src="/js/simditor.js"></script>

    <script>
        $(document).ready(function() {
            var editor = new Simditor({
                toolbar: [
                    'title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale',
                    'color', '|', 'ol', 'ul', 'blockquote', 'code', 'table', '|', 'link',
                    'image', 'hr', '|', 'alignment'
                ],
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
    </script> --}}
@stop
