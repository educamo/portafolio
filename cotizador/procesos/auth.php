<?php 
/* Connect To Database*/
		    require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		    require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos

		    session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
// username and password sent from Form
$username=$_POST['username']; 
//Here converting passsword into MD5 encryption. 
$password=md5($_POST['password']); 
//status de activo al usuario
$activo = 1;

		    $sql = "SELECT name,
		    email,
		    user_name, 
		    picture, 
		    admin
		    FROM users
		    where user_name='$username' and password='$password' and activo= '$activo'";

		    $result = mysqli_query($con, $sql);
		    $count=mysqli_num_rows($result);
		    $bus_login = mysqli_fetch_array($result,MYSQLI_ASSOC);
// If result matched $username and $password, table row  must be 1 row
if($count==1)
{
$_SESSION['login_user']=$bus_login['user_name']; //Storing user session value.
$_SESSION['login_name']=$bus_login['name'];
$_SESSION['login_email']=$bus_login['email'];
$_SESSION['login_picture']=$bus_login['picture'];
$_SESSION['login_admin']=$bus_login['admin'];
mysqli_close($con);
echo $bus_login['user_name'];
}

}


 ?>