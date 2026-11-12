{{-- Reusable blog post form fields --}}

@if($errors->any())
  <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-2">
    <ul class="list-disc list-inside text-sm text-red-700 space-y-1">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<div class="space-y-6">

  {{-- Título --}}
  <div>
    <label for="title" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Título <span class="text-brand-red">*</span>
    </label>
    <input type="text" id="title" name="title" value="{{ old('title', $post->title ?? '') }}" required
           class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all">
  </div>

  {{-- Extracto --}}
  <div>
    <label for="excerpt" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Extracto / Resumen
    </label>
    <textarea id="excerpt" name="excerpt" rows="2"
              placeholder="Breve descripción del artículo para listados y SEO"
              class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all resize-none">{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
  </div>

  {{-- Contenido --}}
  <div>
    <label for="content" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Contenido <span class="text-brand-red">*</span>
    </label>
    <textarea id="content" name="content" rows="12" required
              class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all font-mono leading-relaxed">{{ old('content', $post->content ?? '') }}</textarea>
    <p class="text-xs text-gray-400 mt-1">Puedes usar HTML básico para formato.</p>
  </div>

  {{-- Imagen destacada --}}
  <div>
    <label for="featured_image" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Imagen destacada {{ isset($post) ? '(dejar vacío para conservar la actual)' : '' }}
    </label>
    @isset($post)
      @if($post->featured_image)
        <div class="mb-3">
          <img src="{{ asset($post->featured_image) }}" alt="Imagen actual"
               class="h-36 rounded-xl object-cover border border-gray-200"
               onerror="this.src='https://placehold.co/300x144/FAF8F5/4A2511?text=Sin+imagen'">
          <p class="text-xs text-gray-400 mt-1">Imagen actual</p>
        </div>
      @endif
    @endisset
    <input type="file" id="featured_image" name="featured_image" accept="image/*"
           class="w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-brand-green/10 file:text-brand-green hover:file:bg-brand-green/20 transition-all">
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    {{-- Published At --}}
    <div>
      <label for="published_at" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
        Fecha de publicación
      </label>
      <input type="datetime-local" id="published_at" name="published_at"
             value="{{ old('published_at', isset($post) && $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}"
             class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all">
      <p class="text-xs text-gray-400 mt-1">Si está vacío, se usará la fecha actual al publicar.</p>
    </div>

    {{-- Is Published --}}
    <div class="flex items-center gap-3 pt-5">
      <input type="checkbox" id="is_published" name="is_published" value="1"
             {{ old('is_published', $post->is_published ?? false) ? 'checked' : '' }}
             class="w-4 h-4 text-brand-green rounded border-gray-300 focus:ring-brand-green">
      <label for="is_published" class="text-sm font-medium text-gray-700">Publicar artículo (visible en el blog)</label>
    </div>

  </div>

</div>
