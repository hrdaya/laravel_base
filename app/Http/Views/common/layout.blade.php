{{-- ベーステンプレート --}}
    <!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $env_title }}{{ $title }}</title>

  <link rel="stylesheet" href="{{ elixir('css/common.css') }}">
  @yield('css')
</head>

<body class="site">
<div class="wrap">
  {{-- サイトヘッダー --}}
  @yield('header')
  {{-- サイトメインコンテンツ --}}
  <main class="site-main">
    {{-- フラッシュコンテンツ --}}
    @include('common.flash')
    {{-- メインコンテンツ --}}
    @yield('content')
  </main>
  {{-- サイトフッター --}}
  <footer class="site-footer">
    <p class=" container-fluid">
      <small class="copyright">© 最初の発行の年 著作権者</small>
    </p>
  </footer>
  {{-- トップへ戻るボタン --}}
  <aside class="page-top">
    <a href="#top">ページトップ</a>
  </aside>
  {{-- フラッシュモーダルコンテンツ --}}
  @include('common.modal')
  {{-- ローディングコンテンツ --}}
  @include('common.loading')
  {{-- JavaScriptの読み込み --}}
  <script src="{{ elixir('js/jquery.js') }}"></script>
  <script src="{{ elixir('js/bootstrap.js') }}"></script>
  <script src="{{ elixir('js/vue.js') }}"></script>
  <script src="{{ elixir('js/ajax.js') }}"></script>
  @yield('js')
</div>
</body>
</html>
