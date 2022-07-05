< x-header />

<div class="container">
  <h2 class="text-center">User Records</h2>
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
          <button class="btn btn-info">Update</button>
          <button class="btn btn-danger">Delete</button>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>   
</div>

< x-footer />