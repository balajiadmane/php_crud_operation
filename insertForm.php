<div class="row">

<div class="col-md-4"></div>
<div class="col-md-4">

        <form method="POST">

            <div class="form-group">
                <label>Enter name:</label>
                <input type="text" name="name" class="form-control" placeholder = "Enter name" />
            </div>
            <div class="form-group">
                <label>Enter email:</label>
                <input type="email" name="email" class="form-control" placeholder ="Enter email" />
            </div>
            <div class="form-group">
            
                <input type="submit" value='Submit' class="btn btn-primary" />
            </div>

        <?php
            if(isset($_POST['name'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $id = md5($name.rand());

                // create sql insert statement
                $sql = "INSERT INTO `user_info`(`name`, `email`, `id`) VALUES 
                ('$name','$email','$id')";

                // import connect.php file
                include "./connect.php";
                $result = mysqli_query($conx,$sql);
                    // connect obj and sql statement
                // check if the sql statement executed or not
                if($result) {
                    echo "<div class'alert alert-success'>User info inserted.</div>";

                    echo "<script>window.location.href='?f=view';</script>";
                }else{
                    echo "<div class='alert alert-danger'>Not inserted.</div>";
                }
            }

        ?>
        </form>

</div>
<div class="col-md-4"></div>


</div>