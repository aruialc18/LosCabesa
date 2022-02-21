<?php
 include 'conex.php';

 if (isset($_GET['deleteid'])){
$id=$_GET['deleteid'];
$sql= "delete from `usuario` where id=$id";
$result=mysqli_query($con,$sql);
if($result){
   // echo 'usuario borrado';
   header('location:crud.php');
}else{
    die(mysqli_error($con));
}
 }