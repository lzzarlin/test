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
                    <a href="{{ route('users.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        Create new User
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <div class="d-flex py-1 align-items-center">
                                                <span class="avatar me-2"
                                                    style="background-image: url({{ $user->avatar ? $user->avatar : '/dist/img/000f.jpg' }})"></span>
                                                <div class="flex-fill">
                                                    <div class="font-weight-medium">{{ $user->name }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-secondary">{{ $user->email }}</div>
                                        </td>
                                        <td class="text-secondary">
                                            Admin
                                        </td>
                                        <td>
                                            <a href="{{ route('users.edit', $user->id) }}"
                                                class="btn btn-cyan w-100 btn-sm m-1">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
