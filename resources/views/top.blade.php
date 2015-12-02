<?php 
  $title = 'Top Page';
  $path = asset('/');
?>
@extends('layouts.common')

@section('title', !empty($title) ? $title.' - ' : '')

@section('stylesheets')
  <link rel="stylesheet" type="text/css" href="{{$path}}css/foundation.css">
@endsection

@section('main')
  <article>

    <h3><a href="#">{{ $data->post->title or '' }}</a></h3>
    <h6>Written by <a href="#">John Smith</a> on {{ $data->post->created_at_formatted or '' }}</h6>

    <div class="row">
      <div class="large-6 columns">
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa.</p>
        <p>Boudin aliqua adipisicing rump corned beef. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
      </div>
      <div class="large-6 columns">
        <img src="http://placehold.it/400x240&text=[img]"/>
      </div>
    </div>

    <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>

    <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>

  </article>

  <hr/>

  <article>

    <h3><a href="#">Blog Post Title</a></h3>
    <h6>Written by <a href="#">John Smith</a> on August 12, 2012.</h6>

    <div class="row">
      <div class="large-6 columns">
        <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa.</p>
        <p>Boudin aliqua adipisicing rump corned beef. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>
      </div>
      <div class="large-6 columns">
        <img src="http://placehold.it/400x240&text=[img]"/>
      </div>
    </div>

    <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>

    <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>

  </article>
@endsection
     
@section('sidebar')
  @include('parts.static.menu')

  @include('parts.static.panel')
@endsection
