$nombre="";
if (!empty($_REQUEST['nombre'])){
$nombre=$_REQUEST['nombre'];
}
 
$apellido="";
if (!empty($_REQUEST['apellido'])){
$apellido=$_REQUEST['apellido'];
}
 
$carrera="";
if (!empty($_REQUEST['carrera'])){
$carrera=$_REQUEST['carrera'];
}
 
$materia="";
if (!empty($_REQUEST['materia'])){
$materia=$_REQUEST['materia'];
}
 
//Luego sobrescribo el txt
 
$archivo="datos.txt";
 
     $file=fopen($archivo,"a");
     fwrite($file,$nombre.$apellido.$carrera.$materia);
     fclose($file); 