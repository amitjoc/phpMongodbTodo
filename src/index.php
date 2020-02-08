<?php 

require_once '../vendor/autoload.php';

//making the connection to db
$mDB = new MongoDB\Client;

//cheking the update 


//listing of db
$listOFDb = $mDB->listDatabases();
// var_dump(iterator_to_array($listOFDb));

echo "<code>Database List</code><br />";
foreach(iterator_to_array($listOFDb,TRUE) as $database){
    echo $database['name'];
    echo '<br />';
}
echo '<br /><br />';
echo "<code>Collection List</code><br />";
//select the db
$database = $mDB->selectDatabase("test");

$cursor = $database->command(['listCollections'=>1]);


 
//listing of the collections
foreach ($cursor as $collection){
    echo $collection['name'];
    echo '<br />';
}

 
 
 
 


?>