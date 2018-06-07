<?php
  function setpagenumber($i,$num,$hrefA,$hrefB)
  {
    if($i==1)
    {
      echo '<li class="disabled"><a href="#">«</a></li>';
      echo $hrefA . $i .'>'.$i.'</a></li>';
      if($num<12)
      {
        setpagenumfromto(2,$num,$hrefA,$hrefB);
      }
      else
      {
        setpagenumfromto(2,8,$hrefA,$hrefB);
        echo '<li class="disabled"><a href="#">...</a></li>';
        setpagenumfromto($num-1,$num,$hrefA,$hrefB);
      }
      $next = $i+1;
      echo $hrefA. $next .'>»</a></li>';
    }
    else if($i==$num)
    {
      $pre = $i-1;
      echo $hrefA. $pre .'>«</a></li>';
      if($num<12)
      {
        setpagenumfromto(1,$num-1,$hrefA,$hrefB);
      }
      else
      {
        setpagenumfromto(1,2,$hrefA,$hrefB);
        echo '<li class="disabled"><a href="#">...</a></li>';
        setpagenumfromto($num-7,$num-1,$hrefA,$hrefB);
      }     
      echo $hrefA. $i .'">'.$i.'</a></li>';
      echo '<li class="disabled"><a href="#">»</a></li>';
    }
    else
    {
      $pre = $i-1;
      echo $hrefA. $pre .'>«</a></li>';
      if($num<12)
      {
        setpagenumfromto(1,$i-1,$hrefA,$hrefB);
        echo $hrefA . $i .'>'.$i.'</a></li>';
        setpagenumfromto($i+1,$num,$hrefA,$hrefB);
      }
      else
      {
        
      }
      $next = $i+1;
      echo $hrefA. $next .'>»</a></li>';
    }
  }
  function setpagenumfromto($from,$to,$hrefA,$hrefB)
  {
    for($x=$from;$x<=$to;$x++)
      {
      echo $hrefB . $x .'>'.$x.'</a></li>';
    }
  }
?>
