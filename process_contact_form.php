<?php
session_start();

$database = new PDO(
    'mysql:host=devkinsta_db;
    dbname=study_group',
   'root',
   'WaoDc0cvoNR1eUiM'
);

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$sql = "SELECT * FROM tables where email = :email";
    $query = $database->prepare( $sql );
    $query->execute([
        'email' => $email
    ]);
    $user = $query->fetch();


    if( empty($name) || empty($email) || empty($message)){
        $error = 'All fields are required';
    }else if ( strlen($message) <10 ) {
        $error = 'must 10 characters';
    } else if ( $user ){
        $error = "Please use other email";
    
    } else {
        $sql = "INSERT INTO tables ( `name`, `email`, `message` )
            VALUES(:name, :email, :message)";
            $query = $database->prepare( $sql );
            $query->execute([
                'name' => $name,
                'email' => $email,
                'message' => $message
            ]);
        
        $success = "Success";

    }
    
    
    if (isset( $error ) ) {
        $_SESSION['error'] = $error;
        header("Location: /");
        exit;
    }

    if (isset( $success ) ) {
        $_SESSION['success'] = $success;
        header("Location: /");
        exit;
    }
    
    
    ?>