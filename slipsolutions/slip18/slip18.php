<?php
 echo"<table border=1>";
 foreach($_SERVER as $k=>$v)
 {
 echo"<tr>
 <td>".$k."</td>
 <td>".$v."</td>
 </tr>";
 }
 echo"</table>";
?>