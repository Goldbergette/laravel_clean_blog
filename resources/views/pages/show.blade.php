{{--
./resources/views/pages/show.blade.@php
  Variables disponibles:
  $page OBJ(id, titre, texte, titreMenu, image, created_at,...)
--}}
@extends('template.index')

@section('content')
  <header class="masthead" style="background-image: url({{ asset('assets/img/' .$page->image)}})">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>{{ $page->titre }}</h1>
            <span class="subheading">{{ $page->sousTitre }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Textes -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="clearfix">
          {!! html_entity_decode($page->texte) !!}
        </div>
<!--ici viennent les contenus complémentaires-->
    </div>
  </div>
@endsection
