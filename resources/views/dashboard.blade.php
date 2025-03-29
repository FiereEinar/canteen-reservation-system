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
    <main class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex">
      <aside class="max-w-[300px] min-h-[80dvh] border-r border-base-content/10 px-3">
        <h1 class="pl-4 mb-2 text-lg text-base-content/70">Stalls</h1>
        <div class="flex flex-col">
          @foreach ($stalls as $stall)
          <a href="/stalls/{{$stall->id}}">
            <button class="btn btn-block text-base-content/70 btn-primary btn-ghost justify-start">
              {{$stall->name}} - {{$stall->location}}
            </button>
          </a>
          @endforeach
        </div>
      </aside>

      <section class="px-5">
        <h1 class="mb-3 text-lg text-base-content/70">Popular Items</h1>
        @foreach ($menu_items as $menu_item)
          <article class="card bg-base-200 w-72 shadow-sm relative overflow-hidden">
            <span class="absolute top-2 right-2 badge badge-secondary">P{{ $menu_item->price }}</span>
            <figure>
              <img
                class="h-36 w-full object-cover"
                src="{{ $menu_item->image ? asset('storage/' . $menu_item->image) : 'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp' }}"
              />
            </figure>
            <div class="card-body">
              <h2 class="card-title">{{ $menu_item->name }}</h2>
              <p class="text-base-content/70">{{ $menu_item->description }}</p>
              <div class="card-actions justify-end">
                <button class="btn btn-primary btn-sm">Buy Now</button>
              </div>
            </div>
          </article>
        @endforeach
      </section>

    </main>
    <livewire:scripts />
  </body>
</html>
