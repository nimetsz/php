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
    <title>Add</title>
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
<div class="container" style="margin-top:100px" >
  <form class="form-group" method="post">
    <label for="firstname">İsim:</label>
    <input type="text" class="form-control" id="firstname" placeholder="İsminiz" name="firstname">
    <label for="lastname">Soyisim:</label>
    <input type="text" class="form-control" id="lastname" placeholder="Soyisminiz" name="lastname"> 
    <label for="tel">Telefon No:</label>
    <input type="text" class="form-control" id="tel" placeholder="Telefon numaranız" name="tel">
    <label for="film">Filmin Adı:</label>
    <input type="text" class="form-control" id="film" placeholder="Filmin adı" name="film">
    </div>
    <center>
    <button type="submit" class="btn btn-primary" style="margin-top:20px" name="btn_insert">Submit</button></center>
  </form>
</div>



<?php

if(isset($_REQUEST['btn_insert']))
{
    $firstname=$_REQUEST['firstname'];
    $lastname=$_REQUEST['lastname'];
    $tel=$_REQUEST['tel'];
    $film=$_REQUEST['film'];

}

if(empty($firstname)){
    $errorMsg="Please enter Firstname";
}
else if(empty($lastname)){
    $errorMsg="Please enter LastName";
}
else if(empty($tel)){
    $errorMsg="Please enter tel";
}
else if(empty($film)){
    $errorMsg="Please enter film";
}
else{
    $insert_stmt=$db->prepare('INSERT INTO tbl_per(firstname,lastname,tel,film) VALUES(:fname, :lname, :tel, :film)');
    $insert_stmt->bindParam(':fname',$firstname);
    $insert_stmt->bindParam(':lname',$lastname);
    $insert_stmt->bindParam(':tel',$tel);
    $insert_stmt->bindParam(':film',$film);



    if($insert_stmt->execute())
    {
        header("refresh:1; iletisim.php");
    }


}

?>
</body>
</html>