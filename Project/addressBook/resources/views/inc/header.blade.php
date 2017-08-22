<!DOCTYPE html>

<html>
<head>

  <title>Contact Address Book</title>
  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
  <script type="text/javascript" src="{{ url('js/jquery-3.2.1.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>

</head>

<body>
  <nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
  <a class="navbar-brand" href="{{ url('/')}}">Contact Address Book</a>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/create')}}">Create</a>
      </li>
    </ul>
  </div>
</nav>
