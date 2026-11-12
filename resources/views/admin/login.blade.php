<!DOCTYPE html>
<html lang="es" class="h-full bg-brand-sand">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceso Admin — Kuxlejal</title>
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
<body class="h-full bg-brand-sand flex items-center justify-center p-4 font-sans antialiased">

  <div class="w-full max-w-sm">

    <!-- Card -->
    <div class="bg-white rounded-3xl shadow-xl border border-gray-100 overflow-hidden">

      <!-- Header strip -->
      <div class="bg-brand-brown px-8 py-8 text-center">
        <div class="w-14 h-14 bg-brand-green rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
          <i data-lucide="coffee" class="w-7 h-7 text-white"></i>
        </div>
        <h1 class="text-xl font-bold text-amber-50">Kuxlejal Admin</h1>
        <p class="text-xs text-neutral-400 mt-1">Panel de Administración</p>
      </div>

      <!-- Form -->
      <div class="px-8 py-8">
        <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-5">
          @csrf

          <div>
            <label for="email" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
              Correo electrónico
            </label>
            <input
              type="email"
              id="email"
              name="email"
              value="{{ old('email') }}"
              required
              autofocus
              class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all
                     {{ $errors->has('email') ? 'border-red-400 bg-red-50' : 'bg-gray-50' }}"
              placeholder="admin@kuxlejal.com"
            >
            @error('email')
              <p class="mt-1.5 text-xs text-brand-red flex items-center gap-1">
                <i data-lucide="alert-circle" class="w-3 h-3"></i>
                {{ $message }}
              </p>
            @enderror
          </div>

          <div>
            <label for="password" class="block text-xs font-semibold text-gray-600 mb-1.5 uppercase tracking-wide">
              Contraseña
            </label>
            <input
              type="password"
              id="password"
              name="password"
              required
              class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-gray-50 focus:outline-none focus:ring-2 focus:ring-brand-green/40 focus:border-brand-green text-sm transition-all"
              placeholder="••••••••"
            >
          </div>

          <div class="flex items-center gap-2">
            <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-brand-green rounded border-gray-300">
            <label for="remember" class="text-xs text-gray-600">Mantener sesión iniciada</label>
          </div>

          <button
            type="submit"
            class="w-full bg-brand-green hover:bg-emerald-800 text-white py-3 rounded-xl font-semibold text-sm transition-all shadow-md flex items-center justify-center gap-2">
            <i data-lucide="log-in" class="w-4 h-4"></i>
            <span>Ingresar al Panel</span>
          </button>
        </form>
      </div>

    </div>

    <p class="text-center text-xs text-gray-400 mt-6">
      © {{ date('Y') }} Kuxlejal Café Agroecológico
    </p>

  </div>

  <script>lucide.createIcons();</script>
</body>
</html>
