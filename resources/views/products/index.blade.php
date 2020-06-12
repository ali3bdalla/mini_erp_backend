@extends('layouts.dashboard')
@section('page_title')
    {{ trans("layouts.products") }}


@endsection


@section('buttons')

    <a href="{{route('products.create')}}" class="btn btn-primary pull-right">{{ trans('products.create') }}</a>
@endsection
@section('content')
        <div class="box">
            <header>
                <h5>{{ trans('layouts.products') }}</h5>
                <div class="toolbar">
                    <div class="btn-group">
                        <a href="#defaultTable" data-toggle="collapse" class="btn btn-sm btn-default minimize-box">
                            <i class="fa fa-angle-up"></i>
                        </a>
                        <a class="btn btn-danger btn-sm close-box"><i class="fa fa-times"></i></a>
                    </div>
                </div>
            </header>
            <div id="defaultTable" class="body collapse in">
                <table class="table responsive-table">
                    <thead>
                    <tr>
                        <th>{{ trans('products.id') }}</th>
                        <th>{{ trans('products.name') }}</th>
                        <th>{{ trans('products.description') }}</th>
                        <th>{{ trans('products.price') }}</th>
                        <th>{{ trans('products.created_at') }}</th>
                        <th>{{ trans('manage.manage') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>
                            <a href="{{route('products.edit',$product->id)}}" class="btn btn-xs btn-success">{{ trans('manage.edit') }}</a>
                            <a href="{{route('products.show',$product->id)}}" class="btn btn-xs btn-primary">{{ trans('manage.view') }}</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="text-center">{{ $products->links() }}</div>
            </div>
        </div>

@endsection
