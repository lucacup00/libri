<?php
require_once('connessione.php');


?>
<html>
    <head>
        <title>form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
    <?php
    if(isset($_POST['create'])){
        $firstname = $_POST['Nome'];
        $secondname = $_POST['Cognome'];
        $phone = $_POST['Telefono'];

        $sql="INSERT INTO utenti(`Nome`,`Cognome`,`Telefono`)
         VALUES('$firstname','$secondname','$phone')";
        $res=mysqli_query($conn,$sql);
       

    }
    ?>
<form action="registration.php" method="post">
  <div class="form-group">
    <label">Nome</label>
    <input type="text"  name="Nome" class="form-control"  required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your date with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="text">Cognome</label>
    <input type="text"  name="Cognome" class="form-control"  required>
  </div>
  <div class="form-group">
    <label for="number">Telefono</label>
    <input type="number"  name="Telefono" class="form-control" placeholder="Numero" required>
  </div>
  <button type="submit" name="create" class="btn btn-primary">Submit</button>
</form>
    <div>

    
       
          <a href="./index.php">
            <button class="btn btn-primary"target="_parent">Visualizza</button>
          </a>
    </div> 
 

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

