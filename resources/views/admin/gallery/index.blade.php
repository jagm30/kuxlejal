@extends('admin.layouts.app')

@section('title', 'Galería')
@section('heading', 'Galería de Imágenes')
@section('subheading', 'Gestión del moodboard y proceso visual')

@section('content')

  <div class="flex items-center justify-between mb-6">
    <p class="text-sm text-gray-500">{{ $items->count() }} imagen(es) registradas</p>
    <a href="{{ route('admin.gallery.create') }}"
       class="bg-brand-green hover:bg-emerald-800 text-white px-4 py-2.5 rounded-xl text-sm font-semibold flex items-center gap-2 transition-all shadow-sm">
      <i data-lucide="plus" class="w-4 h-4"></i>
      <span>Nueva Imagen</span>
    </a>
  </div>

  @if($items->isEmpty())
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm text-center py-16 text-gray-400">
      <i data-lucide="image-off" class="w-10 h-10 mx-auto mb-3 opacity-40"></i>
      <p class="text-sm">No hay imágenes en la galería aún.</p>
      <a href="{{ route('admin.gallery.create') }}" class="text-brand-green text-sm font-medium hover:underline mt-1 inline-block">Agregar la primera</a>
    </div>
  @else
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
      @foreach($items as $item)
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden group">
          <div class="relative h-44 overflow-hidden bg-gray-50">
            <img src="{{ asset($item->image_path) }}" alt="{{ $item->label }}"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                 onerror="this.src='https://placehold.co/400x176/FAF8F5/4A2511?text=imagen'">
            @if(!$item->is_active)
              <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                <span class="bg-black/60 text-white text-xs px-2 py-1 rounded-full">Inactivo</span>
              </div>
            @endif
          </div>
          <div class="p-4">
            <div class="flex items-start justify-between gap-2 mb-3">
              <div>
                <p class="text-sm font-semibold text-brand-brown leading-snug">{{ $item->label }}</p>
                <p class="text-xs text-gray-400 mt-0.5">Orden: {{ $item->sort_order }}</p>
              </div>
              @if($item->is_active)
                <span class="flex-shrink-0 inline-flex items-center gap-1 bg-emerald-100 text-emerald-700 text-[10px] font-semibold px-2 py-0.5 rounded-full">
                  <i data-lucide="check" class="w-2.5 h-2.5"></i> Activo
                </span>
              @endif
            </div>
            <div class="flex items-center gap-2">
              <a href="{{ route('admin.gallery.edit', $item) }}"
                 class="flex-1 text-center bg-brand-brown/10 hover:bg-brand-brown text-brand-brown hover:text-white py-1.5 rounded-lg text-xs font-medium transition-all">
                Editar
              </a>
              <form method="POST" action="{{ route('admin.gallery.destroy', $item) }}"
                    onsubmit="return confirm('¿Eliminar esta imagen?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="bg-red-50 hover:bg-brand-red text-brand-red hover:text-white py-1.5 px-3 rounded-lg text-xs font-medium transition-all">
                  <i data-lucide="trash-2" class="w-3.5 h-3.5"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endif

@endsection
