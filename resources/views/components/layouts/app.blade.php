<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
       <link rel="stylesheet"  href="/app.css">
    </head>
    <body>
    	<nav>
    		<a href="/counter" @class( ['current' => request()->is('counter') ] ) >Counter</a>
    		<a href="/todos" @class( ['current' => request()->is('todos') ] )>Todos</a>
    		<a href="/posts" @class( ['current' => request()->is('posts') ] )>Posts</a>
    	</nav>
        {{ $slot }}
    </body>
</html>
