<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kuxlejal | Café Agroecológico de Jomanichil, Tenejapa, Chiapas</title>
  
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
      <a href="https://wa.me/5219610000000?text=Hola!%20Me%20interesa%20comprar%20Caf%C3%A9%20Kuxlejal" target="_blank" class="w-full bg-brand-green text-white py-3 rounded-xl font-semibold text-center block text-sm">
        Contactar por WhatsApp
      </a>
    </div>
  </header>

  <!-- ================= HERO CAROUSEL / SLIDER PRINCIPAL ================= -->
  <section id="inicio" class="relative bg-brand-brown h-[82vh] min-h-[550px] overflow-hidden">
    
    <!-- Slides Container -->
    <div class="relative w-full h-full">
      
      <!-- Slide 1: Cultivadores -->
      <div class="hero-slide absolute inset-0 opacity-100 z-10">
        <img src="/imagenes/cafe/img (3).jpg" alt="Cultivadores de Tenejapa" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-20">
          <div class="max-w-2xl text-white space-y-5">
            <span class="inline-block bg-brand-green/90 text-emerald-100 text-xs font-semibold uppercase tracking-widest px-3.5 py-1.5 rounded-full border border-emerald-400/30">
              Jomanichil, Tenejapa, Chiapas
            </span>
            <h1 class="font-serif text-4xl sm:text-6xl font-bold leading-tight">
              Manos Cultivadoras que Dan <span class="text-amber-400 italic font-serif">Vida</span> al Café
            </h1>
            <p class="text-neutral-200 text-base sm:text-xl font-light leading-relaxed">
              Café agroecológico cultivado con orgullo y tradición tseltal. Cuidado bajo la sombra de nuestros bosques nativos.
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

      <!-- Slide 2: Tueste Artesanal -->
      <div class="hero-slide absolute inset-0 opacity-0 z-0">
        <img src="/imagenes/cafe/img (2).jpg" alt="Tueste de café artesanal" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-20">
          <div class="max-w-2xl text-white space-y-5">
            <span class="inline-block bg-brand-red/90 text-red-100 text-xs font-semibold uppercase tracking-widest px-3.5 py-1.5 rounded-full border border-red-400/30">
              Tueste Ligero • Medio • Oscuro
            </span>
            <h1 class="font-serif text-4xl sm:text-6xl font-bold leading-tight">
              Sabor Único Ajustado a tu Gusto
            </h1>
            <p class="text-neutral-200 text-base sm:text-xl font-light leading-relaxed">
              Selección rigurosa de grano de altura. Elige tu nivel de tueste ideal y molienda especial para olla o cafetera.
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

      <!-- Slide 3: Empaque Conservación -->
      <div class="hero-slide absolute inset-0 opacity-0 z-0">
        <img src="/imagenes/cafe/img (1).jpg" alt="Cafetales de Chiapas" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center relative z-20">
          <div class="max-w-2xl text-white space-y-5">
            <span class="inline-block bg-amber-600/90 text-amber-100 text-xs font-semibold uppercase tracking-widest px-3.5 py-1.5 rounded-full border border-amber-300/30">
              Empaque Laminado con Válvula
            </span>
            <h1 class="font-serif text-4xl sm:text-6xl font-bold leading-tight">
              Frescura Protegida hasta tu Hogar
            </h1>
            <p class="text-neutral-200 text-base sm:text-xl font-light leading-relaxed">
              Conservación garantizada en cada bolsa. Envíos vía paquetería a todo México o entregas directas en la comunidad.
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

    </div>

    <!-- Botones de Control del Slider -->
    <button id="heroPrevBtn" class="absolute left-4 top-1/2 -translate-y-1/2 z-30 bg-black/40 hover:bg-brand-green text-white w-12 h-12 rounded-full flex items-center justify-center backdrop-blur-md border border-white/20 transition-all" aria-label="Slide anterior">
      <i data-lucide="chevron-left" class="w-6 h-6"></i>
    </button>
    <button id="heroNextBtn" class="absolute right-4 top-1/2 -translate-y-1/2 z-30 bg-black/40 hover:bg-brand-green text-white w-12 h-12 rounded-full flex items-center justify-center backdrop-blur-md border border-white/20 transition-all" aria-label="Slide siguiente">
      <i data-lucide="chevron-right" class="w-6 h-6"></i>
    </button>

    <!-- Indicadores de Posición (Dots) -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-30 flex items-center gap-2">
      <button class="hero-dot w-8 h-2 rounded-full bg-white transition-all" data-slide="0" aria-label="Ir a diapositiva 1"></button>
      <button class="hero-dot w-2 h-2 rounded-full bg-white/40 transition-all" data-slide="1" aria-label="Ir a diapositiva 2"></button>
      <button class="hero-dot w-2 h-2 rounded-full bg-white/40 transition-all" data-slide="2" aria-label="Ir a diapositiva 3"></button>
    </div>

  </section>

  <!-- ================= BARRA DE ATRIBUTOS AGROECOLÓGICOS ================= -->
  <section id="agroecologico" class="py-16 bg-white border-b border-brand-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-12 space-y-2">
        <span class="text-brand-green font-semibold text-xs tracking-widest uppercase">Compromiso Agroecológico</span>
        <h2 class="font-serif text-3xl sm:text-4xl font-bold text-brand-brown">
          Calidad Consciente para Salud y Naturaleza
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
            Fortalecemos la economía local de las familias campesinas tseltales en la comunidad de Jomanichil.
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
            Kuxlejal es <span class="text-amber-400 italic font-serif">"Vida"</span> en Nuestra Lengua
          </h2>
          
          <p class="text-neutral-200 leading-relaxed font-light text-base sm:text-lg">
            En el paraje de <strong class="text-amber-300 font-semibold">Jomanichil, municipio de Tenejapa</strong>, el café no es solamente un cultivo comercial: es el eje de nuestra comunidad y el sustento directo de nuestras familias.
          </p>
          
          <p class="text-neutral-300 leading-relaxed font-light text-sm sm:text-base">
            Nombrar a nuestro café <em>Kuxlejal</em> honra la armonía entre la tierra, la milpa, el agua de manantial y las familias tseltales. Al consumir Kuxlejal, te conectas directamente con la dignidad campesina y el cuidado de los bosques nativos de Chiapas.
          </p>

          <div class="pt-4 grid grid-cols-2 gap-6 border-t border-amber-900/60">
            <div>
              <span class="font-serif text-3xl font-bold text-amber-400 block">+1,200m</span>
              <span class="text-xs text-neutral-400 uppercase tracking-wider">Altitud sobre el nivel del mar</span>
            </div>
            <div>
              <span class="font-serif text-3xl font-bold text-emerald-400 block">100%</span>
              <span class="text-xs text-neutral-400 uppercase tracking-wider">Trabajo Familiar Directo</span>
            </div>
          </div>
        </div>

        <!-- Columna Derecha: Mosaico de Imágenes de la Comunidad -->
        <div class="grid grid-cols-2 gap-4">
          <div class="space-y-4">
            <img src="https://images.unsplash.com/photo-1587734195503-904fca47e0e9?auto=format&fit=crop&w=800&q=80" alt="Granos de café selección" class="rounded-2xl shadow-lg object-cover h-64 w-full border border-white/10">
            <div class="bg-brand-green/40 p-5 rounded-2xl border border-emerald-500/30 backdrop-blur-sm">
              <i data-lucide="heart" class="w-6 h-6 text-emerald-400 mb-2"></i>
              <h4 class="font-serif font-semibold text-white text-sm">Respeto Comunitario</h4>
              <p class="text-xs text-neutral-300 mt-1">Sustento justo para nuestras familias cafeteras.</p>
            </div>
          </div>

          <div class="space-y-4 pt-8">
            <div class="bg-brand-red/40 p-5 rounded-2xl border border-red-500/30 backdrop-blur-sm">
              <i data-lucide="sprout" class="w-6 h-6 text-amber-300 mb-2"></i>
              <h4 class="font-serif font-semibold text-white text-sm">Agroecología Pura</h4>
              <p class="text-xs text-neutral-300 mt-1">Sin fertilizantes ni pesticidas químicos.</p>
            </div>
            <img src="https://images.unsplash.com/photo-1511537190424-bbbab87ac5eb?auto=format&fit=crop&w=800&q=80" alt="Cosecha de café" class="rounded-2xl shadow-lg object-cover h-64 w-full border border-white/10">
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
          De la Parcela a tu Taza
        </h2>
        <div class="w-20 h-1 bg-brand-red mx-auto rounded-full"></div>
        <p class="text-neutral-600 text-base sm:text-lg">
          Un recorrido visual por el trabajo artesanal: recolección a mano de cerezas maduras, secado al sol y tueste preciso.
        </p>
      </div>

      <!-- Mosaico Moodboard -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="relative group rounded-2xl overflow-hidden h-72 shadow-md">
          <img src="https://images.unsplash.com/photo-1595981267035-7b04ca84a82d?auto=format&fit=crop&w=600&q=80" alt="Recolección manual" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-4 text-white">
            <span class="text-xs font-medium">1. Recolección Selectiva</span>
          </div>
        </div>

        <div class="relative group rounded-2xl overflow-hidden h-72 shadow-md">
          <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=600&q=80" alt="Granos tostados" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-4 text-white">
            <span class="text-xs font-medium">2. Tueste Artesanal</span>
          </div>
        </div>

        <div class="relative group rounded-2xl overflow-hidden h-72 shadow-md">
          <img src="https://images.unsplash.com/photo-1559056199-641a0ac8b55e?auto=format&fit=crop&w=600&q=80" alt="Café molido fresco" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-4 text-white">
            <span class="text-xs font-medium">3. Molienda Exacta</span>
          </div>
        </div>

        <div class="relative group rounded-2xl overflow-hidden h-72 shadow-md">
          <img src="https://images.unsplash.com/photo-1511537190424-bbbab87ac5eb?auto=format&fit=crop&w=600&q=80" alt="Extracción de café" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent flex items-end p-4 text-white">
            <span class="text-xs font-medium">4. Taza Perfecta</span>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ================= CATÁLOGO Y PERSONALIZADOR DE PRODUCTOS ================= -->
  <section id="productos" class="py-20 bg-brand-sand/40 border-t border-brand-sand">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto mb-14 space-y-3">
        <span class="text-brand-red uppercase font-semibold text-sm tracking-widest block">Personaliza tu Selección</span>
        <h2 class="font-serif text-3xl sm:text-4xl font-bold text-brand-brown">
          Elige Tueste, Molienda y Presentación
        </h2>
        <div class="w-20 h-1 bg-brand-green mx-auto rounded-full"></div>
        <p class="text-neutral-600 text-base sm:text-lg">
          Preparamos tu café según tus preferencias exactas. Empacado en bolsa laminada con válvula desgasificadora para máxima durabilidad y aroma.
        </p>
      </div>

      <!-- PERSONALIZADOR INTERACTIVO DE CAFÉ -->
      <div class="bg-white rounded-3xl p-6 sm:p-10 shadow-lg border border-brand-sand max-w-4xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
          
          <!-- Vista previa y detalles de empaque -->
          <div class="space-y-6 text-center md:text-left border-b md:border-b-0 md:border-r border-gray-200 pb-6 md:pb-0 md:pr-8">
            <div class="relative rounded-2xl overflow-hidden bg-neutral-100 h-64 border border-brand-sand">
              <img src="https://images.unsplash.com/photo-1559056199-641a0ac8b55e?auto=format&fit=crop&w=800&q=80" alt="Bolsa de Café Kuxlejal con válvula" class="w-full h-full object-cover">
              <span class="absolute top-3 left-3 bg-brand-brown/90 text-amber-100 text-[11px] font-bold px-3 py-1 rounded-full backdrop-blur-sm">
                Empaque con Válvula Unilateral
              </span>
            </div>

            <div>
              <h3 class="font-serif text-2xl font-bold text-brand-brown">Café Kuxlejal Personalizado</h3>
              <p class="text-xs text-brand-green font-semibold uppercase tracking-wider mt-1">100% Arábica Agroecológico</p>
              <ul class="mt-4 space-y-2 text-xs text-neutral-600">
                <li class="flex items-center gap-2">
                  <i data-lucide="check" class="w-4 h-4 text-brand-green"></i>
                  <span>Bolsa laminada protectora de luz y humedad</span>
                </li>
                <li class="flex items-center gap-2">
                  <i data-lucide="check" class="w-4 h-4 text-brand-green"></i>
                  <span>Envíos por paquetería o entrega en comunidad</span>
                </li>
              </ul>
            </div>
          </div>

          <!-- Opciones de selección -->
          <div class="space-y-5">
            
            <!-- 1. Formato (Grano / Molido) -->
            <div>
              <label class="block text-xs font-bold uppercase text-brand-brown tracking-wider mb-2">1. Formato del Café</label>
              <div class="grid grid-cols-2 gap-2">
                <button type="button" onclick="selectOption('formato', 'En Grano')" id="opt-grano" class="opt-btn-formato bg-brand-green text-white py-2.5 px-3 rounded-xl font-medium text-xs border border-brand-green transition-all">
                  En Grano
                </button>
                <button type="button" onclick="selectOption('formato', 'Molido')" id="opt-molido" class="opt-btn-formato bg-neutral-100 text-neutral-700 py-2.5 px-3 rounded-xl font-medium text-xs border border-gray-200 hover:bg-neutral-200 transition-all">
                  Molido
                </button>
              </div>
            </div>

            <!-- 2. Tipo de Molienda (se muestra/oculta) -->
            <div id="molienda-container" class="hidden">
              <label class="block text-xs font-bold uppercase text-brand-brown tracking-wider mb-2">2. Tipo de Molienda</label>
              <div class="grid grid-cols-2 gap-2">
                <button type="button" onclick="selectOption('molienda', 'Para Cafetera')" id="opt-cafetera" class="opt-btn-molienda bg-brand-brown text-white py-2.5 px-3 rounded-xl font-medium text-xs transition-all">
                  Para Cafetera
                </button>
                <button type="button" onclick="selectOption('molienda', 'Para Olla')" id="opt-olla" class="opt-btn-molienda bg-neutral-100 text-neutral-700 py-2.5 px-3 rounded-xl font-medium text-xs border border-gray-200 hover:bg-neutral-200 transition-all">
                  Para Olla
                </button>
              </div>
            </div>

            <!-- 3. Nivel de Tueste -->
            <div>
              <label class="block text-xs font-bold uppercase text-brand-brown tracking-wider mb-2">3. Nivel de Tueste</label>
              <div class="grid grid-cols-3 gap-2">
                <button type="button" onclick="selectOption('tueste', 'Ligero')" id="opt-tueste-ligero" class="opt-btn-tueste bg-neutral-100 text-neutral-700 py-2.5 px-2 rounded-xl font-medium text-xs border border-gray-200 hover:bg-neutral-200 transition-all text-center">
                  Ligero
                </button>
                <button type="button" onclick="selectOption('tueste', 'Medio')" id="opt-tueste-medio" class="opt-btn-tueste bg-brand-brown text-white py-2.5 px-2 rounded-xl font-medium text-xs transition-all text-center">
                  Medio
                </button>
                <button type="button" onclick="selectOption('tueste', 'Oscuro')" id="opt-tueste-oscuro" class="opt-btn-tueste bg-neutral-100 text-neutral-700 py-2.5 px-2 rounded-xl font-medium text-xs border border-gray-200 hover:bg-neutral-200 transition-all text-center">
                  Oscuro
                </button>
              </div>
            </div>

            <!-- 4. Presentación / Peso -->
            <div>
              <label class="block text-xs font-bold uppercase text-brand-brown tracking-wider mb-2">4. Presentación</label>
              <div class="grid grid-cols-2 gap-2">
                <button type="button" onclick="selectOption('peso', '500g', 150)" id="opt-500g" class="opt-btn-peso bg-brand-red text-white py-2.5 px-3 rounded-xl font-medium text-xs transition-all flex justify-between items-center">
                  <span>Bolsa 500g</span>
                  <span class="font-bold">$150 MXN</span>
                </button>
                <button type="button" onclick="selectOption('peso', '1 kg', 280)" id="opt-1kg" class="opt-btn-peso bg-neutral-100 text-neutral-700 py-2.5 px-3 rounded-xl font-medium text-xs border border-gray-200 hover:bg-neutral-200 transition-all flex justify-between items-center">
                  <span>Bolsa 1 kg</span>
                  <span class="font-bold">$280 MXN</span>
                </button>
              </div>
            </div>

            <!-- Resumen y Pedido por WhatsApp -->
            <div class="pt-4 border-t border-gray-200">
              <div class="flex items-center justify-between mb-4">
                <span class="text-xs text-neutral-500 uppercase font-semibold">Total estimado:</span>
                <span id="priceDisplay" class="font-serif text-3xl font-bold text-brand-red">$150 MXN</span>
              </div>

              <a id="orderBtn" href="https://wa.me/5219610000000?text=Hola! Quisiera pedir Café Kuxlejal Agroecológico con las siguientes especificaciones:%0A• Formato: En Grano%0A• Tueste: Medio%0A• Presentación: 500g%0A• Precio: $150 MXN." target="_blank" class="w-full bg-[#25D366] hover:bg-[#1ebc57] text-white py-3.5 px-6 rounded-2xl font-bold flex items-center justify-center gap-2 shadow-md transition-all transform hover:-translate-y-0.5 text-sm">
                <i data-lucide="message-circle" class="w-5 h-5"></i>
                <span>Ordenar Selección por WhatsApp</span>
              </a>
            </div>

          </div>

        </div>
      </div>

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
        Comercializamos directamente trayendo tu café en la comunidad de Jomanichil o enviándolo por paquetería a cualquier parte de la República Mexicana.
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

  <!-- ================= FOOTER ================= -->
  <footer class="bg-brand-brown text-amber-100 border-t-8 border-brand-green py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center text-center md:text-left">
        
        <!-- Columna 1: Logo & Slogan -->
        <div class="space-y-3">
          <img src="kuxlejal.png" alt="Kuxlejal Logo" class="h-12 mx-auto md:mx-0 object-contain" onerror="this.onerror=null; this.src='https://placehold.co/150x50/ffffff/4A2511?text=KUXLEJAL';">
          <p class="text-xs text-neutral-300">
            Café agroecológico cultivado con dignidad y respeto en Jomanichil, Tenejapa, Chiapas.
          </p>
        </div>

        <!-- Columna 2: Enlaces Rápidos -->
        <div class="flex justify-center space-x-6 text-sm">
          <a href="#inicio" class="hover:text-amber-400 transition-colors">Inicio</a>
          <a href="#agroecologico" class="hover:text-amber-400 transition-colors">Agroecología</a>
          <a href="#nosotros" class="hover:text-amber-400 transition-colors">Nosotros</a>
          <a href="#productos" class="hover:text-amber-400 transition-colors">Productos</a>
        </div>

        <!-- Columna 3: Créditos -->
        <div class="text-center md:text-right text-xs text-neutral-400 space-y-1">
          <p>© 2026 Kuxlejal. Todos los derechos reservados.</p>
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
    let selectedPeso = '500g';
    let selectedPrecio = 150;

    function selectOption(category, value, price) {
      if (category === 'formato') {
        selectedFormato = value;
        const moliendaContainer = document.getElementById('molienda-container');
        if (value === 'Molido') {
          moliendaContainer.classList.remove('hidden');
        } else {
          moliendaContainer.classList.add('hidden');
        }
        
        document.querySelectorAll('.opt-btn-formato').forEach(btn => {
          btn.className = 'opt-btn-formato bg-neutral-100 text-neutral-700 py-2.5 px-3 rounded-xl font-medium text-xs border border-gray-200 transition-all';
        });
        const activeBtn = value === 'En Grano' ? document.getElementById('opt-grano') : document.getElementById('opt-molido');
        activeBtn.className = 'opt-btn-formato bg-brand-green text-white py-2.5 px-3 rounded-xl font-medium text-xs border border-brand-green transition-all';
      }

      if (category === 'molienda') {
        selectedMolienda = value;
        document.querySelectorAll('.opt-btn-molienda').forEach(btn => {
          btn.className = 'opt-btn-molienda bg-neutral-100 text-neutral-700 py-2.5 px-3 rounded-xl font-medium text-xs border border-gray-200 transition-all';
        });
        const activeBtn = value === 'Para Cafetera' ? document.getElementById('opt-cafetera') : document.getElementById('opt-olla');
        activeBtn.className = 'opt-btn-molienda bg-brand-brown text-white py-2.5 px-3 rounded-xl font-medium text-xs transition-all';
      }

      if (category === 'tueste') {
        selectedTueste = value;
        document.querySelectorAll('.opt-btn-tueste').forEach(btn => {
          btn.className = 'opt-btn-tueste bg-neutral-100 text-neutral-700 py-2.5 px-2 rounded-xl font-medium text-xs border border-gray-200 transition-all text-center';
        });
        let activeBtnId = 'opt-tueste-medio';
        if (value === 'Ligero') activeBtnId = 'opt-tueste-ligero';
        if (value === 'Oscuro') activeBtnId = 'opt-tueste-oscuro';
        document.getElementById(activeBtnId).className = 'opt-btn-tueste bg-brand-brown text-white py-2.5 px-2 rounded-xl font-medium text-xs transition-all text-center';
      }

      if (category === 'peso') {
        selectedPeso = value;
        selectedPrecio = price;
        document.getElementById('priceDisplay').textContent = `$${price} MXN`;
        
        document.querySelectorAll('.opt-btn-peso').forEach(btn => {
          btn.className = 'opt-btn-peso bg-neutral-100 text-neutral-700 py-2.5 px-3 rounded-xl font-medium text-xs border border-gray-200 transition-all flex justify-between items-center';
        });
        const activeBtn = value === '500g' ? document.getElementById('opt-500g') : document.getElementById('opt-1kg');
        activeBtn.className = 'opt-btn-peso bg-brand-red text-white py-2.5 px-3 rounded-xl font-medium text-xs transition-all flex justify-between items-center';
      }

      updateWhatsAppLink();
    }

    function updateWhatsAppLink() {
      let moliendaText = selectedFormato === 'Molido' ? `%0A• Molienda: ${selectedMolienda}` : '';
      let text = `Hola! Quisiera pedir Café Kuxlejal Agroecológico con las siguientes especificaciones:%0A• Formato: ${selectedFormato}${moliendaText}%0A• Tueste: ${selectedTueste}%0A• Presentación: ${selectedPeso}%0A• Precio: $${selectedPrecio} MXN.`;
      
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