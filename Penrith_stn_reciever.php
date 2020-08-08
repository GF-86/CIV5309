<?php

$server = 'DESKTOP-CLTNVDD\SQLEXPRESS';
$database = 'CIV5309';

$str = $_POST['str'];

$connstr = "Driver={SQL Server Native Client 11.0};Server=$server;Database=$database;";
$conn = odbc_connect($connstr,'********','********');
$sqlstring = "INSERT INTO penrith_station_survey VALUES $str";

if( $conn ) {
    echo "Connection established.";
    $return = odbc_exec ( $conn , $sqlstring);
}else{
    echo "Connection could not be established.";
}

if ($return){
    echo "Query Executed";
      }else {
    echo "Query failed " .odbc_error();
  }   

?>