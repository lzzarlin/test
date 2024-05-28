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
                    <a href="{{ route('news.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        添加新闻
                    </a>
                </div>
            </div>
        </div>
        <div class="row row-deck row-cards mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>缩略图</th>
                                    <th>标题</th>
                                    <th>slug</th>
                                    <th>所属栏目</th>
                                    <th>创建时间</th>
                                    <th>发布人</th>
                                    <th class="w-1">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $new)
                                    <tr>
                                        <td>
                                            <div class="text-secondary">{{ $new->id }}</div>

                                        </td>
                                        <td>
                                            <div class="d-flex py-1 align-items-center">
                                                <span class="avatar me-2 avatar-xl"
                                                    style="background-image: url({{ $new->thumpic ? $new->thumpic : '/dist/img/000f.jpg' }})"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $new->title }}</div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $new->slug }}</div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $new->category->name }}</div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $new->created_at }}</div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $new->user->name }}</div>
                                        </td>
                                        <td>
                                            <a href="{{ route('news.edit', $new->id) }}"
                                                class="btn btn-cyan w-100 btn-sm m-1">编辑</a>
                                            <form action="{{ route('news.destroy', $new->id) }}" method="post"
                                                style="display: inline-block;" onsubmit="return confirm('您确定要删除吗？');">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-red w-100 btn-sm m-1">
                                                    <i class="far fa-trash-alt"></i> 删除
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        {!! $news->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
