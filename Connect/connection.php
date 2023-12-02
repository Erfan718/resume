<?php 

 $con =mysqli_connect('localhost','root','','resume');
?>

<?php 
function getGeneralInfo($connection){
  $select = mysqli_query($connection,"select *from `general_info` limit 1");
  $data = mysqli_fetch_array($select);
  return $data;
}


?>