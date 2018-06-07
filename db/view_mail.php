<?php
	require "config.php";
	include "pagenumber.php";

	$p = $_GET['p'];
	
	if($p=="")
	{
		$p=1;
	}
	
	$per = 12;
	
	$from=0;
	
	if($p>1)
	{
			$from = ($p-1)*$per;
	}
	
	$stmt = $dbh->query('SELECT * FROM contactout where state=1');
	$row_count = $stmt->rowCount();

    $sql = "SELECT * FROM contactout where state=1 order by (id) desc LIMIT $from,$per";
    
	foreach ($dbh->query($sql) as $row)
	{
		if($row["state"]==1)
		{
		 echo '<tr>';
                  	echo '<td>' . $row["id"] .'</td>';
                    echo '<td><a target="_blank" href=' . $row["linkedin"]  .'>' .  $row["linkedin"] . '</a></td>';
                    echo '<td><input type="text" class="form-control" value="' . $row["email"] . '"></td>';
                    echo '<td>' . $row["name"] . '</td>';
         echo '</tr>';
		}

    }
    
    if(floor($row_count/$per)==$row_count/$per)
    {
    	$page_nuber = floor($row_count/$per);
    }
    else
    {
    	$page_nuber = floor($row_count/$per)+1;
    }
    
	
    echo '</tbody>';
            echo '</table>';
            echo '<div class="table-footer">';
            echo '<nav class="pagination pagination-sm m-a-0">';
$hrefA='<li class="active"><a href=?page=view&p=';
$hrefB='<li><a href=?page=view&p=';
setpagenumber($p,11,$hrefA,$hrefB);
//setpagenumfromto(1,11,$hrefA,$hrefB);
//             		if($p==1)
//             		 {
//             		 	echo '<li class="disabled"><a href="#">«</a></li>';
//             		 }
//             		 else
//             		 {
//             		 	$pre = $p-1;
//             		 	echo '<li class="active"><a href=?page=view&p='. $pre .'>«</a></li>';
//             		 }
          			
//           			$i=0;
//           			for($i=1;$i<=$page_nuber;$i++)
//           			{
//           				if($p==$i)
//           				{
//           					echo '<li class="active"><a href="?page=view&p='. $i .'">'.$i.'</a></li>';
//           				}
//           				else
//           				{
//           					echo '<li><a href="?page=view&p='. $i .'">'.$i.'</a></li>';
//           				}
          				
//           			}
       
       
//           			if($p==$page_nuber)
//             		 {
//             		 	echo '<li class="disabled"><a href="#">»</a></li>';
//             		 }
//             		 else
//             		 {
//             		 	$next = $p+1;
//             		 	echo '<li class="active"><a href=?page=view&p='. $next .'>»</a></li>';
//             		 }
          			
        	echo '</nav>';
           	echo '</div>';

    $dbh = null;
?>
