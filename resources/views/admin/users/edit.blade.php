@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                {{-- <form action="{{ route('users.update', $topic->id) }}" method="POST" accept-charset="UTF-8" class="card">
                        <input type="hidden" name="_method" value="PUT"> --}}

                <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8" class="card" enctype="multipart/form-data">
                    @include('shared._error')
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-header">
                        <h3 class="card-title">My Profile</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar avatar-xl"
                                        style="background-image: url({{ $user->avatar }})"></span>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Avatar</label>
                                        <input type="file" class="form-control" name="avatar">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Information</label>
                            <textarea name="description" class="form-control" rows="5">{{ old('description', $user->description) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input name="name" class="form-control" value="{{ old('name', $user->name) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email-Address</label>
                            <input class="form-control" disabled placeholder="{{ old('email', $user->email) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" value="">
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
