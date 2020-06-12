@extends('layouts.dashboard')
@section('page_title')
    {{ trans("products.create") }}


@endsection


@section('content')
    <div class="box">
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <input required value="{{old('en_name')}}" type="text" class="form-control" placeholder="{{trans('products.en_name')}}" name="en_name">

                        @error('en_name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <input required value="{{old('ar_name')}}" type="text" class="form-control" placeholder="{{trans('products.ar_name')}}" name="ar_name">
                        @error('ar_name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <textarea required  class="form-control" placeholder="{{trans('products.en_description')}}" name="en_description">{{old('en_description')}}</textarea>
                        @error('en_description')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <textarea required  class="form-control" placeholder="{{trans('products.ar_description')}}" name="ar_description">{{old('ar_description')}}</textarea>
                        @error('ar_description')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input required value="{{old('price')}}" type="number" class="form-control" placeholder="{{trans('products.price')}}" name="price">
                        @error('price')
                        {{ $message }}
                        @enderror
                    </div>

                </div>
            </div>




            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input required  type="file"  multiple="multiple" class="form-control" name="attachments[]">
                        @error('attachments')
                        {{ $message }}
                        @enderror
                    </div>

                </div>
            </div>




            <div class="">
                <div class="row">
                    <div class="col-md-2">
                       <button class="btn btn-primary btn-sm btn-block" type="submit">{{ trans('products.create') }}</button>
                    </div>

                </div>
            </div>




        </form>
    </div>
@endsection
