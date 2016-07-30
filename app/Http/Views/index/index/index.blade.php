{{-- 基本レイアウトの読み込み --}}
@extends('common.layout')
{{-- css --}}
@section('css')
@endsection
{{-- js --}}
@section('js')
@endsection
{{-- サイトヘッダー --}}
@section('header')
  @include('common.header')
@endsection
{{-- ページナビゲーション --}}
@section('nav')
  @include('common.nav')
@endsection
{{-- ページコンテンツ --}}
@section('content')
  トップページだお！
@endsection