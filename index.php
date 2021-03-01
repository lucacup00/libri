
<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
  </head>
  <body >

  <a  href="./registration.php">
            <button class="btn btn-primary"target="_parent">Registrati</button>
        </a>

  

        <table  class="table table-dark">
        <thead>
           <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Cognome</th>
              <th scope="col">Telefono</th>
              <th scope="col">Elimina</th>
              <th scope="col">Modifica</th>
          
          </tr>
        </thead>
          <tbody>
          <?php
          include'connessione.php'; //RICHIAMA CONNESSIONE

          $sql="SELECT * FROM `utenti`";
          $res=mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($res)){
            $id=$row['IdUtenti'];
            $nome=$row['Nome'];
            $cognome=$row['Cognome'];
            $telefono=$row['Telefono'];

            
            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$cognome</td>";
            echo "<td>$telefono</td>";
            echo "<td> <a href='delete.php?IdUtenti=$id'><button class='btn btn-sm btn-danger'>DELETE</button></a></td>";
            echo "<td> <a href='edit.php?IdUtenti=$id'><button class='btn btn-sm btn-danger'>EDIT</button></a></td>";
            echo "</tr>";
            
          }
        ?>
        </tbody>
        </table>
          


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










