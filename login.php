<?php session_start();
include 'database.php';

$message = "";
if (!empty($_POST)) {
    $user = htmlentities($_POST['user'], ENT_QUOTES);
    $password = htmlentities($_POST['password'], ENT_QUOTES);
    
    $q = mysqli_query($con,"select * from admin_log where admin_name = '$user' ");
    $data = mysqli_fetch_assoc($q);
    if( !empty($password) && $data['admin_pass'] == $password ){
        
        header("location:adminindex.php");
    }
    else $message = "Wrong try!";
}

?>

<body style="background-color:#404B61; ">
   <center>
   <legend> <p><h1>School Cpanel</h1></p>    
    <form method="post" action="#">
        <table border="1" height="150" bgcolor="#eaeff7">
            <img src="image/AdminLogo.jpg " width="100px" height="100px;">
            <tr><td><input type="text" placeholder="Username" required="" size="30" name="user"></td></tr>
            <tr><td><input type="password" placeholder="Password" required="" size="30" name="password"></td></tr>            
             <tr><td ><input type="submit"class="btn"  name="submit" size="30" value="LOG IN"></td></tr>
        </table>
        
    </form>
    </legend>
   </center>
</body>