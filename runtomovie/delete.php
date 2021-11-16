<?php 


if(isset($_GET["delete_id"]))
{
    
    include('db.php');

	$sorgu=$db->prepare('DELETE FROM tbl_per WHERE id=?');
	$sonuc=$sorgu->execute([$_GET['delete_id']]);

	if($sonuc){
	
    header("refresh:1;iletisim.php");
}
	}
	else{
		echo("Kayıt silinemedi.");
}
?>