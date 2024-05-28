@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-6 m-auto">
                <div class="empty">
                    <div class="empty-img"><img src="/dist/img/undraw_printing_invoices_5r4r.svg" height="128"
                            alt="">
                    </div>
                    <p class="empty-title">欢迎</p>
                    <p class="empty-subtitle text-secondary">
                        站点管理的主要功能都在左侧的导航栏，在那里可以找到你想用的每一个功能.
                    </p>
                    <div class="empty-action">
                        <a href="#" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            欢迎光临
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
