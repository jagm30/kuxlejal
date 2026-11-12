<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kuxlejal | Café Agroecológico de Jomanichim, Tenejapa, Chiapas</title>
  
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
            'brand-red': '#8D2B1B',
            'brand-green': '#1E6B38',
            'brand-sand': '#FAF8F5',
          },
          fontFamily: {
            serif: ['Fraunces', 'serif'],
            sans: ['Work Sans', 'sans-serif'],
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
    .hero-slide {
      transition: opacity 0.8s ease-in-out;
    }
  </style>
</head>
<body class="antialiased selection:bg-brand-red selection:text-white">

  <!-- ================= ENCABEZADO / NAVBAR ================= -->
  <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-amber-950/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
      
      <!-- Logo Principal -->
      <a href="#inicio" class="flex items-center gap-3">
        <img src="/imagenes/logo.png" alt="Kuxlejal Café Agroecológico" class="h-12 w-auto object-contain" onerror="this.onerror=null; this.src='https://placehold.co/180x60/ffffff/4A2511?text=KUXLEJAL';">
      </a>
      <!-- Navegación Escritorio -->
      <nav class="hidden md:flex items-center space-x-8 font-medium text-sm text-brand-brown">
        <a href="#inicio" class="hover:text-brand-green transition-colors">Inicio</a>
        <a href="#agroecologico" class="hover:text-brand-green transition-colors">Agroecología</a>
        <a href="#nosotros" class="hover:text-brand-green transition-colors">Comunidad</a>
        <a href="#moodboard" class="hover:text-brand-green transition-colors">Galería</a>
        <a href="#productos" class="hover:text-brand-green transition-colors">Productos</a>
        <a href="#blog" class="hover:text-brand-green transition-colors">Blog</a>
      </nav>

      <!-- Botón WhatsApp Navbar -->
      <div class="hidden sm:flex items-center gap-4">
        <a href="https://wa.me/5219610000000?text=Hola!%20Me%20interesa%20comprar%20Caf%C3%A9%20Kuxlejal" target="_blank" class="bg-brand-green hover:bg-emerald-800 text-white px-5 py-2.5 rounded-full text-xs font-semibold uppercase tracking-wider transition-all shadow-md flex items-center gap-2">
          <i data-lucide="message-circle" class="w-4 h-4"></i>
          <span>Pedir WhatsApp</span>
        </a>
      </div>

      <!-- Botón Menú Móvil -->
      <button id="mobileMenuBtn" class="md:hidden text-brand-brown p-2" aria-label="Abrir menú">
        <i data-lucide="menu" class="w-7 h-7"></i>
      </button>

    </div>

    <!-- Menú Desplegable Móvil -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-b border-gray-200 px-4 pt-2 pb-6 space-y-3">
      <a href="#inicio" class="mobile-nav-link block py-2 text-brand-brown font-medium">Inicio</a>
      <a href="#agroecologico" class="mobile-nav-link block py-2 text-brand-brown font-medium">Agroecología</a>
      <a href="#nosotros" class="mobile-nav-link block py-2 text-brand-brown font-medium">Comunidad</a>
      <a href="#moodboard" class="mobile-nav-link block py-2 text-brand-brown font-medium">Galería</a>
      <a href="#productos" class="mobile-nav-link block py-2 text-brand-brown font-medium">Productos</a>
      <a href="#blog" class="mobile-nav-link block py-2 text-brand-brown font-medium">Blog</a>
      <a href="https://wa.me/5219610000000?text=Hola!%20Me%20interesa%20comprar%20Caf%C3%A9%20Kuxlejal" target="_blank" class="w-full bg-brand-green text-white py-3 rounded-xl font-semibold text-center block text-sm">
        Contactar por WhatsApp
      </a>
    </div>
  </header>

  <!-- ================= HERO CAROUSEL / SLIDER PRINCIPAL ================= -->
  <section id="inicio" class="relative bg-brand-brown h-[82vh] min-h-[550px] overflow-hidden">

    <!-- Slides Container -->
    <div class="relative w-full h-full">

      @if(isset($slides) && $slides->isNotEmpty())
        @foreach($slides as $loop_i => $slide)
          @php
            $badgeClass = match($slide->badge_color) {
                'red'   => 'bg-brand-red/90 text-red-100 border-red-400/30',
                'amber' => 'bg-amber-600/90 text-amber-100 border-amber-300/30',
                default => 'bg-brand-green/90 text-emerald-100 border-emerald-400/30',
            };
          @endphp
          <div class="hero-slide absolute inset-0 {{ $loop_i === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}">
            <img src="{{ asset($slide->image_path) }}" alt="{{ $slide->title }}" class="absolute inset-0 w-full h-full object-cover"
                 onerror="this.onerror=null;this.src='https://placehold.co/1600x900/4A2511/FAF8F5?text=Slide';">
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-20">
              <div class="max-w-2xl text-white space-y-5">
                <span class="inline-block {{ $badgeClass }} text-xs font-semibold uppercase tracking-widest px-3.5 py-1.5 rounded-full border">
                  {{ $slide->badge_text }}
                </span>
                <h1 class="font-serif text-4xl sm:text-6xl font-bold leading-tight">
                  {!! $slide->title !!}
                </h1>
                <p class="text-neutral-200 text-base sm:text-xl font-light leading-relaxed">
                  {{ $slide->subtitle }}
                </p>
                @if($slide->cta1_text || $slide->cta2_text)
                  <div class="pt-2 flex flex-wrap items-center gap-4">
                    @if($slide->cta1_text)
                      <a href="{{ $slide->cta1_url ?? '#' }}" class="bg-brand-red hover:bg-red-800 text-white px-7 py-3.5 rounded-full font-semibold text-sm transition-all shadow-lg flex items-center gap-2">
                        <span>{{ $slide->cta1_text }}</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                      </a>
                    @endif
                    @if($slide->cta2_text)
                      <a href="{{ $slide->cta2_url ?? '#' }}" class="bg-white/10 hover:bg-white/20 text-white border border-white/30 px-6 py-3.5 rounded-full font-medium text-sm backdrop-blur-sm transition-all">
                        {{ $slide->cta2_text }}
                      </a>
                    @endif
                  </div>
                @endif
              </div>
            </div>
          </div>
        @endforeach
      @else
        {{-- Fallback estático cuando no hay slides en BD --}}
        <div class="hero-slide absolute inset-0 opacity-100 z-10">
          <img src="/imagenes/cafe/img (3).jpg" alt="Cultivadores de Tenejapa" class="absolute inset-0 w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-20">
            <div class="max-w-2xl text-white space-y-5">
              <span class="inline-block bg-brand-green/90 text-emerald-100 text-xs font-semibold uppercase tracking-widest px-3.5 py-1.5 rounded-full border border-emerald-400/30">
                Jomanichim, Tenejapa, Chiapas · 1,392 msnm
              </span>
              <h1 class="font-serif text-4xl sm:text-6xl font-bold leading-tight">
                Más de 30 años cultivando <span class="text-amber-400 italic font-serif">vida</span> en el café
              </h1>
              <p class="text-neutral-200 text-base sm:text-xl font-light leading-relaxed">
                Productores tseltales de café agroecológico bajo sombra. Desde 2025, con equipo propio de torrefacción para llevarte café en oro verde, tostado y molido.
              </p>
              <div class="pt-2 flex flex-wrap items-center gap-4">
                <a href="#productos" class="bg-brand-red hover:bg-red-800 text-white px-7 py-3.5 rounded-full font-semibold text-sm transition-all shadow-lg flex items-center gap-2">
                  <span>Personalizar Pedido</span>
                  <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
                <a href="#nosotros" class="bg-white/10 hover:bg-white/20 text-white border border-white/30 px-6 py-3.5 rounded-full font-medium text-sm backdrop-blur-sm transition-all">
                  Conocer la Historia
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="hero-slide absolute inset-0 opacity-0 z-0">
          <img src="/imagenes/cafe/img (2).jpg" alt="Tueste de café artesanal" class="absolute inset-0 w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-20">
            <div class="max-w-2xl text-white space-y-5">
              <span class="inline-block bg-brand-red/90 text-red-100 text-xs font-semibold uppercase tracking-widest px-3.5 py-1.5 rounded-full border border-red-400/30">
                Tueste Claro • Medio • Oscuro
              </span>
              <h1 class="font-serif text-4xl sm:text-6xl font-bold leading-tight">
                Sabor único ajustado a tu gusto
              </h1>
              <p class="text-neutral-200 text-base sm:text-xl font-light leading-relaxed">
                Variedades arábica garnica y caturra tostadas al punto que prefieras. Claro para acidez suave, medio para mayor aroma, oscuro para una bebida intensa.
              </p>
              <div class="pt-2">
                <a href="#productos" class="bg-brand-green hover:bg-emerald-800 text-white px-7 py-3.5 rounded-full font-semibold text-sm transition-all shadow-lg inline-flex items-center gap-2">
                  <span>Elegir Presentación</span>
                  <i data-lucide="coffee" class="w-4 h-4"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="hero-slide absolute inset-0 opacity-0 z-0">
          <img src="/imagenes/cafe/img (1).jpg" alt="Cafetales de Chiapas" class="absolute inset-0 w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-20">
            <div class="max-w-2xl text-white space-y-5">
              <span class="inline-block bg-amber-600/90 text-amber-100 text-xs font-semibold uppercase tracking-widest px-3.5 py-1.5 rounded-full border border-amber-300/30">
                Bolsa Laminada con Válvula · 250g, 500g, 1 kg
              </span>
              <h1 class="font-serif text-4xl sm:text-6xl font-bold leading-tight">
                Frescura protegida hasta tu hogar
              </h1>
              <p class="text-neutral-200 text-base sm:text-xl font-light leading-relaxed">
                Empacado en bolsas laminadas con válvula desgasificadora. Molido medio para cafetera o molido fino para café de olla. Envíos a toda la República Mexicana.
              </p>
              <div class="pt-2">
                <a href="#contacto" class="bg-brand-red hover:bg-red-800 text-white px-7 py-3.5 rounded-full font-semibold text-sm transition-all shadow-lg inline-flex items-center gap-2">
                  <span>Comprar Ahora</span>
                  <i data-lucide="truck" class="w-4 h-4"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      @endif

    </div>

    <!-- Botones de Control del Slider -->
    <button id="heroPrevBtn" class="absolute left-4 top-1/2 -translate-y-1/2 z-30 bg-black/40 hover:bg-brand-green text-white w-12 h-12 rounded-full flex items-center justify-center backdrop-blur-md border border-white/20 transition-all" aria-label="Slide anterior">
      <i data-lucide="chevron-left" class="w-6 h-6"></i>
    </button>
    <button id="heroNextBtn" class="absolute right-4 top-1/2 -translate-y-1/2 z-30 bg-black/40 hover:bg-brand-green text-white w-12 h-12 rounded-full flex items-center justify-center backdrop-blur-md border border-white/20 transition-all" aria-label="Slide siguiente">
      <i data-lucide="chevron-right" class="w-6 h-6"></i>
    </button>

    <!-- Indicadores de Posición (Dots) — generados dinámicamente -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-30 flex items-center gap-2">
      @if(isset($slides) && $slides->isNotEmpty())
        @foreach($slides as $loop_i => $slide)
          <button class="hero-dot {{ $loop_i === 0 ? 'w-8 h-2 bg-white' : 'w-2 h-2 bg-white/40' }} rounded-full transition-all"
                  data-slide="{{ $loop_i }}" aria-label="Ir a diapositiva {{ $loop_i + 1 }}"></button>
        @endforeach
      @else
        <button class="hero-dot w-8 h-2 rounded-full bg-white transition-all" data-slide="0" aria-label="Ir a diapositiva 1"></button>
        <button class="hero-dot w-2 h-2 rounded-full bg-white/40 transition-all" data-slide="1" aria-label="Ir a diapositiva 2"></button>
        <button class="hero-dot w-2 h-2 rounded-full bg-white/40 transition-all" data-slide="2" aria-label="Ir a diapositiva 3"></button>
      @endif
    </div>

  </section>

  <!-- ================= BARRA DE ATRIBUTOS AGROECOLÓGICOS ================= -->
  <section id="agroecologico" class="py-16 bg-white border-b border-brand-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-12 space-y-2">
        <span class="text-brand-green font-semibold text-xs tracking-widest uppercase">Compromiso Agroecológico</span>
        <h2 class="font-serif text-3xl sm:text-4xl font-bold text-brand-brown">
          Calidad consciente para salud y naturaleza
        </h2>
        <div class="w-16 h-1 bg-brand-green mx-auto rounded-full"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Tarjeta 1 -->
        <div class="bg-brand-sand/60 p-8 rounded-2xl border border-amber-900/10 hover:shadow-lg transition-all text-center space-y-3">
          <div class="w-14 h-14 bg-emerald-100 text-brand-green rounded-2xl flex items-center justify-center mx-auto mb-2">
            <i data-lucide="leaf" class="w-7 h-7"></i>
          </div>
          <h3 class="font-serif text-xl font-bold text-brand-brown">100% Libre de Agroquímicos</h3>
          <p class="text-neutral-600 text-sm leading-relaxed">
            Cultivo respetuoso bajo la sombra de la vegetación nativa de Tenejapa, cuidando los suelos y manantiales.
          </p>
        </div>

        <!-- Tarjeta 2 -->
        <div class="bg-brand-sand/60 p-8 rounded-2xl border border-amber-900/10 hover:shadow-lg transition-all text-center space-y-3">
          <div class="w-14 h-14 bg-amber-100 text-brand-brown rounded-2xl flex items-center justify-center mx-auto mb-2">
            <i data-lucide="shield-check" class="w-7 h-7"></i>
          </div>
          <h3 class="font-serif text-xl font-bold text-brand-brown">Empaque con Válvula</h3>
          <p class="text-neutral-600 text-sm leading-relaxed">
            Bolsas laminadas especiales con válvula desgasificadora unilateral que preservan el aroma y frescura del tostado.
          </p>
        </div>

        <!-- Tarjeta 3 -->
        <div class="bg-brand-sand/60 p-8 rounded-2xl border border-amber-900/10 hover:shadow-lg transition-all text-center space-y-3">
          <div class="w-14 h-14 bg-red-100 text-brand-red rounded-2xl flex items-center justify-center mx-auto mb-2">
            <i data-lucide="heart-handshake" class="w-7 h-7"></i>
          </div>
          <h3 class="font-serif text-xl font-bold text-brand-brown">Comercio Directo</h3>
          <p class="text-neutral-600 text-sm leading-relaxed">
            Fortalecemos la economía local de las familias campesinas tseltales en la comunidad de Jomanichim.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- ================= SECCIÓN HISTORIA / COMUNIDAD (RESPONSIVA PC Y MÓVIL) ================= -->
  <section id="nosotros" class="py-20 bg-brand-brown text-white relative overflow-hidden">
    <!-- Adornos gráficos de fondo -->
    <div class="absolute -right-20 -bottom-20 w-96 h-96 bg-brand-red/20 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -left-20 -top-20 w-96 h-96 bg-brand-green/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        
        <!-- Columna Izquierda: Texto Historia -->
        <div class="space-y-6">
          <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-red/80 text-red-100 text-xs font-semibold tracking-wider uppercase border border-red-400/30">
            <i data-lucide="sun" class="w-4 h-4"></i>
            <span>Significado Tseltal</span>
          </div>
          
          <h2 class="font-serif text-3xl sm:text-5xl font-bold text-amber-50 leading-tight">
            Kuxlejal es <span class="text-amber-400 italic font-serif">"vida"</span> en nuestra lengua
          </h2>

          <p class="text-neutral-200 leading-relaxed font-light text-base sm:text-lg">
            En el paraje de <strong class="text-amber-300 font-semibold">Jomanichil, municipio de Tenejapa</strong>, el café no es solamente un cultivo comercial: es el eje de nuestra comunidad y el sustento directo de nuestras familias.
          </p>

          <p class="text-neutral-300 leading-relaxed font-light text-sm sm:text-base">
            Nombrar a nuestro café Kuxlejal honra la armonía entre la tierra, la milpa, el agua de manantial y las familias tseltales. Al consumir Kuxlejal, te conectas directamente con la dignidad campesina y el cuidado de los bosques nativos de Chiapas.
          </p>

          <div class="pt-4 grid grid-cols-2 gap-6 border-t border-amber-900/60">
            <div>
              <span class="font-serif text-3xl font-bold text-amber-400 block">1,392 msnm</span>
              <span class="text-xs text-neutral-400 uppercase tracking-wider">Altitud sobre el nivel del mar</span>
            </div>
            <div>
              <span class="font-serif text-3xl font-bold text-emerald-400 block">+30 años</span>
              <span class="text-xs text-neutral-400 uppercase tracking-wider">De experiencia cafetalera</span>
            </div>
          </div>
        </div>

        <!-- Columna Derecha: Foto del Grupo + tarjetas -->
        <div class="space-y-4">

          <!-- Foto grupal principal -->
          <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/10">
            <img
              src="/imagenes/nosotros/grupo.jpg"
              alt="Productores de Kuxlejal — Jomanichim, Tenejapa, Chiapas"
              class="w-full h-80 object-cover object-top"
              onerror="this.onerror=null; this.src='https://placehold.co/800x480/1E6B38/FAF8F5?text=Foto+del+Grupo';"
            >
            <!-- Overlay con texto -->
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent p-5">
              <p class="text-white font-serif text-base font-semibold leading-snug">
                Productores de Café Kuxlejal
              </p>
              <p class="text-neutral-300 text-xs mt-1">
                Comunidad de Jomanichim, Tenejapa, Chiapas
              </p>
            </div>
          </div>

          <!-- Tarjetas de atributos -->
          <div class="grid grid-cols-2 gap-4">
            <div class="bg-brand-green/40 p-4 rounded-2xl border border-emerald-500/30 backdrop-blur-sm">
              <i data-lucide="heart" class="w-5 h-5 text-emerald-400 mb-2"></i>
              <h4 class="font-serif font-semibold text-white text-sm">Respeto Comunitario</h4>
              <p class="text-xs text-neutral-300 mt-1">Sustento justo para nuestras familias cafeteras.</p>
            </div>
            <div class="bg-brand-red/40 p-4 rounded-2xl border border-red-500/30 backdrop-blur-sm">
              <i data-lucide="sprout" class="w-5 h-5 text-amber-300 mb-2"></i>
              <h4 class="font-serif font-semibold text-white text-sm">Agroecología Pura</h4>
              <p class="text-xs text-neutral-300 mt-1">Sin fertilizantes ni pesticidas químicos.</p>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- ================= MOODBOARD VISUAL ================= -->
  <section id="moodboard" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
        <span class="text-brand-red uppercase font-semibold text-sm tracking-widest block">Proceso de Origen</span>
        <h2 class="font-serif text-3xl sm:text-4xl font-bold text-brand-brown">
          De la parcela a tu taza
        </h2>
        <div class="w-20 h-1 bg-brand-red mx-auto rounded-full"></div>
        <p class="text-neutral-600 text-base sm:text-lg">
          Un recorrido visual por el trabajo artesanal: recolección a mano de cerezas maduras, secado al sol y tueste preciso.
        </p>
      </div>

      <!-- Mosaico Moodboard -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

        @if(isset($galleryItems) && $galleryItems->isNotEmpty())
          @foreach($galleryItems as $galleryItem)
            <div class="relative group rounded-2xl overflow-hidden h-72 shadow-md">
              <img src="{{ asset($galleryItem->image_path) }}" alt="{{ $galleryItem->label }}"
                   class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                   onerror="this.onerror=null;this.src='https://placehold.co/600x480/1E6B38/FAF8F5?text={{ urlencode($galleryItem->label) }}';">
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-4 text-white">
                <span class="text-xs font-medium">{{ $galleryItem->label }}</span>
              </div>
            </div>
          @endforeach
        @else
          {{-- Fallback estático cuando no hay imágenes en BD --}}
          <div class="relative group rounded-2xl overflow-hidden h-72 shadow-md">
            <img src="/imagenes/procesos/1.Maduraci%C3%B3n%20en%20planta.jpg" alt="Maduración en planta" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.onerror=null;this.src='https://placehold.co/600x480/1E6B38/FAF8F5?text=1';">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-4 text-white">
              <span class="text-xs font-medium">1. Maduración en planta</span>
            </div>
          </div>
          <div class="relative group rounded-2xl overflow-hidden h-72 shadow-md">
            <img src="/imagenes/procesos/2.%20Corte%20selectiva.jpg" alt="Corte selectiva" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.onerror=null;this.src='https://placehold.co/600x480/1E6B38/FAF8F5?text=2';">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-4 text-white">
              <span class="text-xs font-medium">2. Corte selectiva</span>
            </div>
          </div>
          <div class="relative group rounded-2xl overflow-hidden h-72 shadow-md">
            <img src="/imagenes/procesos/3.%20En%20su%20punto.jpg" alt="En su punto" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.onerror=null;this.src='https://placehold.co/600x480/1E6B38/FAF8F5?text=3';">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-4 text-white">
              <span class="text-xs font-medium">3. En su punto</span>
            </div>
          </div>
          <div class="relative group rounded-2xl overflow-hidden h-72 shadow-md">
            <img src="/imagenes/procesos/4.%20Pergamino%20secado%20al%20sol.jpeg" alt="Pergamino secado al sol" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.onerror=null;this.src='https://placehold.co/600x480/1E6B38/FAF8F5?text=4';">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-4 text-white">
              <span class="text-xs font-medium">4. Pergamino secado al sol</span>
            </div>
          </div>
          <div class="relative group rounded-2xl overflow-hidden h-72 shadow-md">
            <img src="/imagenes/procesos/5.%20Nivel%20de%20tueste.jpg" alt="Nivel de tueste" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.onerror=null;this.src='https://placehold.co/600x480/4A2511/FAF8F5?text=5';">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-4 text-white">
              <span class="text-xs font-medium">5. Nivel de tueste</span>
            </div>
          </div>
          <div class="relative group rounded-2xl overflow-hidden h-72 shadow-md">
            <img src="/imagenes/procesos/6.%20Oro%20verde%20seleccionado.jpg" alt="Oro verde seleccionado" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.onerror=null;this.src='https://placehold.co/600x480/4A2511/FAF8F5?text=6';">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-4 text-white">
              <span class="text-xs font-medium">6. Oro verde seleccionado</span>
            </div>
          </div>
          <div class="relative group rounded-2xl overflow-hidden h-72 shadow-md">
            <img src="/imagenes/procesos/7.%20Tostado%20en%20grano.jpg" alt="Tostado en grano" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.onerror=null;this.src='https://placehold.co/600x480/4A2511/FAF8F5?text=7';">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-4 text-white">
              <span class="text-xs font-medium">7. Tostado en grano</span>
            </div>
          </div>
          <div class="relative group rounded-2xl overflow-hidden h-72 shadow-md">
            <img src="/imagenes/procesos/Pergamino%20en%20costal%20yute.jpeg" alt="Pergamino en costal de yute" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" onerror="this.onerror=null;this.src='https://placehold.co/600x480/4A2511/FAF8F5?text=8';">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-4 text-white">
              <span class="text-xs font-medium">8. Pergamino en costal de yute</span>
            </div>
          </div>
        @endif

      </div>

    </div>
  </section>

  <!-- ================= CATÁLOGO Y PERSONALIZADOR DE PRODUCTOS ================= -->
  <section id="productos" class="py-20 bg-brand-sand/40 border-t border-brand-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
        <span class="text-brand-red uppercase font-semibold text-sm tracking-widest block">Personaliza tu Selección</span>
        <h2 class="font-serif text-3xl sm:text-4xl font-bold text-brand-brown">
          Elige tueste, molienda y presentación
        </h2>
        <div class="w-20 h-1 bg-brand-green mx-auto rounded-full"></div>
        <p class="text-neutral-600 text-base sm:text-lg">
          Preparamos tu café según tus preferencias exactas. Empacado en bolsa laminada con válvula desgasificadora para máxima durabilidad y aroma.
        </p>
      </div>

      <!-- CATÁLOGO DE PRODUCTOS -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">

        <!-- Producto 1: Café Oro Verde -->
        <div class="group bg-white rounded-3xl overflow-hidden border border-brand-sand shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 flex flex-col">
          <div class="relative h-44 bg-gradient-to-br from-emerald-800 to-brand-green flex items-center justify-center">
            <div class="w-20 h-20 bg-white/15 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/25 shadow-lg">
              <i data-lucide="sprout" class="w-10 h-10 text-white"></i>
            </div>
            <span class="absolute top-4 right-4 bg-black/30 text-white text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full backdrop-blur-sm border border-white/20">
              Por pedido
            </span>
          </div>
          <div class="p-6 flex flex-col flex-1 space-y-3">
            <h3 class="font-serif text-xl font-bold text-brand-brown">Café oro verde</h3>
            <p class="text-neutral-500 text-sm leading-relaxed flex-1">
              Grano verde seleccionado (planchuela o café europeo). Variedades arábica, garnica y caturra, cultivado bajo sombra, lavado y secado al sol.
            </p>
            <div class="pt-4 border-t border-brand-sand/70 flex flex-wrap gap-2">
              <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-700 text-[11px] font-semibold px-2.5 py-1 rounded-full border border-emerald-100">
                <i data-lucide="package" class="w-3 h-3"></i> 25 kg · 50 kg
              </span>
              <span class="inline-flex items-center gap-1.5 bg-amber-50 text-amber-700 text-[11px] font-semibold px-2.5 py-1 rounded-full border border-amber-100">
                Saco de yute + Ecotac
              </span>
            </div>
          </div>
        </div>

        <!-- Producto 2: Café Tostado en Grano -->
        <div class="group bg-white rounded-3xl overflow-hidden border border-brand-sand shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 flex flex-col">
          <div class="relative h-44 bg-gradient-to-br from-amber-900 to-brand-brown flex items-center justify-center">
            <div class="w-20 h-20 bg-white/15 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/25 shadow-lg">
              <i data-lucide="flame" class="w-10 h-10 text-white"></i>
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1 space-y-3">
            <h3 class="font-serif text-xl font-bold text-brand-brown">Café tostado en grano</h3>
            <p class="text-neutral-500 text-sm leading-relaxed flex-1">
              Tueste a tu elección: <strong class="text-brand-brown">claro</strong> (sabor original, ligera acidez), <strong class="text-brand-brown">medio</strong> (mayor aroma) u <strong class="text-brand-brown">oscuro</strong> (concentrado e intenso).
            </p>
            <div class="pt-4 border-t border-brand-sand/70 flex flex-wrap gap-2">
              <span class="inline-flex items-center gap-1.5 bg-amber-50 text-amber-600 text-[11px] font-semibold px-2.5 py-1 rounded-full border border-amber-100">Ligero</span>
              <span class="inline-flex items-center gap-1.5 bg-amber-100 text-amber-800 text-[11px] font-semibold px-2.5 py-1 rounded-full border border-amber-200">Medio</span>
              <span class="inline-flex items-center gap-1.5 bg-amber-200 text-amber-900 text-[11px] font-semibold px-2.5 py-1 rounded-full border border-amber-300">Oscuro</span>
              <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-700 text-[11px] font-semibold px-2.5 py-1 rounded-full border border-emerald-100">1,392 msnm</span>
            </div>
          </div>
        </div>

        <!-- Producto 3: Café Tostado y Molido -->
        <div class="group bg-white rounded-3xl overflow-hidden border border-brand-sand shadow-sm hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 flex flex-col">
          <div class="relative h-44 bg-gradient-to-br from-brand-red to-red-900 flex items-center justify-center">
            <div class="w-20 h-20 bg-white/15 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/25 shadow-lg">
              <i data-lucide="coffee" class="w-10 h-10 text-white"></i>
            </div>
          </div>
          <div class="p-6 flex flex-col flex-1 space-y-3">
            <h3 class="font-serif text-xl font-bold text-brand-brown">Café tostado y molido</h3>
            <p class="text-neutral-500 text-sm leading-relaxed flex-1">
              Molido <strong class="text-brand-brown">medio</strong> (ideal para cafetera) o molido <strong class="text-brand-brown">fino</strong> (para café de olla). En bolsas laminadas con válvula desgasificadora.
            </p>
            <div class="pt-4 border-t border-brand-sand/70 flex flex-wrap gap-2">
              <span class="inline-flex items-center gap-1.5 bg-red-50 text-brand-red text-[11px] font-semibold px-2.5 py-1 rounded-full border border-red-100">250 g</span>
              <span class="inline-flex items-center gap-1.5 bg-red-50 text-brand-red text-[11px] font-semibold px-2.5 py-1 rounded-full border border-red-100">500 g</span>
              <span class="inline-flex items-center gap-1.5 bg-red-50 text-brand-red text-[11px] font-semibold px-2.5 py-1 rounded-full border border-red-100">1 kg</span>
              <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-700 text-[11px] font-semibold px-2.5 py-1 rounded-full border border-emerald-100">
                <i data-lucide="shield-check" class="w-3 h-3"></i> Válvula desgasificadora
              </span>
            </div>
          </div>
        </div>

      </div>

      <!-- PERSONALIZADOR INTERACTIVO DE CAFÉ -->
      <div class="bg-brand-brown rounded-3xl overflow-hidden shadow-2xl max-w-5xl mx-auto">

        <!-- Cabecera del configurador -->
        <div class="px-8 py-6 border-b border-white/10 flex items-center gap-4">
          <div class="w-10 h-10 bg-brand-green rounded-xl flex items-center justify-center flex-shrink-0 shadow-md">
            <i data-lucide="settings-2" class="w-5 h-5 text-white"></i>
          </div>
          <div>
            <h3 class="font-serif text-xl font-bold text-amber-50">Personaliza tu pedido</h3>
            <p class="text-xs text-neutral-400 mt-0.5">Selecciona cada opción y envíanos tu pedido directo por WhatsApp</p>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">

          <!-- Columna izquierda: imagen + garantías -->
          <div class="p-8 border-b md:border-b-0 md:border-r border-white/10 flex flex-col gap-6">
            <div class="relative rounded-2xl overflow-hidden h-56 shadow-lg">
              <img src="https://images.unsplash.com/photo-1559056199-641a0ac8b55e?auto=format&fit=crop&w=800&q=80" alt="Café Kuxlejal" class="w-full h-full object-cover">
              <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
              <span class="absolute bottom-3 left-3 bg-brand-green text-white text-[11px] font-bold px-3 py-1.5 rounded-full shadow-md">
                Empaque con válvula unilateral
              </span>
            </div>
            <ul class="space-y-3">
              <li class="flex items-start gap-3 text-sm text-neutral-300">
                <i data-lucide="check-circle" class="w-4 h-4 text-brand-green flex-shrink-0 mt-0.5"></i>
                <span>Bolsa laminada protectora de luz y humedad</span>
              </li>
              <li class="flex items-start gap-3 text-sm text-neutral-300">
                <i data-lucide="check-circle" class="w-4 h-4 text-brand-green flex-shrink-0 mt-0.5"></i>
                <span>Envíos por paquetería o entrega en comunidad</span>
              </li>
              <li class="flex items-start gap-3 text-sm text-neutral-300">
                <i data-lucide="check-circle" class="w-4 h-4 text-brand-green flex-shrink-0 mt-0.5"></i>
                <span>100% arábica agroecológico · Sin agroquímicos</span>
              </li>
            </ul>
          </div>

          <!-- Columna derecha: opciones -->
          <div class="p-8 space-y-6">

            <!-- 1. Formato -->
            <div>
              <div class="flex items-center gap-2 mb-3">
                <span class="w-5 h-5 rounded-full bg-brand-green text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0">1</span>
                <label class="text-xs font-bold uppercase text-amber-200 tracking-wider">Formato del café</label>
              </div>
              <div class="grid grid-cols-2 gap-2">
                <button type="button" onclick="selectOption('formato', 'En Grano')" id="opt-grano" class="opt-btn-formato bg-brand-green text-white py-3 px-3 rounded-xl font-semibold text-xs border-2 border-brand-green transition-all">
                  En grano
                </button>
                <button type="button" onclick="selectOption('formato', 'Molido')" id="opt-molido" class="opt-btn-formato bg-white/10 text-neutral-300 py-3 px-3 rounded-xl font-semibold text-xs border-2 border-white/10 hover:bg-white/20 transition-all">
                  Molido
                </button>
              </div>
            </div>

            <!-- 2. Tipo de Molienda (se muestra/oculta) -->
            <div id="molienda-container" class="hidden">
              <div class="flex items-center gap-2 mb-3">
                <span class="w-5 h-5 rounded-full bg-brand-green text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0">2</span>
                <label class="text-xs font-bold uppercase text-amber-200 tracking-wider">Tipo de molienda</label>
              </div>
              <div class="grid grid-cols-2 gap-2">
                <button type="button" onclick="selectOption('molienda', 'Para Cafetera')" id="opt-cafetera" class="opt-btn-molienda bg-amber-500 text-white py-3 px-3 rounded-xl font-semibold text-xs border-2 border-amber-500 transition-all">
                  Para cafetera
                </button>
                <button type="button" onclick="selectOption('molienda', 'Para Olla')" id="opt-olla" class="opt-btn-molienda bg-white/10 text-neutral-300 py-3 px-3 rounded-xl font-semibold text-xs border-2 border-white/10 hover:bg-white/20 transition-all">
                  Para olla
                </button>
              </div>
            </div>

            <!-- 3. Nivel de Tueste -->
            <div>
              <div class="flex items-center gap-2 mb-3">
                <span class="w-5 h-5 rounded-full bg-brand-green text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0">3</span>
                <label class="text-xs font-bold uppercase text-amber-200 tracking-wider">Nivel de tueste</label>
              </div>
              <div class="grid grid-cols-3 gap-2">
                <button type="button" onclick="selectOption('tueste', 'Ligero')" id="opt-tueste-ligero" class="opt-btn-tueste bg-white/10 text-neutral-300 py-3 px-2 rounded-xl font-semibold text-xs border-2 border-white/10 hover:bg-white/20 transition-all text-center">
                  Ligero
                </button>
                <button type="button" onclick="selectOption('tueste', 'Medio')" id="opt-tueste-medio" class="opt-btn-tueste bg-amber-500 text-white py-3 px-2 rounded-xl font-semibold text-xs border-2 border-amber-500 transition-all text-center">
                  Medio
                </button>
                <button type="button" onclick="selectOption('tueste', 'Oscuro')" id="opt-tueste-oscuro" class="opt-btn-tueste bg-white/10 text-neutral-300 py-3 px-2 rounded-xl font-semibold text-xs border-2 border-white/10 hover:bg-white/20 transition-all text-center">
                  Oscuro
                </button>
              </div>
            </div>

            <!-- 4. Presentación / Peso -->
            <div>
              <div class="flex items-center gap-2 mb-3">
                <span class="w-5 h-5 rounded-full bg-brand-green text-white text-[10px] font-bold flex items-center justify-center flex-shrink-0">4</span>
                <label class="text-xs font-bold uppercase text-amber-200 tracking-wider">Presentación</label>
              </div>
              <div class="grid grid-cols-3 gap-2">
                <button type="button" onclick="selectOption('peso', '250 g')" id="opt-250g" class="opt-btn-peso bg-white/10 text-neutral-300 py-3 px-2 rounded-xl font-semibold text-xs border-2 border-white/10 hover:bg-white/20 transition-all">250 g</button>
                <button type="button" onclick="selectOption('peso', '500 g')" id="opt-500g" class="opt-btn-peso bg-brand-red text-white py-3 px-2 rounded-xl font-semibold text-xs border-2 border-brand-red transition-all">500 g</button>
                <button type="button" onclick="selectOption('peso', '1 kg')" id="opt-1kg" class="opt-btn-peso bg-white/10 text-neutral-300 py-3 px-2 rounded-xl font-semibold text-xs border-2 border-white/10 hover:bg-white/20 transition-all">1 kg</button>
                <button type="button" onclick="selectOption('peso', '25 kg')" id="opt-25kg" class="opt-btn-peso bg-white/10 text-neutral-300 py-3 px-2 rounded-xl font-semibold text-xs border-2 border-white/10 hover:bg-white/20 transition-all">25 kg</button>
                <button type="button" onclick="selectOption('peso', '50 kg')" id="opt-50kg" class="opt-btn-peso bg-white/10 text-neutral-300 py-3 px-2 rounded-xl font-semibold text-xs border-2 border-white/10 hover:bg-white/20 transition-all">50 kg</button>
              </div>
            </div>

            <!-- Pedido por WhatsApp -->
            <div class="pt-2">
              <a id="orderBtn" href="https://wa.me/5219610000000?text=Hola! Quisiera pedir Café Kuxlejal Agroecológico con las siguientes especificaciones:%0A• Formato: En Grano%0A• Tueste: Medio%0A• Presentación: 500 g." target="_blank" class="w-full bg-[#25D366] hover:bg-[#1ebc57] text-white py-4 px-6 rounded-2xl font-bold flex items-center justify-center gap-2 shadow-lg transition-all transform hover:-translate-y-0.5 text-sm">
                <i data-lucide="message-circle" class="w-5 h-5"></i>
                <span>Ordenar selección por WhatsApp</span>
              </a>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ================= BLOG / ENTRADAS ================= -->
  <section id="blog" class="py-20 bg-white border-t border-brand-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
        <span class="text-brand-green uppercase font-semibold text-sm tracking-widest block">Noticias y comunidad</span>
        <h2 class="font-serif text-3xl sm:text-4xl font-bold text-brand-brown">
          Novedades del cafetal
        </h2>
        <div class="w-20 h-1 bg-brand-green mx-auto rounded-full"></div>
        <p class="text-neutral-600 text-base sm:text-lg">
          Historias, procesos y actualidad desde Jomanichil, Tenejapa, Chiapas.
        </p>
      </div>

      @if(isset($latestPosts) && $latestPosts->isNotEmpty())
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
          @foreach($latestPosts as $post)
            <a href="{{ route('blog.show', $post->slug) }}" class="group bg-white rounded-3xl overflow-hidden border border-brand-sand shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex flex-col">
              <div class="relative h-52 overflow-hidden bg-brand-sand">
                @if($post->featured_image)
                  <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}"
                       class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                       onerror="this.onerror=null;this.src='https://placehold.co/600x400/1E6B38/FAF8F5?text=Kuxlejal';">
                @else
                  <div class="w-full h-full bg-gradient-to-br from-brand-green to-emerald-800 flex items-center justify-center">
                    <i data-lucide="newspaper" class="w-12 h-12 text-white/40"></i>
                  </div>
                @endif
              </div>
              <div class="p-6 flex flex-col flex-1 space-y-3">
                <span class="text-xs text-neutral-400 font-medium">
                  {{ $post->published_at ? $post->published_at->locale('es')->isoFormat('D [de] MMMM, YYYY') : '' }}
                </span>
                <h3 class="font-serif text-lg font-bold text-brand-brown leading-snug group-hover:text-brand-green transition-colors">
                  {{ $post->title }}
                </h3>
                @if($post->excerpt)
                  <p class="text-neutral-500 text-sm leading-relaxed flex-1">{{ Str::limit($post->excerpt, 120) }}</p>
                @endif
                <span class="inline-flex items-center gap-1.5 text-brand-green text-xs font-semibold mt-2">
                  Leer más <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                </span>
              </div>
            </a>
          @endforeach
        </div>

        <div class="text-center">
          <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 bg-brand-brown hover:bg-amber-900 text-white px-8 py-3.5 rounded-full font-semibold text-sm transition-all shadow-md">
            Ver todas las entradas
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>

      @else
        <div class="text-center py-16 text-neutral-400 space-y-3">
          <i data-lucide="notebook-pen" class="w-12 h-12 mx-auto text-neutral-300"></i>
          <p class="text-sm">Próximamente compartiremos noticias y artículos del cafetal.</p>
        </div>
      @endif

    </div>
  </section>

  <!-- ================= SECCIÓN DE CONTACTO DIRECTO ================= -->
  <section id="contacto" class="py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8">
      
      <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-emerald-100 text-brand-green mb-2">
        <i data-lucide="message-square" class="w-8 h-8"></i>
      </div>

      <h2 class="font-serif text-3xl sm:text-5xl font-bold text-brand-brown">
        ¿Listos para disfrutar un café con historia?
      </h2>

      <p class="text-neutral-600 text-base sm:text-xl max-w-2xl mx-auto leading-relaxed">
        Comercializamos directamente trayendo tu café en la comunidad de Jomanichim o enviándolo por paquetería a cualquier parte de la República Mexicana.
      </p>

      <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
        <a href="https://wa.me/5219610000000?text=Hola!%20Me%20interesa%20comprar%20Caf%C3%A9%20Kuxlejal.%20%C2%BFMe%20pueden%20dar%20informaci%C3%B3n?" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-[#25D366] hover:bg-[#1ebc57] text-white px-8 py-4 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-0.5">
          <i data-lucide="phone-call" class="w-6 h-6"></i>
          <span>Contactar por WhatsApp</span>
        </a>
      </div>

      <div class="pt-8 grid grid-cols-1 sm:grid-cols-3 gap-6 text-sm text-neutral-500 border-t border-gray-100 max-w-3xl mx-auto">
        <div class="flex items-center justify-center gap-2">
          <i data-lucide="truck" class="w-4 h-4 text-brand-green"></i>
          <span>Envíos vía paquetería a todo México</span>
        </div>
        <div class="flex items-center justify-center gap-2">
          <i data-lucide="map-pin" class="w-4 h-4 text-brand-green"></i>
          <span>Entrega directa en comunidad</span>
        </div>
        <div class="flex items-center justify-center gap-2">
          <i data-lucide="heart" class="w-4 h-4 text-brand-green"></i>
          <span>Cuidado de tu salud y ambiente</span>
        </div>
      </div>

    </div>
  </section>

  <!-- ================= MAPA DE UBICACIÓN ================= -->
  <section class="bg-brand-sand/40 border-t border-brand-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <div class="text-center mb-8 space-y-2">
        <span class="text-brand-green font-semibold text-xs tracking-widest uppercase">Dónde estamos</span>
        <h2 class="font-serif text-2xl sm:text-3xl font-bold text-brand-brown">
          Jomanichil, Tenejapa, Chiapas
        </h2>
      </div>
      <div class="rounded-2xl overflow-hidden shadow-lg border border-brand-sand">
        <iframe
          src="https://maps.google.com/maps?q=Tenejapa,+Chiapas,+M%C3%A9xico&output=embed"
          width="100%"
          height="420"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Ubicación de Kuxlejal — Jomanichil, Tenejapa, Chiapas">
        </iframe>
      </div>
    </div>
  </section>

  <!-- ================= FOOTER ================= -->
  <footer class="bg-brand-brown text-amber-100 border-t-8 border-brand-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center text-center md:text-left">
        
        <!-- Columna 1: Logo & Slogan -->
        <div class="space-y-3">
          <img src="kuxlejal.png" alt="Kuxlejal Logo" class="h-12 mx-auto md:mx-0 object-contain" onerror="this.onerror=null; this.src='https://placehold.co/150x50/ffffff/4A2511?text=KUXLEJAL';">
          <p class="text-xs text-neutral-300">
            Café agroecológico cultivado con dignidad y respeto en Jomanichim, Tenejapa, Chiapas.
          </p>
        </div>

        <!-- Columna 2: Enlaces Rápidos -->
        <div class="flex justify-center space-x-6 text-sm">
          <a href="#inicio" class="hover:text-amber-400 transition-colors">Inicio</a>
          <a href="#agroecologico" class="hover:text-amber-400 transition-colors">Agroecología</a>
          <a href="#nosotros" class="hover:text-amber-400 transition-colors">Nosotros</a>
          <a href="#productos" class="hover:text-amber-400 transition-colors">Productos</a>
        </div>

        <!-- Columna 3: Horario y Créditos -->
        <div class="text-center md:text-right text-xs text-neutral-400 space-y-2">
          <div class="flex items-center justify-center md:justify-end gap-2 text-amber-100">
            <i data-lucide="clock" class="w-4 h-4 text-brand-green flex-shrink-0"></i>
            <span class="font-semibold">Horario de atención</span>
          </div>
          <p class="text-neutral-300">Lunes a sábado · 8:00 am – 4:00 pm</p>
          <p class="mt-2">© 2026 Kuxlejal. Todos los derechos reservados.</p>
          <p class="text-emerald-400 font-medium">Sembrando vida, cosechando calidad.</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- ================= LÓGICA JAVASCRIPT ================= -->
  <script>
    // Inicializar Iconos Lucide
    lucide.createIcons();

    // LÓGICA DEL PERSONALIZADOR DE PRODUCTO
    let selectedFormato = 'En Grano';
    let selectedMolienda = 'Para Cafetera';
    let selectedTueste = 'Medio';
    let selectedPeso = '500 g';

    function selectOption(category, value) {
      if (category === 'formato') {
        selectedFormato = value;
        const moliendaContainer = document.getElementById('molienda-container');
        if (value === 'Molido') {
          moliendaContainer.classList.remove('hidden');
        } else {
          moliendaContainer.classList.add('hidden');
        }
        
        document.querySelectorAll('.opt-btn-formato').forEach(btn => {
          btn.className = 'opt-btn-formato bg-white/10 text-neutral-300 py-3 px-3 rounded-xl font-semibold text-xs border-2 border-white/10 hover:bg-white/20 transition-all';
        });
        const activeBtn = value === 'En Grano' ? document.getElementById('opt-grano') : document.getElementById('opt-molido');
        activeBtn.className = 'opt-btn-formato bg-brand-green text-white py-3 px-3 rounded-xl font-semibold text-xs border-2 border-brand-green transition-all';
      }

      if (category === 'molienda') {
        selectedMolienda = value;
        document.querySelectorAll('.opt-btn-molienda').forEach(btn => {
          btn.className = 'opt-btn-molienda bg-white/10 text-neutral-300 py-3 px-3 rounded-xl font-semibold text-xs border-2 border-white/10 hover:bg-white/20 transition-all';
        });
        const activeBtn = value === 'Para Cafetera' ? document.getElementById('opt-cafetera') : document.getElementById('opt-olla');
        activeBtn.className = 'opt-btn-molienda bg-amber-500 text-white py-3 px-3 rounded-xl font-semibold text-xs border-2 border-amber-500 transition-all';
      }

      if (category === 'tueste') {
        selectedTueste = value;
        document.querySelectorAll('.opt-btn-tueste').forEach(btn => {
          btn.className = 'opt-btn-tueste bg-white/10 text-neutral-300 py-3 px-2 rounded-xl font-semibold text-xs border-2 border-white/10 hover:bg-white/20 transition-all text-center';
        });
        let activeBtnId = 'opt-tueste-medio';
        if (value === 'Ligero') activeBtnId = 'opt-tueste-ligero';
        if (value === 'Oscuro') activeBtnId = 'opt-tueste-oscuro';
        document.getElementById(activeBtnId).className = 'opt-btn-tueste bg-amber-500 text-white py-3 px-2 rounded-xl font-semibold text-xs border-2 border-amber-500 transition-all text-center';
      }

      if (category === 'peso') {
        selectedPeso = value;

        document.querySelectorAll('.opt-btn-peso').forEach(btn => {
          btn.className = 'opt-btn-peso bg-white/10 text-neutral-300 py-3 px-2 rounded-xl font-semibold text-xs border-2 border-white/10 hover:bg-white/20 transition-all';
        });
        const pesoIdMap = { '250 g': 'opt-250g', '500 g': 'opt-500g', '1 kg': 'opt-1kg', '25 kg': 'opt-25kg', '50 kg': 'opt-50kg' };
        const activePesoId = pesoIdMap[value] || 'opt-500g';
        document.getElementById(activePesoId).className = 'opt-btn-peso bg-brand-red text-white py-3 px-2 rounded-xl font-semibold text-xs border-2 border-brand-red transition-all';
      }

      updateWhatsAppLink();
    }

    function updateWhatsAppLink() {
      let moliendaText = selectedFormato === 'Molido' ? `%0A• Molienda: ${selectedMolienda}` : '';
      let text = `Hola! Quisiera pedir Café Kuxlejal Agroecológico con las siguientes especificaciones:%0A• Formato: ${selectedFormato}${moliendaText}%0A• Tueste: ${selectedTueste}%0A• Presentación: ${selectedPeso}.`;
      
      const orderBtn = document.getElementById('orderBtn');
      if (orderBtn) {
        orderBtn.href = `https://wa.me/5219610000000?text=${text}`;
      }
    }

    // Inicializar enlace de WhatsApp
    updateWhatsAppLink();

    // LÓGICA DEL SLIDER PRINCIPAL (HERO TOP CAROUSEL)
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.hero-dot');
    const prevBtn = document.getElementById('heroPrevBtn');
    const nextBtn = document.getElementById('heroNextBtn');
    
    let currentSlide = 0;
    const totalSlides = slides.length;
    let autoplayTimer = null;

    function showSlide(index) {
      if (index >= totalSlides) currentSlide = 0;
      else if (index < 0) currentSlide = totalSlides - 1;
      else currentSlide = index;

      slides.forEach((slide, idx) => {
        if (idx === currentSlide) {
          slide.classList.remove('opacity-0', 'z-0');
          slide.classList.add('opacity-100', 'z-10');
        } else {
          slide.classList.remove('opacity-100', 'z-10');
          slide.classList.add('opacity-0', 'z-0');
        }
      });

      dots.forEach((dot, idx) => {
        if (idx === currentSlide) {
          dot.classList.remove('bg-white/40');
          dot.classList.add('bg-white', 'w-8');
        } else {
          dot.classList.remove('bg-white', 'w-8');
          dot.classList.add('bg-white/40');
        }
      });
    }

    function nextSlide() {
      showSlide(currentSlide + 1);
    }

    function prevSlide() {
      showSlide(currentSlide - 1);
    }

    function startAutoplay() {
      stopAutoplay();
      autoplayTimer = setInterval(nextSlide, 5000);
    }

    function stopAutoplay() {
      if (autoplayTimer) clearInterval(autoplayTimer);
    }

    if (nextBtn && prevBtn) {
      nextBtn.addEventListener('click', () => {
        nextSlide();
        startAutoplay();
      });

      prevBtn.addEventListener('click', () => {
        prevSlide();
        startAutoplay();
      });
    }

    dots.forEach((dot) => {
      dot.addEventListener('click', (e) => {
        const slideIdx = parseInt(e.target.getAttribute('data-slide'));
        showSlide(slideIdx);
        startAutoplay();
      });
    });

    startAutoplay();

    // MENÚ MÓVIL INTERACTIVO
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

    if (mobileMenuBtn && mobileMenu) {
      mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });

      mobileNavLinks.forEach(link => {
        link.addEventListener('click', () => {
          mobileMenu.classList.add('hidden');
        });
      });
    }
  </script>

</body>
</html>