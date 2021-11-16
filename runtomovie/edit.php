<?php
    require_once "db.php"
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
    <title>Edit</title>
</head>
<body>


<?php
if(isset($_REQUEST['update_id']))
{
    $id=$_REQUEST['update_id'];
    $select_stmt=$db->prepare('SELECT * FROM tbl_per WHERE id=?');
    $select_stmt->execute([$id]);
    $row=$select_stmt->fetch(PDO::FETCH_ASSOC);
    extract($row);

}
if(isset($_REQUEST['btn_update'])){

    $firstname_up=$_POST['firstname'];
    $lastname_up=$_POST['lastname'];
    $tel_up=$_POST['tel'];
    $film_up=$_POST['film'];

    if(empty($firstname_up)){

        $errormsg="İsminizi boş bırakmayın";
    }
    else if(empty($lastname_up)){
        $errormsg="Soyisminizi boş bırakmayın";
        }
    else if(empty($tel_up)){
        $errormsg="Telefon numaranızı boş bırakmayın";
        }
    else if(empty($film_up)){
        $errormsg="Film adını boş bırakmayın";
        }
    else{
        try{
            if(isset($errormsg)){
                $update_stmt=$db-prepare('update tbl_per SET firstname =?, lastname=?, tel=?, film=? WHERE id=?');
                $update_stmt->execute([$firstname_up, $lastname_up, $tel_up, $film_up, $id]);

                if($update_stmt){
                    header("refresh:1;iletisim.php");

                }
                else{
                    echo "hata oluştu;";
                }
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
  
?>
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
        <a class="nav-link" href="index.php">İletişim</a>
      </li>   
    </ul>
  </div>  
</nav>
<br>


<div class="container" style="margin-top:100px" >
  <form class="form-inline" method="post">
    <label for="firstname">İsim:</label>
    <input type="text" class="form-inline" id="firstname" name="firstname" value="<?php echo $row['firstname']?>">
    <label for="lastname">Soyisim:</label>
    <input type="text" class="form-inline" id="lastname" name="lastname" value="<?php echo $lastname ?>" > 
    <label for="tel">Telefon No:</label>
    <input type="text" class="form-inline" id="tel" name="tel"  value="<?php echo $row['tel']?>">
    <label for="film">Filmin Adı:</label>
    <input type="text" class="form-inline" id="film" name="film" value="<?php echo $row['film']?>">
    <center>
    <button type="submit" class="btn btn-primary" name="btn_update">Ekle</button>
    <a href="iletisim.php" class="btn btn-danger">İptal</a>
    </center>
  </form>
</div>



</body>
</html>