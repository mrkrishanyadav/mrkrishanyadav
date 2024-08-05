<?php include('partials/menu.php'); ?>

<section class="bg-light">


<section>
    <div class="container">
        <div class="row">
            <div class="mt-5">
                <h1>Add Admin</h1>
                
            </div>


           <div>

           <form class="mt-4" method="POST">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="inputEmail3" name="fullname">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="inputPassword3" name="username">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-md-6">
      <input type="password" class="form-control" id="inputPassword3" name="password">
    </div>
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Add Admin</button>
</form>
           </div>

            
        
        </div>

    </div>

    
</section>
</section>


<?php include('partials/footer.php'); ?>

<?php


if(isset($_POST['submit'])) 
  {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
   echo $password = $_POST['password'];

   $sql ="INSERT INTO tbl-admin SET 
          fullname='$fullname',
          username='$username',
          password='$password' ";

  $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
  $db_select = mysqli_select_db($conn, 'food-order' ) or die(mysqli_error());

  


}



?>

