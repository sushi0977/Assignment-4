<?php

//include "../dbConnect.php";
include "../mySQL.php";

$name = "Kilroy";

//$myDB = fConnectToDatabase();
/*$stmt = $myDB->prepare("INSERT INTO dvdtitles (asin) VALUES (:asin),
(title) VALUES (:title), (price) VALUES (:price)");
$stmt->bindParam(":asin", $asin);
$stmt->execute();*/

fInsertToDatabase('B01MAZGLMP', 'Moana', 19.99);
//fInsertToDatabase('B01LTHOAGM', 'Fantastic Beasts and Where to Find Them', 24.51);
//fInsertToDatabase('B00N1JQ452', 'Guardians Of The Galaxy', 19.96);
fDeleteFromDatabase('B01MAZGLMP');
fListFromDatabase();

fInsertActorsToDatabase( 'Chris', 'Pratt');
fInsertActorsToDatabase( 'Zoe', 'Saldana');
fInsertActorsToDatabase( 'Joe', 'Gunn');
fInsertActorsToDatabase( 'Dwayne', 'Johnson');
fListToDatabase();

//$stmt = $myDB->prepare("SELECT * FROM test");
/*$stmt = $myDB->prepare("SELECT * FROM dvdtitles");
$stmt->execute();
while($row = $stmt->fetch()){
    print_r($row);
}*/



echo '<!DOCTYPE html>
    <html>
    <head>
    
    <title>test</title>
    </head>
    <body>
    <p>NOT IMPLEMENTED</p>
    </body>
    </html>';