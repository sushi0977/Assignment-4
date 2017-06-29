<?php

include "dbConnect.php";

// database functions ************************************************
function fInsertToDatabase($asin, $title, $price) {
    $db = fConnectToDatabase();
    $sql = "INSERT INTO dvdtitles (asin, title, price) VALUES (:asin, :title, :price)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':asin', $asin,PDO::PARAM_STR,15);
    $stmt->bindParam(':title', $title,PDO::PARAM_STR,100);
    $stmt->bindParam(':price', $price);
    $stmt->execute();
}
    // TODO: Fill in the rest of the fuction

function fDeleteFromDatabase($asin) {
    $db = fConnectToDatabase();
    $sql = "DELETE FROM dvdtitles WHERE asin=:asin";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':asin', $asin);
    $stmt->execute();

    // TODO: Fill in the rest of the fuction
}
function fListFromDatabase() {
    $db = fConnectToDatabase();
    $sql = 'SELECT * FROM dvdtitles';
    $stmt = $db->query($sql);
    $results = $stmt->fetchAll();
    print_r($results);
}

function fInsertActorsToDatabase( $fname, $lname)
{
    $db = fConnectToDatabase();
    $sql = "INSERT INTO dvdActors (fname,lname) VALUES (:fname,:lname)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':fname', $fname, PDO::PARAM_STR, 20);
    $stmt->bindParam(':lname', $lname, PDO::PARAM_STR, 20);
 ;

    $stmt->execute();
}

function fListToDatabase() {
    $db = fConnectToDatabase();
    $sql = 'SELECT * FROM dvdActors';
    $stmt = $db->query($sql);
    $results = $stmt->fetchAll();
    print_r($results);
}


/*function fInsertCrosswalk($asin, $actorID) {
    $db = fConnectToDatabase();
    $sql = "INSERT INTO DtitlesActors (asin,actorID) VALUES (:asin,:actorID)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':asin', $asin, PDO::PARAM_STR, 15);
    $stmt->bindParam(':actorID', $actorID);
    ;

    $stmt->execute();
}*/



function fListDVDTitleAndActors()
{
    $db = fConnectToDatabase();
    $sql = 'SELECT dt.title, da.fname, da.lname 
    FROM dvdtitles dt
    INNER JOIN DtitlesActors a ON a.asin = dt.asin
    INNER JOIN dvdActors da ON da.actorID = a.actorID';
    $stmt = $db->query($sql);
    $results = $stmt->fetchAll();
    print_r($results);
}




?>