<?php
$server='localhost';
$user='root';
$password='';
$db='coronadb';
$con=mysqli_connect($server,$user,$password,$db);
if($con){
?>
<script>
   alert("connection succesful");
</script>
<?php
}else{
  ?>
  <script>
     alert("no succesful");
  </script>
  <?php
}
   ?>