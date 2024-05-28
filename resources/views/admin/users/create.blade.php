@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                {{-- <form action="{{ route('users.update', $topic->id) }}" method="POST" accept-charset="UTF-8" class="card">
                        <input type="hidden" name="_method" value="PUT"> --}}

                <form action="{{ route('users.store') }}" method="POST" accept-charset="UTF-8" class="card" enctype="multipart/form-data">
                    @include('shared._error')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-header">
                        <h3 class="card-title">Profile</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar avatar-xl" style="background-image: url(/dist/img/000f.jpg)"></span>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Avatar</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">description</label>
                            <textarea name="description" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email-Address</label>
                            <input name="email" class="form-control" placeholder="your-email@domain.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" >
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
