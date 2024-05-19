@extends('alva::layouts.frontend')
@section('title', 'ALVA')
@section('content')
  <h1>Hello World</h1>
  <p> This is the view from module: {{ config('alva.name') }}</p>
@endsection
