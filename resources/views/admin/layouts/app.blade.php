<!DOCTYPE html>
<html lang="es" class="h-full bg-gray-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin') — Kuxlejal CMS</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'brand-brown': '#4A2511',
            'brand-red':   '#8D2B1B',
            'brand-green': '#1E6B38',
            'brand-sand':  '#FAF8F5',
          }
        }
      }
    }
  </script>
</head>
<body class="h-full font-sans antialiased">

<div class="flex h-full min-h-screen">

  <!-- ===== SIDEBAR ===== -->
  <aside class="w-64 flex-shrink-0 bg-brand-brown text-white flex flex-col">

    <!-- Logo / branding -->
    <div class="h-20 flex items-center px-6 border-b border-white/10">
      <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
        <div class="w-9 h-9 bg-brand-green rounded-xl flex items-center justify-center shadow">
          <i data-lucide="coffee" class="w-5 h-5 text-white"></i>
        </div>
        <div>
          <span class="font-bold text-sm text-amber-50 leading-none block">Kuxlejal</span>
          <span class="text-[10px] text-neutral-400 uppercase tracking-widest">Panel CMS</span>
        </div>
      </a>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">

      <a href="{{ route('admin.dashboard') }}"
         class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition-all
                {{ request()->routeIs('admin.dashboard') ? 'bg-brand-green text-white' : 'text-neutral-300 hover:bg-white/10 hover:text-white' }}">
        <i data-lucide="layout-dashboard" class="w-4 h-4 flex-shrink-0"></i>
        <span>Dashboard</span>
      </a>

      <a href="{{ route('admin.slides.index') }}"
         class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition-all
                {{ request()->routeIs('admin.slides*') ? 'bg-brand-green text-white' : 'text-neutral-300 hover:bg-white/10 hover:text-white' }}">
        <i data-lucide="image-play" class="w-4 h-4 flex-shrink-0"></i>
        <span>Slider</span>
      </a>

      <a href="{{ route('admin.gallery.index') }}"
         class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition-all
                {{ request()->routeIs('admin.gallery*') ? 'bg-brand-green text-white' : 'text-neutral-300 hover:bg-white/10 hover:text-white' }}">
        <i data-lucide="grid-2x2" class="w-4 h-4 flex-shrink-0"></i>
        <span>Galería</span>
      </a>

      <a href="{{ route('admin.blog.index') }}"
         class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition-all
                {{ request()->routeIs('admin.blog*') ? 'bg-brand-green text-white' : 'text-neutral-300 hover:bg-white/10 hover:text-white' }}">
        <i data-lucide="newspaper" class="w-4 h-4 flex-shrink-0"></i>
        <span>Blog</span>
      </a>

    </nav>

    <!-- Bottom: view site + logout -->
    <div class="px-4 py-4 border-t border-white/10 space-y-1">
      <a href="{{ url('/') }}" target="_blank"
         class="flex items-center gap-3 px-3 py-2 rounded-xl text-xs text-neutral-400 hover:text-white hover:bg-white/10 transition-all">
        <i data-lucide="external-link" class="w-4 h-4"></i>
        <span>Ver sitio</span>
      </a>
      <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit"
                class="w-full flex items-center gap-3 px-3 py-2 rounded-xl text-xs text-neutral-400 hover:text-white hover:bg-brand-red/60 transition-all">
          <i data-lucide="log-out" class="w-4 h-4"></i>
          <span>Cerrar sesión</span>
        </button>
      </form>
    </div>

  </aside>

  <!-- ===== MAIN AREA ===== -->
  <div class="flex-1 flex flex-col min-w-0 overflow-hidden">

    <!-- Top bar -->
    <header class="h-20 bg-white border-b border-gray-200 flex items-center justify-between px-8 flex-shrink-0">
      <div>
        <h1 class="text-lg font-bold text-brand-brown">@yield('heading', 'Panel de Administración')</h1>
        <p class="text-xs text-gray-400">@yield('subheading', 'Kuxlejal Café Agroecológico')</p>
      </div>
      <div class="flex items-center gap-3">
        <span class="text-xs text-gray-500">{{ Auth::user()->name ?? 'Administrador' }}</span>
        <div class="w-8 h-8 bg-brand-brown rounded-full flex items-center justify-center">
          <i data-lucide="user" class="w-4 h-4 text-white"></i>
        </div>
      </div>
    </header>

    <!-- Flash messages -->
    @if(session('success'))
    <div class="mx-8 mt-6 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl px-4 py-3 flex items-center gap-3 text-sm">
      <i data-lucide="check-circle-2" class="w-4 h-4 flex-shrink-0 text-emerald-600"></i>
      <span>{{ session('success') }}</span>
    </div>
    @endif

    @if(session('error'))
    <div class="mx-8 mt-6 bg-red-50 border border-red-200 text-red-800 rounded-xl px-4 py-3 flex items-center gap-3 text-sm">
      <i data-lucide="alert-circle" class="w-4 h-4 flex-shrink-0 text-red-600"></i>
      <span>{{ session('error') }}</span>
    </div>
    @endif

    <!-- Page content -->
    <main class="flex-1 overflow-y-auto p-8">
      @yield('content')
    </main>

  </div>
</div>

<script>lucide.createIcons();</script>
</body>
</html>
