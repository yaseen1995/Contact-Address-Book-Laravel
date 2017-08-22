@include('inc.header')

  <div class="container">
    <div class="row">
    <legend>Read Contact</legend>

    <ul class="lead">
    <p>{{ $addressBook->firstName }}</p>
    <p> {{ $addressBook->lastName }}</p>
    <p> {{ $addressBook->telephoneNumber }}</p>
    <p> {{ $addressBook->email }}</p>

</ul>

    </div>
    <a href="{{ url('/')}}" class="btn btn-primary"> Back </a>

  </div>

@include('inc.footer')
