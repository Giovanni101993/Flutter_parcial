<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        require_once 'conexion1.php';
        
        $name = $_POST['name'];
        $email = $_POST['email'];   
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        $query = "INSERT INTO `usuarios` (`name`, `email`, `phone`, `password`) VALUES ('$name', '$email', '$phone', sha('$password'))";
        $resultado= $mysql->query($query);

        if($resultado==true){
            echo "El usuario se registro";
        }else{
            echo "Error";
        }
    }

?>