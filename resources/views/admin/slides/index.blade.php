@extends('admin.layouts.app')

@section('title', 'Slides')
@section('heading', 'Slider Principal')
@section('subheading', 'Gestión del carrusel hero del sitio')

@section('content')

  <div class="flex items-center justify-between mb-6">
    <p class="text-sm text-gray-500">{{ $slides->count() }} slide(s) registrados</p>
    <a href="{{ route('admin.slides.create') }}"
       class="bg-brand-green hover:bg-emerald-800 text-white px-4 py-2.5 rounded-xl text-sm font-semibold flex items-center gap-2 transition-all shadow-sm">
      <i data-lucide="plus" class="w-4 h-4"></i>
      <span>Nuevo Slide</span>
    </a>
  </div>

  <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
    @if($slides->isEmpty())
      <div class="text-center py-16 text-gray-400">
        <i data-lucide="image-off" class="w-10 h-10 mx-auto mb-3 opacity-40"></i>
        <p class="text-sm">No hay slides aún.</p>
        <a href="{{ route('admin.slides.create') }}" class="text-brand-green text-sm font-medium hover:underline mt-1 inline-block">Crear el primero</a>
      </div>
    @else
      <table class="w-full text-sm">
        <thead class="bg-gray-50 border-b border-gray-100">
          <tr>
            <th class="text-left px-6 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider">Imagen</th>
            <th class="text-left px-6 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider">Título</th>
            <th class="text-left px-6 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider">Insignia</th>
            <th class="text-center px-4 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider">Orden</th>
            <th class="text-center px-4 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider">Activo</th>
            <th class="text-right px-6 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider">Acciones</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-50">
          @foreach($slides as $slide)
          <tr class="hover:bg-gray-50 transition-colors">
            <td class="px-6 py-4">
              <img src="{{ asset($slide->image_path) }}" alt="{{ $slide->title }}"
                   class="w-20 h-12 object-cover rounded-lg border border-gray-100"
                   onerror="this.src='https://placehold.co/80x48/FAF8F5/4A2511?text=img'">
            </td>
            <td class="px-6 py-4">
              <p class="font-semibold text-brand-brown">{{ $slide->title }}</p>
              <p class="text-xs text-gray-400 truncate max-w-xs mt-0.5">{{ Str::limit($slide->subtitle, 60) }}</p>
            </td>
            <td class="px-6 py-4">
              <span class="inline-block text-xs font-semibold px-2.5 py-1 rounded-full
                @if($slide->badge_color === 'green') bg-emerald-100 text-emerald-700
                @elseif($slide->badge_color === 'red') bg-red-100 text-red-700
                @else bg-amber-100 text-amber-700
                @endif">
                {{ $slide->badge_text }}
              </span>
            </td>
            <td class="px-4 py-4 text-center text-gray-600">{{ $slide->sort_order }}</td>
            <td class="px-4 py-4 text-center">
              @if($slide->is_active)
                <span class="inline-flex items-center gap-1 bg-emerald-100 text-emerald-700 text-xs font-semibold px-2.5 py-1 rounded-full">
                  <i data-lucide="check" class="w-3 h-3"></i> Activo
                </span>
              @else
                <span class="inline-flex items-center gap-1 bg-gray-100 text-gray-500 text-xs font-semibold px-2.5 py-1 rounded-full">
                  Inactivo
                </span>
              @endif
            </td>
            <td class="px-6 py-4 text-right">
              <div class="flex items-center justify-end gap-2">
                <a href="{{ route('admin.slides.edit', $slide) }}"
                   class="inline-flex items-center gap-1.5 bg-brand-brown/10 hover:bg-brand-brown text-brand-brown hover:text-white px-3 py-1.5 rounded-lg text-xs font-medium transition-all">
                  <i data-lucide="pencil" class="w-3 h-3"></i> Editar
                </a>
                <form method="POST" action="{{ route('admin.slides.destroy', $slide) }}"
                      onsubmit="return confirm('¿Eliminar este slide?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit"
                          class="inline-flex items-center gap-1.5 bg-red-50 hover:bg-brand-red text-brand-red hover:text-white px-3 py-1.5 rounded-lg text-xs font-medium transition-all">
                    <i data-lucide="trash-2" class="w-3 h-3"></i> Eliminar
                  </button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    @endif
  </div>

@endsection
