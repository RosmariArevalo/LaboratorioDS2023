<?php
require "vendor/autoload.php";
$server=new nusoap_client($url,"wsdl");
$server->configureWSDL('server','urn:server');
$server->wsdl->schemaTargetNamespace='urn:server';
$server->wsd1->addComplexType(
    'Promedio',
    'complexType',
    'struct',
    'all',
    '',
    array(
        'nombre'=>array('name'=>'nombre','type'=>'xsd:string'),
        'nota1'=>array('name'=>'nota1','type'=>'xsd:float'),
        'nota2'=>array('name'=>'nota2','type'=>'xsd:float'),
        'parcial'=>array('name'=>'parcial','type'=>'xsd:float'),
        'promedio'=>array('name'=>'promedio','type'=>'xsd:float')
    )
);
$server->register(
    'promedio',
    array('nombre'=>'xsd:string','nota1'=>'xsd:float','nota2'=>'xsd:float', 'parcial'=>'xsd:float'),
    array('return'=>'tns:Promedio'),
    'urn:server',
    'urn:server#promedioServer',
    'rpc',
    'encoded',
    'Funcion que nos permite digitar dos notas y una nota parcial que da como resultado el promedio final de los estudiantes de UNICAES'
);

function promedio($nombre, $nota1, $nota2, $parcial){
    $promedio=($nota1*0.25)+($nota2*0.25)+($parcial*0.50);
    $connect= mysqli_connect("localhost","root","catolica","registro_rosmari");
    $this->executeInsert("insert into alumno_rosmari set nombre='{$nombre}', nota1='{$nota1}',
    nota2='{$nota2}, parcial='{$parcial}'");
    $result=array('nombre'=>$nombre,
        'nota1'=>$nota1,
        'nota2'=>$nota2,
        'parcial'=>$parcial,
        'promedio'=>$promedio
    );
}