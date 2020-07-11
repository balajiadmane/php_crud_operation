<?php

include "./connect.php";

// sql statement for select all user

$sql = "SELECT * FROM `user_info` WHERE 1";

// execute the sql statement

$result = mysqli_query($conx,$sql);

// if the result contains the no. of row that are > 0
if(mysqli_num_rows($result) >0) {

    echo "<table class='table table-bordered'>";
    // for table heading
    echo "<thead>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>
    </thead>";
    echo "<tbody>";
    while($row= mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td><a class='btn btn-primary' href='?f=edit&id=".$row['id']."'>Edit</a></td>";
        echo "<td><a class='btn btn-primary' href='?f=delete&id=".$row['id']."'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}else {
    // if the no user are inserted in table
    echo "<div class='alert alert-info'>No user available.</div>";
    echo "<script>window.location.href='?f=insert';</script>";
}
?>