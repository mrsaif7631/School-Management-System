
<div class="maincontent">
				
				
				
				<?php
				include("includes/header.php");
                include("includes/navMenu.php");
				?>
				<?php
				if (isset ($_POST['DESC'])) 
    {
          $desc_query = "SELECT * FROM notice ORDER BY date DESC";
          $result = executeQuery($desc_query);
    }
    
    // Default Order
 else {
        $default_query = "SELECT * FROM notice";
        $result = executeQuery($default_query);
}


function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "management");
    $result = mysqli_query($connect, $query);
    return $result;
}

?>

<html>
    <head>
        <title> PHP HTML TABLE ORDER DATA </title>
       <style>
            table,tr,th,td
            {
                border: 1px solid black;
			
            }
        </style>
    </head>
    <body>
      
        <form action="#" method="post">
          
            
           
            <table width="500" height="500" bgcolor="#e8edf4">
                <tr>
                    <th>ID</th>
                    <th>NOTICE</th>
                    <th>DATE</th>
                    
                </tr>
                <!-- populate table from mysql database -->
                <?php while ($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    
                </tr>
                <?php endwhile;?>
            </table>
        </form>
      
    </body>
</html>
				<?php
				include("includes/footer.php");
				?>
				
			</div>
		