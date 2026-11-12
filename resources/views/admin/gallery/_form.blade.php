{{-- Reusable gallery form fields --}}

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

  {{-- Label --}}
  <div>
    <label for="label" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Etiqueta / Descripción <span class="text-brand-red">*</span>
    </label>
    <input type="text" id="label" name="label" value="{{ old('label', $item->label ?? '') }}" required
           placeholder="Ej: 1. Maduración en planta"
           class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all">
  </div>

  {{-- Imagen --}}
  <div>
    <label for="image" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Imagen {{ isset($item) ? '(dejar vacío para conservar la actual)' : '' }} <span class="text-brand-red">{{ isset($item) ? '' : '*' }}</span>
    </label>
    @isset($item)
      <div class="mb-3">
        <img src="{{ asset($item->image_path) }}" alt="Imagen actual"
             class="h-36 rounded-xl object-cover border border-gray-200"
             onerror="this.src='https://placehold.co/300x144/FAF8F5/4A2511?text=Sin+imagen'">
        <p class="text-xs text-gray-400 mt-1">Imagen actual</p>
      </div>
    @endisset
    <input type="file" id="image" name="image" accept="image/*"
           class="w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-brand-green/10 file:text-brand-green hover:file:bg-brand-green/20 transition-all">
  </div>

  {{-- Sort Order --}}
  <div>
    <label for="sort_order" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
      Orden
    </label>
    <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}" min="0"
           class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all">
  </div>

  {{-- Is Active --}}
  <div class="flex items-center gap-3">
    <input type="checkbox" id="is_active" name="is_active" value="1"
           {{ old('is_active', $item->is_active ?? true) ? 'checked' : '' }}
           class="w-4 h-4 text-brand-green rounded border-gray-300 focus:ring-brand-green">
    <label for="is_active" class="text-sm font-medium text-gray-700">Imagen activa (visible en el sitio)</label>
  </div>

</div>
