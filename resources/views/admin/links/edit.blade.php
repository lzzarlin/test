@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                {{-- <form action="{{ route('users.update', $topic->id) }}" method="POST" accept-charset="UTF-8" class="card">
                        <input type="hidden" name="_method" value="PUT"> --}}

                <form action="{{ route('links.update', $link->id) }}" method="POST" accept-charset="UTF-8" class="card">
                    @include('shared._error')
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-header">
                        <h3 class="card-title">Link Edit</h3>
                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input name="name" class="form-control" value="{{$link->name}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Url</label>
                            <input name="url" class="form-control" value="{{$link->url}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email-Address(管理员联系方式，方便管理友情链接)</label>
                            <input name="email" class="form-control" placeholder="{{$link->email}}" value="{{$link->email}}">
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
