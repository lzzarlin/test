@extends('layouts.app')

@section('content')

    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    <a href="/admin/categories?type=1" class="btn btn-primary">
                        产品栏目
                    </a>
                    <a href="/admin/categories?type=2" class="btn btn-primary">
                        案例栏目
                    </a>
                    <a href="/admin/categories?type=3" class="btn btn-primary">
                        新闻栏目
                    </a>
                    <a href="/admin/categories?type=4" class="btn btn-primary">
                        单页栏目
                    </a>
                </div>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline flex-left">
                    </span>
                    <a href="{{ route('categories.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        添加新栏目
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
                                    <th>栏目id</th>
                                    <th>栏目名称</th>
                                    <th>上级栏目id</th>
                                    <th>Url</th>
                                    <th>关键字</th>
                                    <th>栏目类型</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>
                                            <div class="">{{ $category->id }}</div>
                                        </td>
                                        <td>
                                            <div class="d-flex py-1 align-items-center">
                                                <div class="flex-fill">
                                                    <div class="font-weight-medium">{{ $category->name }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $category->parent_id }}</div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $category->slug }}</div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $category->keywords }}</div>
                                        </td>
                                        <td>
                                            @if ($category->type == 1)
                                                <div class="text-secondary">产品</div>
                                            @elseif ($category->type == 2)
                                                <div class="text-secondary">案例</div>
                                            @elseif ($category->type == 3)
                                                <div class="text-secondary">新闻</div>
                                            @elseif ($category->type == 4)
                                                <div class="text-secondary">单页面栏目</div>
                                            @else
                                                <div class="text-secondary">{{ $category->type }}</div>
                                            @endif

                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="{{ route('categories.edit', $category->id) }}"
                                                        class="btn btn-cyan w-100 btn-sm m-1">编辑</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <form action="{{ route('categories.destroy', $category->id) }}"
                                                        method="post" style="display: inline-block;"
                                                        onsubmit="return confirm('您确定要删除吗？');">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-red w-100 btn-sm m-1">
                                                            <i class="far fa-trash-alt"></i> 删除
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
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
                        {{ $categories->appends(request()->all())->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
