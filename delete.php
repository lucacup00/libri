<?php

$id=$_GET['IdUtenti'];
echo $id;

include'connessione.php';
$sql=" DELETE FROM utenti WHERE IdUtenti= ".$id ;
$res=mysqli_query($conn,$sql);
if(!$res)
{
    die("Qery errata" . $sql);

}

header("Location: index.php");




?>