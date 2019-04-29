<?php

$servername = "localhost";  //meno servera ku ktorému sa pripájame- localhost je môj PC
$username = "root";         // toto všetko je zadané v php my admin ---mysql---user (a tam môžem zmeni heslo, užívate¾a, taktiež aj každému môžem nieèo zmeni napr len èítanie, alebo prepis )
$password = "";             // heslo do databázy
$dbname = "salon";           // meno v databáze

//vložené z php my admin, azure aby sme sa napojili na databázu v azure
foreach ($_SERVER as $key => $value) {                            //cyklus, ktoré pole "premenná server" a ber jednu položku za druhou, k¾úè a hodnotu 
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {             // ak nieèo v tej zátvore je splnené (nesplnené)  -teraz to nie je splnené kedže !==0, tým pádom nie je to splnené, tak mi vykoná tie 4 riadky $connectstr
        continue;
    }
    
    $servername = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);     
    $dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $username = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $password = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  //ak je tam nejaká chyba, vypíše mi Connection failed...
}
//echo "Connected successfully<br>";

?>