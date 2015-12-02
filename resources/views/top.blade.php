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
  @for($i = 0; $i < 2; $i++)
    @include('parts.dynamic.post',['count' => $i, 'post' => $data->post])
  @endfor

@endsection
     
@section('sidebar')
  @include('parts.static.menu')

  @include('parts.static.panel')
@endsection
