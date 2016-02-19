<h1>Example PHP App</h1>

<h2>Mysql Connection Properites</h2>
<?php 
var_dump(getenv('PARAM1'));


$connection_envs = array(
    'dbname' => isset($_SERVER['MYSQL_DATABASE']) ? $_SERVER['MYSQL_DATABASE'] : 'demoapp',
    'dbuser' => isset($_SERVER['MYSQL_USERNAME']) ? $_SERVER['MYSQL_USERNAME'] : 'root',
    'dbpass' => isset($_SERVER['MYSQL_PASSWORD']) ? $_SERVER['MYSQL_PASSWORD'] : 'mysupersecretrootpassword',
    'dbhost' => isset($_SERVER['MYSQL_HOST']) ? $_SERVER['MYSQL_HOST'] : 'mysql',
);

// var_dump($connection_envs);
?>

<h2>Mysql Local</h2>
<?php 
$dbname = $connection_envs['dbname'];
$dbuser = $connection_envs['dbuser'];
$dbpass = $connection_envs['dbpass'];
$dbhost = $connection_envs['dbhost'];
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



