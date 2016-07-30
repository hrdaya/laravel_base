{{-- コモンヘッダ --}}
@section('header')
  <header class="site-header">
    <div class="container-fluid">
      <h1 class="site-title">{{ $env_title }}{{ $title }}</h1>
      {{-- ページナビゲーション --}}
      @yield('nav')
    </div>
  </header>
@endsection