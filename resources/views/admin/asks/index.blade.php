@extends('layouts.app')

@section('content')

    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline flex-left">
                    </span>
                    <a href="{{ route('asks.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        添加新问答
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
                                    <th>id</th>
                                    <th>问题</th>
                                    <th>解答</th>
                                    <th>相关产品</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asks as $ask)
                                    <tr>
                                        <td>
                                            <div class="">{{ $ask->id }}</div>
                                        </td>
                                        <td>
                                            <div class="d-flex py-1 align-items-center">
                                                <div class="flex-fill">
                                                    <div class="font-weight-medium">{{ $ask->question }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $ask->answer }}</div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $ask->product->name }}</div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="{{ route('asks.edit', $ask->id) }}"
                                                        class="btn btn-cyan w-100 btn-sm m-1">编辑</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <form action="{{ route('asks.destroy', $ask->id) }}"
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
                        {{ $asks->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
