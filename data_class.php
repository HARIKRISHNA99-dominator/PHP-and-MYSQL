<?php




if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $u=$_POST['uid'];
    $p=$_POST['pwd'];



if($u=="")
{
    $v=FALSE;
    $e1="mandatory";
}
if($u=="")
{
    $v=FALSE;
    $e2="mandatory";
}
if($valid ==TRUE){
    header("Location:phk.php?n=".$u);
}
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
      <!--for get method everything will be shown, even the variables
    in post nothing will be shown-->
    
</head>

<style>
    span{
          color:red;  
        }
</style>

<body>
    <form method='GET' action="phk.php">  <!-- link xyz to php -->
    <?php echo $e1 ?>

    <div>
    Name <br>
<input type="text" name="uid"><span>*mandatory</span> 
<?php echo $e2; ?>

    </div>
    
    <div>
    password  <br>
    <input type="text" name="pwd"><span>*mandatory</span> 
    </div>
    
    <br>

    <input type="submit" value="submit">


    
    
    
    </form>
</body>
</html>
<?php