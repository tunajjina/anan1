 <?php
session_start();

$id=$_POST['a1'];
$name=$_POST['a2'];
$me=$_POST['a3'];


try{
    $sql=new PDO("mysql:host=localhost;dbname=test","root","");
    //echo "Connection successful";
    $stm=$sql->prepare("update collage set collage.me='$me' where collage.id='$id'");

     $rset=$stm->execute();
     //$arr=$dbh->getErrorInfo();
     //print_r($arr);
        header('location:institute.php');

  }
  catch(Exception $e){
      print "Error !".$e->getMessage();
}

