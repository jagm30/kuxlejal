{{-- Reusable slide form fields --}}

@if($errors->any())
  <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-2">
    <ul class="list-disc list-inside text-sm text-red-700 space-y-1">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

  {{-- Título --}}
  <div class="md:col-span-2">
    <label for="title" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Título <span class="text-brand-red">*</span>
    </label>
    <input type="text" id="title" name="title" value="{{ old('title', $slide->title ?? '') }}" required
           class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all">
  </div>

  {{-- Subtítulo --}}
  <div class="md:col-span-2">
    <label for="subtitle" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Subtítulo <span class="text-brand-red">*</span>
    </label>
    <textarea id="subtitle" name="subtitle" rows="3" required
              class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all resize-none">{{ old('subtitle', $slide->subtitle ?? '') }}</textarea>
  </div>

  {{-- Badge Text --}}
  <div>
    <label for="badge_text" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Texto de la insignia <span class="text-brand-red">*</span>
    </label>
    <input type="text" id="badge_text" name="badge_text" value="{{ old('badge_text', $slide->badge_text ?? '') }}" required
           class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all">
  </div>

  {{-- Badge Color --}}
  <div>
    <label for="badge_color" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Color de la insignia <span class="text-brand-red">*</span>
    </label>
    <select id="badge_color" name="badge_color" required
            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all">
      <option value="green" {{ old('badge_color', $slide->badge_color ?? 'green') === 'green' ? 'selected' : '' }}>Verde</option>
      <option value="red"   {{ old('badge_color', $slide->badge_color ?? '') === 'red'   ? 'selected' : '' }}>Rojo</option>
      <option value="amber" {{ old('badge_color', $slide->badge_color ?? '') === 'amber' ? 'selected' : '' }}>Ámbar</option>
    </select>
  </div>

  {{-- Imagen --}}
  <div class="md:col-span-2">
    <label for="image" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Imagen {{ isset($slide) ? '(dejar vacío para conservar la actual)' : '' }} <span class="text-brand-red">{{ isset($slide) ? '' : '*' }}</span>
    </label>
    @isset($slide)
      <div class="mb-3">
        <img src="{{ asset($slide->image_path) }}" alt="Imagen actual"
             class="h-32 rounded-xl object-cover border border-gray-200"
             onerror="this.src='https://placehold.co/300x128/FAF8F5/4A2511?text=Sin+imagen'">
        <p class="text-xs text-gray-400 mt-1">Imagen actual</p>
      </div>
    @endisset
    <input type="file" id="image" name="image" accept="image/*"
           class="w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-brand-green/10 file:text-brand-green hover:file:bg-brand-green/20 transition-all">
  </div>

  {{-- CTA 1 --}}
  <div>
    <label for="cta1_text" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Botón 1 — Texto
    </label>
    <input type="text" id="cta1_text" name="cta1_text" value="{{ old('cta1_text', $slide->cta1_text ?? '') }}"
           placeholder="Ej: Personalizar Pedido"
           class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all">
  </div>

  <div>
    <label for="cta1_url" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Botón 1 — URL
    </label>
    <input type="text" id="cta1_url" name="cta1_url" value="{{ old('cta1_url', $slide->cta1_url ?? '') }}"
           placeholder="Ej: #productos"
           class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all">
  </div>

  {{-- CTA 2 --}}
  <div>
    <label for="cta2_text" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Botón 2 — Texto
    </label>
    <input type="text" id="cta2_text" name="cta2_text" value="{{ old('cta2_text', $slide->cta2_text ?? '') }}"
           placeholder="Ej: Conocer la Historia"
           class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all">
  </div>

  <div>
    <label for="cta2_url" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Botón 2 — URL
    </label>
    <input type="text" id="cta2_url" name="cta2_url" value="{{ old('cta2_url', $slide->cta2_url ?? '') }}"
           placeholder="Ej: #nosotros"
           class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all">
  </div>

  {{-- Sort Order --}}
  <div>
    <label for="sort_order" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Orden
    </label>
    <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $slide->sort_order ?? 0) }}" min="0"
           class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all">
  </div>

  {{-- Is Active --}}
  <div class="flex items-center gap-3 pt-5">
    <input type="checkbox" id="is_active" name="is_active" value="1"
           {{ old('is_active', $slide->is_active ?? true) ? 'checked' : '' }}
           class="w-4 h-4 text-brand-green rounded border-gray-300 focus:ring-brand-green">
    <label for="is_active" class="text-sm font-medium text-gray-700">Slide activo (visible en el sitio)</label>
  </div>

</div>
