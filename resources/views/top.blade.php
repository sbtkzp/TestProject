<?php 
  $title = 'Top Page';
?>
@extends('layouts.common')

@section('title', !empty($title) ? $title.' - ' : '')

@section('stylesheets')
  <link rel="stylesheet" type="text/css" href="/css/foundation.css">
@endsection

@section('main')

  {{-- TODO foreach対応 --}}
  @foreach($data->posts as $key => $val)
    @include('parts.dynamic.post',['post' => $val])
    @if($key !== count($data->posts)-1 )<hr/>@endif
  @endforeach

@endsection
     
@section('sidebar')
  @include('parts.static.menu')

  @include('parts.static.panel')
@endsection
