<?php

 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   mysql_select_db('management');
  
   $sql = 'SELECT notice_des FROM notice';
   
   $result = mysql_query($sql);
   
   if(!$result) {
      die('Could not get data: ' . mysql_error());
   }
   $rows = mysql_num_rows($result);
   for($j = 0; $j < $rows; ++$j)
   {
	   //echo 'Author'.mysql_result($result,$j,'notice_des');
	   if($j==0)
		   $a = mysql_result($result,$j,'notice_des');
	   if($j==1)
	   {
		   $b = mysql_result($result,$j,'notice_des');
	   }
   }

   mysql_close($conn);
   
?>

<div class="maincontent">
				
				<div class="content">
					<h2>School</h2>
					
					<p> A school is a place where books are kept for reading. It is a store house of <bold>books</bold>. It is a part and parcel of a school. So there is a library in our school. There are many kinds of books in our school. The students peacefully go there and borrow books from the librarian. It is a quite place. It remains open all day. Many students sit there and study. There are many journals and magazines in our school library. There are two big rooms. In one room, there are books of science, history , literature etc in many language. In this room, books are kept in almiras and shelves. The other room of the library is the reading room. Our school librarian comes in the morning. He keeps the books in perfect order. He is very co-operative.</p>
				</div>
				
				<div class="sidebar">
					<h2>Sidebar Title</h2>
					<marquee 
					bgcolor="#f2f6fc"
					direction ="up"	
					scrolldelay = 300
					width="300"
					height="300"
					onmouseover="this.stop();"
					onmouseout="this.start();" 
					>
					<?php echo "<a href='notice.php'>$a</a></br><br><a href='notice.php'>$b</a>"; ?></marquee>
				</div>

	</div>
