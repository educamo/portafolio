
$(document).ready(function() 
{

$('#login').click(function()
{
var username=$("#username").val();
var password=$("#pass").val();
var dataString = 'username='+username+'&password='+password;

$.ajax({
type: "POST",
url: "procesos/auth.php",
data: dataString,
cache: false,
beforeSend: function(){ $("#login").val('Conectando...');},
success: function(data){
if(data)
{
window.location.href = "cotizaciones.php";
}
else
{
$("#login").val('Ingresar')
alertify.error('Error Usuario o Clave Invalidos...');;
}
}
});

return false;
});

});