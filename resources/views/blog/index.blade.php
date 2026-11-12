@extends('layouts.public')

@section('title', 'Blog')

@section('content')
<section class="py-20 bg-brand-sand/40">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
      <span class="text-brand-red uppercase font-semibold text-sm tracking-widest block">Noticias y Novedades</span>
      <h1 class="font-serif text-3xl sm:text-5xl font-bold text-brand-brown">
        Blog Kuxlejal
      </h1>
      <div class="w-20 h-1 bg-brand-red mx-auto rounded-full"></div>
      <p class="text-neutral-600 text-base sm:text-lg">
        Historias del campo, procesos del café y noticias de nuestra comunidad tseltal.
      </p>
    </div>

    @if($posts->isEmpty())
      <div class="text-center py-16 text-gray-400">
        <i data-lucide="newspaper" class="w-12 h-12 mx-auto mb-4 opacity-30"></i>
        <p class="text-lg">Próximamente publicaremos nuestros primeros artículos.</p>
      </div>
    @else
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($posts as $post)
          <article class="bg-white rounded-3xl overflow-hidden border border-brand-sand shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex flex-col">

            @if($post->featured_image)
              <div class="h-52 overflow-hidden">
                <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}"
                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                     onerror="this.src='https://placehold.co/600x208/1E6B38/FAF8F5?text=Kuxlejal'">
              </div>
            @else
              <div class="h-52 bg-gradient-to-br from-brand-green to-emerald-800 flex items-center justify-center">
                <i data-lucide="coffee" class="w-16 h-16 text-white/40"></i>
              </div>
            @endif

            <div class="p-6 flex flex-col flex-1 space-y-3">
              <div class="flex items-center gap-2 text-xs text-gray-400">
                <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
                <time datetime="{{ $post->published_at->toIso8601String() }}">
                  {{ $post->published_at->isoFormat('D [de] MMMM [de] YYYY') }}
                </time>
              </div>

              <h2 class="font-serif text-xl font-bold text-brand-brown leading-snug">
                {{ $post->title }}
              </h2>

              @if($post->excerpt)
                <p class="text-neutral-500 text-sm leading-relaxed flex-1">
                  {{ Str::limit($post->excerpt, 140) }}
                </p>
              @endif

              <a href="{{ route('blog.show', $post) }}"
                 class="mt-auto inline-flex items-center gap-2 text-brand-green font-semibold text-sm hover:text-emerald-800 transition-colors group">
                <span>Leer artículo completo</span>
                <i data-lucide="arrow-right" class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
              </a>
            </div>

          </article>
        @endforeach
      </div>

      {{-- Pagination --}}
      @if($posts->hasPages())
        <div class="mt-12 flex justify-center">
          {{ $posts->links() }}
        </div>
      @endif
    @endif

  </div>
</section>
@endsection
