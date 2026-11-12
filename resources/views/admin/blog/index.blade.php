@extends('admin.layouts.app')

@section('title', 'Blog')
@section('heading', 'Artículos del Blog')
@section('subheading', 'Gestión de noticias y publicaciones')

@section('content')

  <div class="flex items-center justify-between mb-6">
    <p class="text-sm text-gray-500">{{ $posts->count() }} artículo(s) registrados</p>
    <a href="{{ route('admin.blog.create') }}"
       class="bg-brand-green hover:bg-emerald-800 text-white px-4 py-2.5 rounded-xl text-sm font-semibold flex items-center gap-2 transition-all shadow-sm">
      <i data-lucide="plus" class="w-4 h-4"></i>
      <span>Nuevo Artículo</span>
    </a>
  </div>

  <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
    @if($posts->isEmpty())
      <div class="text-center py-16 text-gray-400">
        <i data-lucide="file-x" class="w-10 h-10 mx-auto mb-3 opacity-40"></i>
        <p class="text-sm">No hay artículos aún.</p>
        <a href="{{ route('admin.blog.create') }}" class="text-brand-green text-sm font-medium hover:underline mt-1 inline-block">Crear el primero</a>
      </div>
    @else
      <table class="w-full text-sm">
        <thead class="bg-gray-50 border-b border-gray-100">
          <tr>
            <th class="text-left px-6 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider">Título</th>
            <th class="text-center px-4 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider">Estado</th>
            <th class="text-left px-6 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider">Publicado</th>
            <th class="text-right px-6 py-3 font-semibold text-gray-500 text-xs uppercase tracking-wider">Acciones</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-50">
          @foreach($posts as $post)
          <tr class="hover:bg-gray-50 transition-colors">
            <td class="px-6 py-4">
              <p class="font-semibold text-brand-brown">{{ $post->title }}</p>
              <p class="text-xs text-gray-400 mt-0.5 font-mono">{{ $post->slug }}</p>
            </td>
            <td class="px-4 py-4 text-center">
              @if($post->is_published)
                <span class="inline-flex items-center gap-1 bg-emerald-100 text-emerald-700 text-xs font-semibold px-2.5 py-1 rounded-full">
                  <i data-lucide="check" class="w-3 h-3"></i> Publicado
                </span>
              @else
                <span class="inline-flex items-center gap-1 bg-amber-100 text-amber-700 text-xs font-semibold px-2.5 py-1 rounded-full">
                  <i data-lucide="clock" class="w-3 h-3"></i> Borrador
                </span>
              @endif
            </td>
            <td class="px-6 py-4 text-gray-500 text-xs">
              {{ $post->published_at ? $post->published_at->format('d/m/Y H:i') : '—' }}
            </td>
            <td class="px-6 py-4 text-right">
              <div class="flex items-center justify-end gap-2">
                @if($post->is_published)
                <a href="{{ route('blog.show', $post) }}" target="_blank"
                   class="inline-flex items-center gap-1.5 bg-gray-100 hover:bg-gray-200 text-gray-600 px-3 py-1.5 rounded-lg text-xs font-medium transition-all">
                  <i data-lucide="external-link" class="w-3 h-3"></i> Ver
                </a>
                @endif
                <a href="{{ route('admin.blog.edit', $post) }}"
                   class="inline-flex items-center gap-1.5 bg-brand-brown/10 hover:bg-brand-brown text-brand-brown hover:text-white px-3 py-1.5 rounded-lg text-xs font-medium transition-all">
                  <i data-lucide="pencil" class="w-3 h-3"></i> Editar
                </a>
                <form method="POST" action="{{ route('admin.blog.destroy', $post) }}"
                      onsubmit="return confirm('¿Eliminar este artículo?')">
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
