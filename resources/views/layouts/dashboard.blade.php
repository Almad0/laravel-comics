@include('layouts.head')

<body>
    <div id="app">

        @include('layouts.navbarHidden')

        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-md-3 col-lg-3">
              <ul class="list-unstyled">
                <li><a href="{{route('admin.index')}}"> <i class="fas fa-tachometer-alt fa-lg fa-fw"></i> Dashboard</a> </li>
                <li><a href="{{route('admin.comics.index')}}"> <i class="fas fa-book-open"></i> Comics</a> </li>
              </ul>
            </div>
            <main class="col-xs-12 col-md-9 col-lg-9 py-4">
              @yield('content')
            </main>
          </div>
        </div>

    </div>
</body>
</html>
