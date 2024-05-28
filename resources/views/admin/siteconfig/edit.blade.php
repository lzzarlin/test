@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                {{-- <form action="{{ route('users.update', $topic->id) }}" method="POST" accept-charset="UTF-8" class="card">
                        <input type="hidden" name="_method" value="PUT"> --}}

                <form action="{{ route('siteconfig.update', $siteconfig->id) }}" method="POST" accept-charset="UTF-8"
                    enctype="multipart/form-data" class="card">
                    @include('shared._error')
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-header">
                        <h3 class="card-title">Site Config</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar avatar-xl" style="background-image: url({{$siteconfig->logo}})"></span>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Logo</label>
                                        <input type="file" class="form-control" name="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">网站名称</label>
                            <input name="sitename" class="form-control"
                                value="{{ old('sitename', $siteconfig->sitename) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">关键词</label>
                            <input name="keywords" class="form-control"
                                value="{{ old('keywords', $siteconfig->keywords) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">网站简介</label>
                            <textarea name="description" class="form-control" rows="5">{{ old('description', $siteconfig->description) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">网站域名</label>
                            <input name="domain" class="form-control" value="{{ old('domain', $siteconfig->domain) }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control"
                                value="{{ old('description', $siteconfig->phone) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email-Address</label>
                            <input class="form-control" placeholder="{{ old('email', $siteconfig->email) }}">
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
