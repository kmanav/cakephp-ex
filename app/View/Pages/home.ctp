<?php
$serverName = "10.19.17.29\\sqlserver, 1433"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"DW_ODS_CaseConnect", "UID"=>"CASEConnectUSer", "PWD"=>"Ca$e3c&_%76”)");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
