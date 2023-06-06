<?php

require "connection.php";

if(isset($_POST['upload'])){
    $file = $_FILES['file'];
    

    $fileName = $_FILES['file']['name'];
 
    $fileTmpName = $_FILES['file']['tmp_name'];
    $folder = "uploads/";
    move_uploaded_file($fileTmpName,$folder.$fileName);
    $query = $pdo->prepare("INSERT INTO uploads(image)VALUES('$folder$fileName')");
    $query->execute();
 
    
    $statement = $pdo->prepare("select * from uploads");
    $statement->execute();
    $data=$statement->fetchAll(PDO::FETCH_OBJ);


    
}

    

?>

     <?php foreach($data as $detail):?>

        <img src="<?php echo $detail->image?>" alt="" width="100px">

     <?php endforeach;?>
