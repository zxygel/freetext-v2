@extends('layouts.app')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            {{ config('app.name', 'Laravel') }}
        </div>
        <p><a href="http://www.inventivemedia.com.ph/" target="_blank"><img class="img img-responsive" height="20" src="https://cdn.shortpixel.ai/spai/w_300+q_glossy+ret_img+to_webp/http://www.inventivemedia.com.ph/wp-content/uploads/2019/03/Inventive-Media-Training-Center-Philippines-3_b3062e40dd1c597552bae328367f124b.png"></a></p>
<!-- 
        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div> -->
    </div>
</div>
@endsection
@section('style')
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 88vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        /*margin-bottom: 30px;*/
    }
</style>
@endsection
