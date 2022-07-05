< x-header />
<div class="container">
  <h2 class="text-center">User Management | Create</h2>
  <br>
    <form action = "create" method = "POST" class="form-group" style="width:70%; margin-left:15%;">

        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

        <label class="form-group">Name:</label>
        <input type="text" class="form-control" placeholder="Name" name="name"><br>

        <label>Email:</label>
        <input type="text" class="form-control" placeholder="Enter Email" name="email"><br>
        
        <label>Skill:</label>
        <input type="text" class="form-control" placeholder="Enter Skill" name="skill"><br>
            
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
< x-footer />