<?php
	$algo="nilton";
	$algo2="12345";

	$aResults=array("nombreUser"=> $algo, "numLogins"=>$algo2);
//	echo var_dump($aResults);
?>

<script language="JavaScript" type="text/JavaScript">
 
var miArray = new Object();
 
<?php foreach($aResults as $c=>$v) {  ?>
 
miArray["<?php echo $c; ?>"] = "<?php echo $v; ?>";
 
<?php }?>
 
alert(miArray.nombreUser+"-"+miArray.numLogins);
alert("<?php echo $aResults; ?>"); 
</script>

<?php
//$mysqli=new mysqli('localhost', 'root', '1234', 'inka');
//$mysqli=new mysqli('20.20.1.1', 'root', 'gpsinka', 'inka');
/*$mysqli=new mysqli('10.10.1.20', 'root', '2013gpsink4admin*saisac', 'inka');
$mysqli->query("SET NAMES 'utf8'");
$q=$mysqli->query("select * from actions");
while($r=$q->fetch_assoc()) {
    print_r($r);
}*/
$link = mysqli_init();
if (!$link) {
    die('mysqli_init failed');
}

if (!mysqli_options($link, MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
    die('Setting MYSQLI_INIT_COMMAND failed');
}

if (!mysqli_options($link, MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
    die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
}

//if (!mysqli_real_connect($link, '10.10.1.20', 'root', '2013gpsink4admin*saisac', 'inka')) {
if (!mysqli_real_connect($link, 'localhost', 'root', '1234', 'inka')) {	
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

echo 'Renato -> Success... ' . mysqli_get_host_info($link) . "\n";
printf("Server version: %s\n", mysqli_get_server_info($link));

mysqli_close($link);
?>
