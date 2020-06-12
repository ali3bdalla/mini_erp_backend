@extends('layouts.dashboard')
@section('page_title')
    {{ trans("products.show") }} {{ $product->name }}
@endsection


@section('content')
    <div class="">
        <p>{{trans('products.description')}} : {{ $product->description }}</p>
        <p>{{trans('products.price')}} : {{ $product->price }}</p>
        <p>{{trans('products.created_at')}} : {{ $product->created_at }}</p>
    </div>
@endsection
