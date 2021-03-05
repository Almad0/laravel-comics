@include('layouts.head')
<body>
  <div id="app">

    {{-- poi la commento --}}
      @include('layouts.navbarHidden')
    {{-- poi la commento --}}

    <main class="py-4">
      <h1>ciao home page</h1>
      <p>culetto</p>
      @yield('content')
    </main>
  </div>
</body>
</html>
