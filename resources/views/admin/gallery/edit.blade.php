@extends('admin.layouts.app')

@section('title', 'Editar Imagen')
@section('heading', 'Editar Imagen de Galería')
@section('subheading', 'Modificar imagen del moodboard del sitio')

@section('content')

  <div class="max-w-xl">
    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8">
      <form method="POST" action="{{ route('admin.gallery.update', $item) }}" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        @include('admin.gallery._form')

        <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
          <button type="submit"
                  class="bg-brand-green hover:bg-emerald-800 text-white px-6 py-3 rounded-xl font-semibold text-sm flex items-center gap-2 transition-all shadow-sm">
            <i data-lucide="save" class="w-4 h-4"></i>
            <span>Actualizar Imagen</span>
          </button>
          <a href="{{ route('admin.gallery.index') }}"
             class="text-sm text-gray-500 hover:text-brand-brown transition-colors">
            Cancelar
          </a>
        </div>

      </form>
    </div>
  </div>

@endsection
