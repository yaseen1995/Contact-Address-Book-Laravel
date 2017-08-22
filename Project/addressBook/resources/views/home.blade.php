@include('inc.header')
    <div class="container">

      <div class="row">

        <legend> Address Book </legend>

        @if(session('info'))

        <div class="alert alert-success">
            {{session('info')}}
        </div>
        @endif

  <table class="table table-striped table-hover">
  <thead class="thead-inverse">
    <tr>
      <th>First Name</th>
      <th>Surname</th>
      <th>Telephone Number</th>
      <th>Email Address</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @if(count($addressBook) > 0)
        @foreach($addressBook->all() as $addBook)


        <tr>
          <td>{{ $addBook->firstName }}</td>
          <td>{{ $addBook->lastName }}</td>
          <td>{{ $addBook->telephoneNumber }}</td>
          <td>{{ $addBook->email }}</td>
          <td>
            <a href='{{ url("/read/{$addBook->id}")}}' class="badge badge-primary">Read</a>    |
            <a href='{{ url("/update/{$addBook->id}") }}' class="badge badge-success">Update </a> |
            <a href='{{ url("/delete/{$addBook->id}")}}' class="badge badge-danger"> Delete </a> |

          </td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table>

    </div>
</div>
@include('inc.footer')
