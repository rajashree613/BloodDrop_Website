<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'blooddrop';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
   // echo "Connection Successful";
?>
   <script>
   alert('Connection Successful')
   </script>
   <?php

}
else{
	?>
	<script>

    alert ("No Connection");
	</script>
	<?php
}

?>