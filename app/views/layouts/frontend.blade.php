@extends('layouts.base')

@section('body-class') frontend @stop

@section('stylesheets')
  <link rel="stylesheet" href="/assets/css/frontend.css">
@stop

@section('navigation')
  <nav class="navbar navbar-inverse navbar-embossed navbar-fixed-top navbar-lg" role="navigation">
    <!-- Navbar content -->
    <div class="container">

      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ga-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">#GreenAlert</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="ga-navbar-collapse-1">

        <ul class="nav navbar-nav">
          <li class="{{Request::path() == '/' ? 'active' : '';}}">
            <a href="/">Home</a></li>
          <li class="{{Request::path() == 'map' ? 'active' : '';}}">
            <a href="/map">Map</a></li>
          <li class="{{Request::path() == 'about' ? 'active' : '';}}">
            <a href="/about">About</a></li>
          @if ( Auth::guest() )
            <li class="{{Request::path() == 'login' ? 'active' : '';}}">
              <a href="/login">Login</a></li>
          @else
            <li class="{{Request::path() == 'dashboard' ? 'active' : '';}}">
              <a href="/dashboard">Dashboard</a></li>
          @endif
        </ul>


        <form class="navbar-form navbar-right" action="/search" role="search">
          <div class="form-group">
            <div class="input-group">
              <input class="form-control" id="navbarInput-01" type="search" placeholder="Search"
                name="q" value="{{Input::get('q')}}">
              <span class="input-group-btn">
                <button type="submit" class="btn"><span class="fui-search"></span></button>
              </span>
            </div>
          </div>
        </form>

      </div><!-- /.navbar-collapse -->

    </div><!-- /.container -->
  </nav>
@stop

@section('footer')
<footer class="bg-primary">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-6 text-left">
        <p>
          <a href="/">Home</a> .
          <a href="/about">About</a> .
          <a href="/dashboard">Dashoard</a> .
          <a href="#" target="_blank">Github</a> .
          <a href="http://oxpeckers.org" target="_blank">Oxpeckers</a>
        </p>
        <hr/>
        <p class="text-muted"><em>
          All code on this website is <a href="http://github.com/CodeForAfrica/">Open Source</a>.</br>
          Content on this site, made by Oxpeckers, is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank">Creative Commons Attribution-ShareAlike 4.0 International License</a>.</br>
          Refer to our <a href="#">attributions</a> page for attributions of other work on the site.
        </em></p>
      </div>
      <div class="col-md-6 text-right">
        <h3 class="text-muted">#GreenAlert</h3>
        <p>An <a href="http://oxpeckers.org" target="_blank">Oxpeckers'</a> Project</p>
        <p>Built by <a href="http://codeforafrica.org" target="_blank">Code for Africa</a></p>
      </div>
    </div>
  </div>
</footer>
@stop
