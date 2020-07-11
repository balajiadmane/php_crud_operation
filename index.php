<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>



<body>

<div class="container">

    <?php

            if(isset($_GET['f'])) {

                if($_GET['f'] =='insert') include "./insertForm.php";
                else if($_GET['f'] =='view') include './userInfo.php';
                else if($_GET['f'] =='edit') include './updateUser.php';
                else if($_GET['f'] =='delete') include "deleteUser.php";
            }else{
				include "./insertForm.php";
			}

        ?>

</div>

</body>

</html>