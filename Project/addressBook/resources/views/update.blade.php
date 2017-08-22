@include('inc.header')
<div class="container">

<div class="row">
    <div class="col-md-6">
      <form class="form-horizontal" method="POST" action="{{ url('/edit', array($addressBook->id)) }}">
        {{csrf_field()}}
  <fieldset>
    <legend>Contact Address Book</legend>
    @if(count ($errors) > 0 )
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> {{$error}} </div>
        @endforeach
    @endif
    <div class="form-group">
      <input  name="firstName" value="<?php echo $addressBook->firstName; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter first name">
    </div>
    <div class="form-group">
      <input name="lastName" value="<?php echo $addressBook->lastName; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter surname">
    </div>
    <div class="form-group">
      <input name="teleNumber" value="<?php echo $addressBook->telephoneNumber; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter telephone number">
    </div>
    <div class="form-group">
      <input type="email" name="email" value="<?php echo $addressBook->email; ?>" class="form-control" id="exampleInputPassword1" placeholder="Enter email address">

    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ url('/')}}" class="btn btn-primary">Back </a>
  </fieldset>
</form>
    </div>

  </div>

</div>
@include('inc.footer')
