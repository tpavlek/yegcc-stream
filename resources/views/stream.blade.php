<?php /** @var \App\Stream $stream */ ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $stream->name }} Livestream with Chat</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <meta name="twitter:card" content="summary" />
    <meta property="og:type" content="website"/>
    <meta name="twitter:site" content="@troypavlek" />

    <meta name="twitter:title" content="Stream Edmonton City Council Meetings with Chat!" />
    <meta property="og:title" content="Stream Edmonton City Council Meetings with Chat!"/>

    <meta name="twitter:description" content="Public meetings are better with friends" />
    <meta property="og:description" content="Public meetings are better with friends"/>

    <meta name="twitter:image" content="https://yegcc.stream/whos-that-councillor.png" />
    <meta property="og:image" content="https://yegcc.stream/whos-that-councillor.png" />
</head>
<body>
<div class="bg-gray-900 flex h-screen w-screen">
    <div class="flex-grow flex flex-col items-center justify-center">
        <div class="text-2xl text-white p-4">
            <span class="font-bold">Choose Stream:</span>
            <a href="{{ \Illuminate\Support\Facades\URL::route('stream.yegcc') }}" @if ($stream->isYegcc()) class="font-bold" @endif>#yegcc</a> |
            <a href="{{ \Illuminate\Support\Facades\URL::route('stream.epsb') }}" @if ($stream->isEpsb()) class="font-bold" @endif>EBSB</a>
        </div>
        @if ($stream->isYegcc())
            <iframe width="100%" height="80%" src="http://councilontheweb.edmonton.ca/#cc"></iframe>
        @else
            <iframe width="100%" height="80%" src="https://www.youtube.com/embed/live_stream?channel={{ $stream->youtube_id }}&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        @endif

    </div>
    <div class="w-1/3">
        <widgetbot
            server="570311642261225520"
            channel="720334924879626310"
            width="100%"
            height="100%"
            shard="https://e.widgetbot.io"
        ></widgetbot>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@widgetbot/html-embed"></script>
</body>
</html>
