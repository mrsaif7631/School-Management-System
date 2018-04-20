
<?php
$db_host="localhost";
$db_username="root";
$db_pass="";
$db_name="management";
@mysql_connect("$db_host","$db_username","$db_pass");
@mysql_select_db("$db_name") or die("no database");
mysql_query("UPDATE viewcounter SET `view` =`view`+1 WHERE id='1'");

$sql=mysql_query("SELECT * FROM viewcounter WHERE id='1'");
while($row=mysql_fetch_array($sql)){
	$id = $row["id"];
	$pagename = $row["pagename"];
	$view = $row["view"];
	
};

?>

<div class="footer">&copy;All rights reserved Md. Rajuan Islam <br>
<table border="1" align="center" cellspacing="5">
<tr>

</tr>
<tr>

</tr>

<table>

</div>


</div><!--end of main-->
</body>

</html>