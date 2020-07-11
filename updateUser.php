<div class="row">

<div class="col-md-4"></div>
<div class="col-md-4">

<?php 
// get parameter from post method

if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $email =$_POST['email'];
    $id = $_GET['id'];
    include "./connect.php";
    $sql = "UPDATE `user_info` SET `name`='$name',`email`='$email' WHERE `id`='$id'";

    $result = mysqli_query($conx,$sql);
    if($result) {
        echo "<div class='alert alert-success'>User info updated.</div>";
        echo "<script>window.location.href='?f=view';</script>";
    }else{
        echo "Not updated";
    }
}

        if(isset($_GET['id'])) {
                    // get user info by id
            include "./connect.php";
            // create sql statement to select user info by there id
            $id = $_GET['id'];
            $sql ="SELECT * FROM `user_info` WHERE `id` ='$id'";

            // execute the sql statement
            $result = mysqli_query($conx,$sql);

            if(mysqli_num_rows($result) >0) {
                while($row =  mysqli_fetch_assoc($result)) {
                    displayForm($row['name'],$row['email']);
                }
            }else{
                echo "<h4>User no found by id</h4>";
            }
        }

?>
<?php function displayForm($name,$email) { ?>
        <form method = "POST">
                <div class='form-group'>
                    <label>User name:</label>
                    <input type="text" value = "<?php echo $name; ?>" class="form-control" placeholder ="User name" name= "name" />
                </div>
                <div class='form-group'>
                    <label>User email</label>
                    <input type="email"  value = "<?php echo $email; ?>"  class= "form-control" placeholder = "User email" name = "email" />
                </div>
                <div class='form-group'>
                        <input type='submit' class="btn btn-primary" value="Update" />
                </div>

        </form>

<?php  } ?>
</div>
<div class="col-md-4"></div>


</div>