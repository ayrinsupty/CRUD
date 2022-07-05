< x-header />
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">User Management | Update</h2>
                </div>
                <div class="card-body">
                    <form action = "/edit/{{ $users[0]->id }}" method = "POST" class="form-group" style="width:70%; margin-left:15%;">
                        <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
                        <table>
                            <tr>
                                <td>Name :</td>
                                <td>
                                    <input type = 'text' class="form-control" name = 'name' value = '{{ $users[0]->name }}'/> 
                                </td>
                            </tr>

                            <tr>
                                <td>Email :</td>
                                <td>
                                    <input type = 'text' class="form-control" name = 'email' value = '{{ $users[0]->email }}'/>
                                </td>
                            </tr>

                            <tr>
                                <td>Skill :</td>
                                <td>
                                    <input type = 'text' class="form-control" name = 'skill' value = '{{ $users[0]->skill }}'/>
                                </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
< x-footer />