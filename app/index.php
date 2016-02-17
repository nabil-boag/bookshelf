<h1>Example PHP App</h1>

<h2>Mysql Connection Properites</h2>
<?php 

$connection_envs = array(
    'driver' => 'pdo_mysql',
    'dbname' => isset($_SERVER['MYSQL_DATABASE']) ? $_SERVER['MYSQL_DATABASE'] : null,
    'user' => isset($_SERVER['MYSQL_USERNAME']) ? $_SERVER['MYSQL_USERNAME'] : null,
    'password' => isset($_SERVER['MYSQL_PASSWORD']) ? $_SERVER['MYSQL_PASSWORD'] : null ,
    'host' => isset($_SERVER['MYSQL_HOST']) ? $_SERVER['MYSQL_HOST'] : null,
);

var_dump($connection_envs);
?>

<h2>Mysql Local</h2>
<?php 
$dbname = 'demoapp';
$dbuser = 'root';
$dbpass = 'mysupersecretrootpassword';
$dbhost = 'mysql';
$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysql_select_db($dbname) or die("Could not open the db '$dbname'");
$test_query = "SHOW TABLES FROM $dbname";
$result = mysql_query($test_query);
$tblCnt = 0;
while($tbl = mysql_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}
if (!$tblCnt) {
  echo "There are no tables<br />\n";
} else {
  echo "There are $tblCnt tables<br />\n";
}
?>



