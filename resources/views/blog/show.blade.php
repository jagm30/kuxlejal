@extends('layouts.public')

@section('title', $post->title)

@section('content')

{{-- Hero Image --}}
@if($post->featured_image)
<div class="relative h-[50vh] min-h-[300px] overflow-hidden bg-brand-brown">
  <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}"
       class="absolute inset-0 w-full h-full object-cover opacity-70"
       onerror="this.src='https://placehold.co/1200x500/1E6B38/FAF8F5?text=Kuxlejal'">
  <div class="absolute inset-0 bg-gradient-to-t from-brand-brown/90 via-brand-brown/40 to-transparent"></div>
  <div class="absolute bottom-0 left-0 right-0 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-10">
    <div class="flex items-center gap-2 text-xs text-neutral-300 mb-3">
      <a href="{{ route('blog.index') }}" class="hover:text-amber-300 transition-colors">Blog</a>
      <span>/</span>
      <span class="text-neutral-400 truncate max-w-xs">{{ $post->title }}</span>
    </div>
    <h1 class="font-serif text-3xl sm:text-5xl font-bold text-white leading-tight">
      {{ $post->title }}
    </h1>
    <p class="text-neutral-300 text-sm mt-3 flex items-center gap-2">
      <i data-lucide="calendar" class="w-4 h-4"></i>
      <time datetime="{{ $post->published_at->toIso8601String() }}">
        {{ $post->published_at->isoFormat('D [de] MMMM [de] YYYY') }}
      </time>
    </p>
  </div>
</div>
@else
<div class="bg-brand-brown py-20 px-4">
  <div class="max-w-4xl mx-auto">
    <div class="flex items-center gap-2 text-xs text-neutral-400 mb-4">
      <a href="{{ route('blog.index') }}" class="hover:text-amber-300 transition-colors">Blog</a>
      <span>/</span>
      <span class="text-neutral-500 truncate max-w-sm">{{ $post->title }}</span>
    </div>
    <h1 class="font-serif text-3xl sm:text-5xl font-bold text-white leading-tight">{{ $post->title }}</h1>
    <p class="text-neutral-300 text-sm mt-4 flex items-center gap-2">
      <i data-lucide="calendar" class="w-4 h-4"></i>
      <time datetime="{{ $post->published_at->toIso8601String() }}">
        {{ $post->published_at->isoFormat('D [de] MMMM [de] YYYY') }}
      </time>
    </p>
  </div>
</div>
@endif

{{-- Article Content --}}
<article class="py-16 bg-white">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

    @if($post->excerpt)
      <p class="text-xl text-neutral-600 font-light leading-relaxed mb-10 pb-10 border-b border-brand-sand">
        {{ $post->excerpt }}
      </p>
    @endif

    <div class="prose prose-lg max-w-none
                prose-headings:font-serif prose-headings:text-brand-brown
                prose-p:text-neutral-600 prose-p:leading-relaxed
                prose-a:text-brand-green prose-a:no-underline hover:prose-a:underline
                prose-strong:text-brand-brown
                prose-img:rounded-2xl">
      {!! $post->content !!}
    </div>

    {{-- Back link --}}
    <div class="mt-16 pt-8 border-t border-brand-sand">
      <a href="{{ route('blog.index') }}"
         class="inline-flex items-center gap-2 text-brand-green font-semibold hover:text-emerald-800 transition-colors group">
        <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition-transform"></i>
        <span>Volver al Blog</span>
      </a>
    </div>

  </div>
</article>

@endsection
