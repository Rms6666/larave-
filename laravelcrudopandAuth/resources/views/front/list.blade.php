<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Data List</title>
  </head>
  <body>
    <div class="mt-3">
    @if ($message = Session::get('success'))
        <div class="alert alert-info">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($message = Session::get('Delete'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($message = Session::get('Update'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
  <table class="table table-striped table-hover">
  <thead>

  <div class="row mb-3">
   <div class="col-9">
  <form action="{{ route('list') }}" method="GET">
    <div class="input-group has-validation">
    <input type="text" name="search" class="form-control" placeholder="Search Here">
    <button type="submit" class="input-group-text">Search</button>
    </div>
</form>
   </div>

    <div class="col-3">
      <a class="btn btn-success" href="{{ Route('index') }}">Add</a>
      <a class="btn btn-danger"  href="{{ Route('download-pdf') }}">Download</a>
      <a class="btn btn-warning" href="{{ route('export') }}">Export</a>
      <a class="btn btn-primary" href="{{ route('import') }}">Import</a>
    </div>
  </div>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Email</th>
      <th scope="col">Citys</th>
      <th scope="col">Gender</th>
      <th scope="col">Hobby</th>
      <th scope="col">Country</th>
      <th scope="col">State</th>
      <th scope="col">Cities</th>
      <th scope="col">Image</th>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 0;
    if (count($data) > 0)
        foreach ($data as $fil):
        $no++; ?>
    <tr>
        <th scope="row"><?php echo $no; ?></th>
        <td><?php echo $fil->name; ?></td>
        <td><?php echo $fil->number; ?></td>
        <td><?php echo $fil->email; ?></td>
        <td><?php echo $fil->citys; ?></td>
        <td><?php echo $fil->gender; ?></td>
        <td><?php echo $fil->hobby; ?></td>
        <td><?php echo $fil->country_name; ?></td>
        <td><?php echo $fil->state_name; ?></td>
        <td><?php echo $fil->city_name; ?></td>
        <td><img style="height: 50px; width:50px;" src="{{ asset('userimages/' . $fil->image) }}" /></td>
        <td class="action-button">
            <form action="{{ route('datadelete', ['id'=> $fil->id]) }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Del</button>
            </form>
        </td>
        <td>
            <a href="{{ route('dataupdate', ['id'=> $fil->id]) }}">
                <button class="btn btn-success">Edit</button>
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
{{-- <div class="d-flex pagination justify-content-end">
{!! $data->appends(Request::all())->links() !!}
</div> --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
