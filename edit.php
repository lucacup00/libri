<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php
$id=$_GET['IdUtenti'];
echo $id."<br>";
//connessione db
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_thewalletofluca";




$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//interrogazione al db

$sql="SELECT * FROM `utenti` WHERE `idUtenti`=$id";
$res=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($res);


$name=$data['Nome'];
$cognome=$data['Cognome'];
$telefono=$data['Telefono'];


if(isset($_POST['mod'])){
   
    $firstname = $_POST['Nome1'];
    $secondname= $_POST['Cognome1'];
    $phone = $_POST['Telefono1'];


    $sql1="UPDATE `utenti` SET `Nome`='$firstname',`Cognome`='$secondname',`Telefono`='$phone' WHERE `idUtenti`=$id";
    $res=mysqli_query($conn,$sql1);
    if($res){
        echo 'Modifica andato buon fine';
    }else{
        echo 'Modifica non andato buon fine';
    }
}   


?>
<form method="POST" action="<?php echo $_SERVER['REQUEST_URI'];?>">
    <div class="form-group">
        <label >ID<?php echo $id?></label>
        <label >Nome</label>
        <input type="text" name="Nome1" class="form-control" value="<?php  echo $name; ?>" />
    </div>
    <div class="form-group">
        <label >Cognome</label>
        <input type="text" name="Cognome1" class="form-control" value="<?php  echo $cognome; ?>"/>
    </div>
    <div class="form-group"> 
        <label >Telefono</label>
        <input type="number" name="Telefono1" class="form-control" value="<?php  echo $telefono; ?>"/>
    </div>
    <button type="submit" id="submitButtone" name="mod" class="btn btn-primary">Submit</button>

</form>

        <a href="./index.php">
            <button class="btn btn-primary"target="_parent">Visualizza</button>
        </a>
       


        
  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->
</body>

</html>


   



    





