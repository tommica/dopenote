<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/layout.css" />
        <link rel="stylesheet" href="/css/nav.css" />
        <link rel="stylesheet" href="/css/editor.css" />

        <title>@yield('title', 'Home') | {{ Config::get('app.name') }}</title>

    </head>
    <body>
        @yield('content')

        {{-- Scripts --}}
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.3/vue.min.js"></script>
        <script src="/js/vue_init.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.0.0/tinymce.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.0.0/plugins/textpattern/plugin.min.js"></script>
        <script src="/js/tinymce_init.js"></script>
    </body>
</html>
