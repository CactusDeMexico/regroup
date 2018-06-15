

<?php
require "conn.php";
if (isset($_GET['Nom'])) { $user_name = $_GET['Nom']; }
if (isset($_GET['Password'])) { $user_pass =$_GET['Password']; }



$mysql_qry = "select * from administrateur where nom like '$user_name' and password like '$user_pass';";

$result = mysqli_query($conn ,$mysql_qry);
if(mysqli_num_rows($result) > 0) {
echo "login success !!!!! Welcome user";
}
else {
echo "login not success";
}

?>