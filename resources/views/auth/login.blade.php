@extends('layouts.auth')


@section('page_title')
   {{ trans('auth.login_page') }}
@endsection

@section('content')

    <div class="form-signin">
        <div class="text-center">
            <img src="{{ asset('backend/img/logo.png') }}" alt="Metis Logo">
        </div>
        <hr>
        <div class="tab-content">
            <div id="login" class="tab-pane active">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <p class="text-muted text-center">
                        {{ trans("auth.enter_email_and_password") }}
                    </p>
                    <input required type="email" placeholder="{{ trans("auth.email_address") }}" class="form-control  @error('email') has-error @enderror" name="email" value="{{ old('email') }}">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <input required type="password" placeholder="{{ trans("auth.password") }}" auto-complete="new_password" class="form-control bottom" name="password">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> {{ trans("auth.remember") }}
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">{{ trans("auth.login") }}</button>
                </form>
            </div>

        </div>
    </div>




@endsection

