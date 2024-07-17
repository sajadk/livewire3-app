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
    		
    		<a href="/posts" @class( ['current' => request()->is('posts') ] )>Posts</a>
    		 <a href="/posts/create" @class(['current' => request()->is('posts/create')])>Create 
    	</nav>
        {{ $slot }}
    </body>
</html>
