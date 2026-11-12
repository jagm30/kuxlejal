@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('heading', 'Dashboard')
@section('subheading', 'Resumen general del sitio')

@section('content')

  <!-- Stat Cards -->
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10">

    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex items-center gap-5">
      <div class="w-14 h-14 bg-brand-green/10 rounded-2xl flex items-center justify-center flex-shrink-0">
        <i data-lucide="image-play" class="w-7 h-7 text-brand-green"></i>
      </div>
      <div>
        <p class="text-3xl font-bold text-brand-brown">{{ $slidesCount }}</p>
        <p class="text-sm text-gray-500 mt-0.5">Slides del carrusel</p>
      </div>
    </div>

    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex items-center gap-5">
      <div class="w-14 h-14 bg-amber-50 rounded-2xl flex items-center justify-center flex-shrink-0">
        <i data-lucide="grid-2x2" class="w-7 h-7 text-amber-600"></i>
      </div>
      <div>
        <p class="text-3xl font-bold text-brand-brown">{{ $galleryCount }}</p>
        <p class="text-sm text-gray-500 mt-0.5">Imágenes de galería</p>
      </div>
    </div>

    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex items-center gap-5">
      <div class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center flex-shrink-0">
        <i data-lucide="newspaper" class="w-7 h-7 text-brand-red"></i>
      </div>
      <div>
        <p class="text-3xl font-bold text-brand-brown">{{ $postsCount }}</p>
        <p class="text-sm text-gray-500 mt-0.5">Artículos publicados</p>
      </div>
    </div>

  </div>

  <!-- Quick Links -->
  <h2 class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-4">Accesos Rápidos</h2>
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

    <a href="{{ route('admin.slides.create') }}"
       class="bg-white border border-gray-100 rounded-2xl shadow-sm p-5 flex items-center gap-4 hover:border-brand-green hover:shadow-md transition-all group">
      <div class="w-10 h-10 bg-brand-green/10 group-hover:bg-brand-green rounded-xl flex items-center justify-center transition-colors">
        <i data-lucide="plus" class="w-5 h-5 text-brand-green group-hover:text-white transition-colors"></i>
      </div>
      <div>
        <p class="text-sm font-semibold text-brand-brown">Nuevo Slide</p>
        <p class="text-xs text-gray-400">Agregar al carrusel</p>
      </div>
    </a>

    <a href="{{ route('admin.gallery.create') }}"
       class="bg-white border border-gray-100 rounded-2xl shadow-sm p-5 flex items-center gap-4 hover:border-amber-400 hover:shadow-md transition-all group">
      <div class="w-10 h-10 bg-amber-50 group-hover:bg-amber-500 rounded-xl flex items-center justify-center transition-colors">
        <i data-lucide="image-plus" class="w-5 h-5 text-amber-600 group-hover:text-white transition-colors"></i>
      </div>
      <div>
        <p class="text-sm font-semibold text-brand-brown">Nueva Imagen</p>
        <p class="text-xs text-gray-400">Agregar a la galería</p>
      </div>
    </a>

    <a href="{{ route('admin.blog.create') }}"
       class="bg-white border border-gray-100 rounded-2xl shadow-sm p-5 flex items-center gap-4 hover:border-brand-red hover:shadow-md transition-all group">
      <div class="w-10 h-10 bg-red-50 group-hover:bg-brand-red rounded-xl flex items-center justify-center transition-colors">
        <i data-lucide="file-pen-line" class="w-5 h-5 text-brand-red group-hover:text-white transition-colors"></i>
      </div>
      <div>
        <p class="text-sm font-semibold text-brand-brown">Nuevo Artículo</p>
        <p class="text-xs text-gray-400">Redactar para el blog</p>
      </div>
    </a>

  </div>

@endsection
