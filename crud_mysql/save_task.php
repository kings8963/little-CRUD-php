<?php
include("db.php");

//validamos si hay informacion cpmfirmando a donde se envia la info del form
if(isset($_POST['save_task'])){
    //echo 'saving';
    // guardamos en una variable la info de los name o id del formulario
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO task(tittle, description) VALUES('$title', '$description')";
    $result = mysqli_query($conn,$query);

    /*$query = "INSERT INTO task(title, description) VALUES(?)";
    $sentence = $conn->prepare($query);
    $sentence->execute([$title,$description]);*/

    if(!$result){
        die("Query failed");
    }

    $_SESSION['message'] = 'Task Saved succefully';
    $_SESSION['message_type'] = 'success';
    
    header("Location: index.php");
    


}


?>