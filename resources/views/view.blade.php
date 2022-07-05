< x-header />
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h2 class="text-center">User Records</h2>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Skill</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->skill }}</td>
                <td>
                    <a href='edit/{{ $user->id }}' class="btn btn-info">Update</a>
                    <a onclick="return confirm('Are you sure to Delete?');" href='delete/{{ $user->id }}' class="btn btn-danger">Delete</a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>
</div>
< x-footer />