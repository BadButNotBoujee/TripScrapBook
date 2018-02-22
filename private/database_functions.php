<?php
 require($_SERVER["DOCUMENT_ROOT"]."/vendor/autoload.php");
 use Herrera\Pdo\PdoServiceProvider;
 use Silex\Application;


function makeConnection(){
   
   
$app = new Application();

$dbopts = parse_url(getenv('DATABASE_URL'));

$app->register(new PdoServiceProvider(),
    array(
        'pdo.dsn' => 'mysql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"],
        'pdo.port' => $dbopts["port"],
        'pdo.username' => $dbopts["user"],
        'pdo.password' => $dbopts["pass"]
    )
);

     $connection = pg_connect("host=".$dbopts["host"]." port=".$dbopts["port"]." dbname=".ltrim($dbopts["path"],'/')." user=".$dbopts["user"]." password=".$dbopts["pass"])or die('connection failed');

     return $connection;
}




?>