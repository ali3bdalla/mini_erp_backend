@extends('layouts.dashboard')
@section('page_title')
    {{ trans("products.edit") }} {{ $product->name }}
@endsection


@section('content')
    <div class="box">
        <form action="{{ route('products.update',$product->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <input required value="{{$product->attrByLocale('en','name')}}" type="text" class="form-control" placeholder="{{trans('products.en_name')}}" name="en_name">

                        @error('en_name')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <input required value="{{$product->attrByLocale('ar','name')}}" type="text" class="form-control" placeholder="{{trans('products.ar_name')}}" name="ar_name">
                        @error('ar_name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <textarea required  class="form-control" placeholder="{{trans('products.en_description')}}" name="en_description">{{$product->attrByLocale('en','description')}}</textarea>
                        @error('en_description')
                        {{ $message }}
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <textarea required  class="form-control" placeholder="{{trans('products.ar_description')}}" name="ar_description">{{$product->attrByLocale('ar','description')}}</textarea>
                        @error('ar_description')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input required value="{{$product->getRawOriginal('price')}}" type="number" class="form-control" placeholder="{{trans('products.price')}}" name="price">
                        @error('price')
                        {{ $message }}
                        @enderror
                    </div>

                </div>
            </div>




            <div class="">
                <div class="row">
                   @foreach ($product->attachments as $file)
                        <div class="col-md-3">
                            <div class="img-cover">
                                <div class="buttons">

{{--                                    todo--}}
{{--                                    @if(!$file->is_master)--}}
{{--                                        <form class="display_inline" action="{{route('attachments.destroy',$file->id)}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <button type="submit"  class="btn btn-danger btn-xs confirm">{{ trans('attachments.remove') }}</button>--}}
{{--                                        </form>--}}

{{--                                        <form class="display_inline" action="{{route('attachments.update',$file->id)}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            @method('PUT')--}}
{{--                                            <button type="submit"  class="btn btn-success btn-xs confirm">{{ trans('attachments.set_as_master') }}</button>--}}
{{--                                        </form>--}}
{{--                                    @endif--}}
                                </div>
                                <img src="{{$file->url}}" class="img-thumbnail"> </div>
                            </div>

                   @endforeach
                </div>
            </div>

            <hr>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <input   type="file"  multiple="multiple" class="form-control" name="attachments[]">
                        @error('attachments')
                        {{ $message }}
                        @enderror
                    </div>

                </div>
            </div>




            <div class="">
                <div class="row">
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-sm btn-block" type="submit">{{ trans('products.update') }}</button>
                    </div>

                </div>
            </div>




        </form>
    </div>
@endsection
