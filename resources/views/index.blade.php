@extends('layouts.main')

@section('content')
        <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>MEDILABGA XUSH KELIBSIZ</h1>
      <h2>Medilab jamoasi sizlarga o'z xizmatlarini taqdim etadi</h2>
      <a href="#about" class="btn-get-started scrollto">Boshlash</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  @include('articles')
  @include('about')
  @include('counts') 
  @include('services')
  @include('departments')
  @include('doctors')
  @include('Testimonials') 
  @include('gallery') 
  @include('contact') 
  </main>
  <!-- End #main -->

@endsection










