<?php
    require_once 'db.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Contact</title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">RUNTOMOVIE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Anasayfa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="iletisim.php">İletişim</a>
      </li>   
    </ul>
  </div>  
</nav>
<br>

<div style="margin-top:10px">
<h1 class="display-5">
  <span>Bilet Listesi</span>
  </h1>
</div>
    
   <div class="container" style="margin-top:20px">          
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>İsim</th>
        <th>Soyisim</th>
        <th>Telefon</th>
        <th>Filmin Adı</th>
      </tr>
    </thead>
    <tbody>
                                    <?php
                                        $select_stmnt=$db->prepare("SELECT *FROM tbl_per");
                                        $select_stmnt->execute();
                                        while($row=$select_stmnt->fetch(PDO::FETCH_ASSOC)){
                                        
                                    ?>
                                    <tr>
                                        
                                        <td><?php echo $row['firstname']?></td>
                                        <td><?php echo $row['lastname']?></td>
                                        <td><?php echo $row['tel']?></td>
                                        <td><?php echo $row['film']?></td>

                                        <td><a href="edit.php?update_id=<?php echo $row['id']; ?>" class="btn btn-dark">Düzenle</a></td>
                                        <td><a href="delete.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Sil</a></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
    </tbody>
  </table>
</div>

</body>
</html>