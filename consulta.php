<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="datos_clientes";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die ("conexion fallida".mysqli_connect_error());
}
else{
echo "conexion satisfactoria, el numero de filas es: "; 
$sql= "SELECT * FROM clientes"; 
$result= mysqli_query($conn, $sql); 
$num= mysqli_num_rows ($result); 
echo $num."<br>";
}
while($row=mysqli_fetch_array($result)){
echo $row[0]." ".$row[1]." ".$row[2]."<br>";
}
mysqli_free_result($result);
mysqli_close($conn);
?>