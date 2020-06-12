@extends('layouts.master')

@section('body')
    <body class="menu-affix">
        <div class="bg-dark dk" id="wrap">
                <div id="top">
                    @includeIf("layouts.parts.upper_bar")
                    <header class="head">
                        @includeIf("layouts.parts.search_bar")
                    </header>
                </div>
                @includeIf('layouts.parts.left_sidebar')
                <div id="content">
                    <div class="outer">
                        <div class="inner bg-light lter">
                            @yield('content')
                        </div>
                    </div>
                </div>
        </div>
        @includeIf('layouts.parts.footer')
    </body>
@endsection
