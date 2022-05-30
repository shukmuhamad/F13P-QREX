<?php
try
{
	$connect = new PDO("sqlsrv:Server=172.16.10.202;Database=F13P_QREX", "QA_ITUser01", "projects01");
	$connect->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
	die( print_r( $e->getMessage()));
}

?>
