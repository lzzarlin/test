@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                {{-- <form action="{{ route('users.update', $topic->id) }}" method="POST" accept-charset="UTF-8" class="card">
                        <input type="hidden" name="_method" value="PUT"> --}}

                <form action="{{ route('asks.store') }}" method="POST" accept-charset="UTF-8" class="card">
                    @include('shared._error')
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-header">
                        <h3 class="card-title">添加新问答</h3>
                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label">问题</label>
                            <input name="question" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">解答</label>
                            <textarea name="answer" class="form-control" rows="6" placeholder="请填入至少三个字符的内容。" required></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="form-label">所属产品</div>
                            <select name="product_id" class="form-select" >
                                @foreach ($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
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
