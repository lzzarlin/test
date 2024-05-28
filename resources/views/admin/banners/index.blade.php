@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">

                </div>
                <h2 class="page-title">

                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline">
                    </span>
                    <a href="{{ route('banners.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        添加Banner图
                    </a>
                </div>
            </div>
        </div>
        <div class="row row-cards mt-3">
            <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                    <a href="#" class="d-block"><img
                            src="/uploads/images/banner/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg"
                            class="card-img-top"></a>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <span class="avatar me-3 rounded" style="background-image: url(/dist/img/000f.jpg)"></span>
                            <div>
                                <div>Paweł Kuna</div>
                                <div class="text-secondary">3 days ago</div>
                            </div>
                            <div class="ms-auto">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                    467
                                </a>
                                <a href="#" class="ms-3 text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                    67
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                    <a href="#" class="d-block"><img
                            src="/uploads/images/banner/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg"
                            class="card-img-top"></a>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <span class="avatar me-3 rounded" style="background-image: url(/dist/img/000f.jpg)"></span>
                            <div>
                                <div>Paweł Kuna</div>
                                <div class="text-secondary">3 days ago</div>
                            </div>
                            <div class="ms-auto">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                    467
                                </a>
                                <a href="#" class="ms-3 text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                    67
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                    <a href="#" class="d-block"><img
                            src="/uploads/images/banner/beautiful-blonde-woman-relaxing-with-a-can-of-coke-on-a-tree-stump-by-the-beach.jpg"
                            class="card-img-top"></a>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <span class="avatar me-3 rounded" style="background-image: url(/dist/img/000f.jpg)"></span>
                            <div>
                                <div>Paweł Kuna</div>
                                <div class="text-secondary">3 days ago</div>
                            </div>
                            <div class="ms-auto">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                    467
                                </a>
                                <a href="#" class="ms-3 text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                    </svg>
                                    67
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($banners as $banner)
                <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                        <a href="#" class="d-block"><img src="{{ $banner->url }}" class="card-img-top"></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <span class="avatar me-3 rounded"
                                    style="background-image: url(/dist/img/000f.jpg)"></span>
                                <div>
                                    <div>{{ $banner->name }}</div>
                                    <div class="text-secondary">添加日期{{ $banner->created_at }}</div>
                                </div>
                                <div class="ms-auto">
                                    <a href="{{route('banners.edit', $banner->id)}}" class="btn btn-green btn-sm m-1 px-2">
                                        编辑
                                    </a>
                                    <form action="{{ route('banners.destroy', $banner->id) }}" method="post"
                                        style="display: inline-block;" onsubmit="return confirm('您确定要删除吗？');">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-red w-100 btn-sm m-1">
                                            <i class="far fa-trash-alt"></i> 删除
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="d-flex mt-3">
            {!! $banners->render() !!}
        </div>
    </div>
@stop
