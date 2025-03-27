<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
      <style>
      </style>
    @endif
    <livewire:styles />
  </head>
  <body>
    <x-header />
    <main class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      @auth
        <p>Hi, {{ auth()->user()->name }}!</p>
        <a href="/v1/api/logout">
          <button class="btn btn-sm btn-primary">Logout</button>
        </a>
      @else
        <h1>You are not logged in</h1>
        <a href="/login">
          <button class="btn btn-sm btn-primary">Login</button>
        </a>
        <a href="/signup">
          <button class="btn btn-sm btn-primary">Signup</button>
        </a>
      @endauth
    </main>
    <livewire:scripts />
  </body>
</html>
