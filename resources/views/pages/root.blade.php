@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-6 m-auto">
                <div class="empty">
                    <div class="empty-img"><img src="/dist/img/undraw_printing_invoices_5r4r.svg" height="128" alt="">
                    </div>
                    <p class="empty-title">欢迎</p>
                    <p class="empty-subtitle text-secondary">
                        站点管理的主要功能都在左侧的导航栏，在那里可以找到你想用的每一个功能.
                    </p>
                    <div class="empty-action">
                        <h2 class="empty-subtitle text-secondary text-center">
                            最新咨询信息
                        </h2>
                    </div>
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
                                    <th>姓名</th>
                                    <th>电话</th>
                                    <th>ip</th>
                                    <th>邮件</th>
                                    <th>留言</th>
                                    <th>留言时间</th>
                                    {{-- <th>操作</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)
                                    <tr>
                                        <td>
                                            <div class="d-flex py-1 align-items-center">
                                                <div class="flex-fill">
                                                    <div class="font-weight-medium">{{ $message->name }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $message->phone }}</div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $message->ip_address }}</div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $message->email }}</div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $message->message }}</div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $message->created_at }}</div>
                                        </td>
                                        {{-- <td>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href=""
                                                        class="btn btn-cyan w-100 btn-sm m-1">编辑</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <form action=""
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
                                        </td> --}}
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
                        {{ $messages->render() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
