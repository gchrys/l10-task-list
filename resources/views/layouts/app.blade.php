<!DOCTYPE html>
<html>

<head>
  <title>Laravel 10 Task List App</title>
  <script src="https://cdn.tailwindcss.com"></script>

  {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
    .btn {
      @apply  rounded-md px-4 py-1 text-center font-medium shadow-sm ring-1 
    }
    label{
      @apply block uppercase text-slate-700 mb-2
    }
    input,textarea{
      @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
    }
    .error{
      @apply text-sm text-red-500
    }
    .success{
      @apply mb-10 px-4 py-3 rounded border border-green-600 bg-green-200 text-lg text-green-700
    }
  </style>
  {{-- blade-formatter-enable --}}
  @yield('styles')
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
  <h1 class="text-3xl mb-4">@yield('title')</h1>
  <div>
  <div class="success">Flash message!</div>
    <!-- @if (session()->has('success')) -->
      <!-- <div class="success">{{ session('success') }}</div> -->
      
    <!-- @endif -->
    @yield('content')
  </div>
</body>

</html>