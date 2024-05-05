<?php
$servername="localhost";
$username="root";
$password="";
$dbname="datos_clientes";
$name= $_POST["name"];
$email= $_POST["email"];
$textarea= $_POST["textarea"];
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die ("conexion fallida".mysqli_connect_error());
}
else{
    echo "conexion satisfactoria ";}
    $sql = "INSERT INTO clientes (name, email, textarea) VALUES ('".$name."', '".$email."', '".$textarea."')";
    if (mysqli_query($conn, $sql)){
        echo "datos guardados";
    }
    else{
        echo "datos no almacenados";
    }
    mysqli_close ($conn);
    ?>