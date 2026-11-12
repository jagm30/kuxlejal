<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Blog') — Kuxlejal Café Agroecológico</title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Fuentes Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400..800;1,9..144,400..800&family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'brand-brown': '#4A2511',
            'brand-red':   '#8D2B1B',
            'brand-green': '#1E6B38',
            'brand-sand':  '#FAF8F5',
          },
          fontFamily: {
            serif: ['Fraunces', 'serif'],
            sans:  ['Work Sans', 'sans-serif'],
          },
          typography: {
            DEFAULT: {
              css: {
                color: '#404040',
              }
            }
          }
        }
      }
    }
  </script>

  <style>
    body {
      background-color: #FAF8F5;
      color: #2A2A2A;
      font-family: 'Work Sans', sans-serif;
    }
  </style>
</head>
<body class="antialiased selection:bg-brand-red selection:text-white">

  <!-- ===== NAVBAR ===== -->
  <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-amber-950/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">

      <a href="{{ url('/') }}" class="flex items-center gap-3">
        <img src="{{ asset('imagenes/logo.png') }}" alt="Kuxlejal Café Agroecológico" class="h-12 w-auto object-contain"
             onerror="this.onerror=null; this.src='https://placehold.co/180x60/ffffff/4A2511?text=KUXLEJAL';">
      </a>

      <nav class="hidden md:flex items-center space-x-8 font-medium text-sm text-brand-brown">
        <a href="{{ url('/') }}#inicio"       class="hover:text-brand-green transition-colors">Inicio</a>
        <a href="{{ url('/') }}#agroecologico" class="hover:text-brand-green transition-colors">Agroecología</a>
        <a href="{{ url('/') }}#nosotros"     class="hover:text-brand-green transition-colors">Comunidad</a>
        <a href="{{ url('/') }}#moodboard"    class="hover:text-brand-green transition-colors">Galería</a>
        <a href="{{ url('/') }}#productos"    class="hover:text-brand-green transition-colors">Productos</a>
        <a href="{{ route('blog.index') }}"   class="text-brand-green font-semibold transition-colors">Blog</a>
      </nav>

      <div class="hidden sm:flex items-center gap-4">
        <a href="https://wa.me/5219610000000?text=Hola!%20Me%20interesa%20comprar%20Caf%C3%A9%20Kuxlejal" target="_blank"
           class="bg-brand-green hover:bg-emerald-800 text-white px-5 py-2.5 rounded-full text-xs font-semibold uppercase tracking-wider transition-all shadow-md flex items-center gap-2">
          <i data-lucide="message-circle" class="w-4 h-4"></i>
          <span>Pedir WhatsApp</span>
        </a>
      </div>

      <button id="mobileMenuBtn" class="md:hidden text-brand-brown p-2" aria-label="Abrir menú">
        <i data-lucide="menu" class="w-7 h-7"></i>
      </button>
    </div>

    <div id="mobileMenu" class="hidden md:hidden bg-white border-b border-gray-200 px-4 pt-2 pb-6 space-y-3">
      <a href="{{ url('/') }}" class="mobile-nav-link block py-2 text-brand-brown font-medium">Inicio</a>
      <a href="{{ route('blog.index') }}" class="mobile-nav-link block py-2 text-brand-green font-semibold">Blog</a>
    </div>
  </header>

  <!-- ===== CONTENT ===== -->
  @yield('content')

  <!-- ===== FOOTER ===== -->
  <footer class="bg-brand-brown text-amber-100 border-t-8 border-brand-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-left">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
        <div class="space-y-2">
          <img src="{{ asset('imagenes/logo.png') }}" alt="Kuxlejal" class="h-10 mx-auto md:mx-0 object-contain"
               onerror="this.onerror=null; this.src='https://placehold.co/150x40/ffffff/4A2511?text=KUXLEJAL';">
          <p class="text-xs text-neutral-300">Café agroecológico cultivado en Jomanichim, Tenejapa, Chiapas.</p>
        </div>
        <div class="flex justify-center space-x-6 text-sm">
          <a href="{{ url('/') }}" class="hover:text-amber-400 transition-colors">Inicio</a>
          <a href="{{ route('blog.index') }}" class="hover:text-amber-400 transition-colors">Blog</a>
          <a href="{{ url('/') }}#productos" class="hover:text-amber-400 transition-colors">Productos</a>
        </div>
        <div class="text-center md:text-right text-xs text-neutral-400 space-y-1">
          <p>© {{ date('Y') }} Kuxlejal. Todos los derechos reservados.</p>
          <p class="text-emerald-400 font-medium">Sembrando vida, cosechando calidad.</p>
        </div>
      </div>
    </div>
  </footer>

  <script>
    lucide.createIcons();

    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    if (mobileMenuBtn && mobileMenu) {
      mobileMenuBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
    }
  </script>

</body>
</html>
