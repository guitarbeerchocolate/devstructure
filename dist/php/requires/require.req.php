<?php
function requireTest() {
    echo 'This is from a function within require.req.php<br />';
}

function dbTest() {
    echo 'Starting from dbTest<br />';
    /*
    echo 'From https://rfam.readthedocs.io/en/latest/database.html#connection-details';
    $username = "rfamro";
    $password = "";
    $dbname = "Rfam";
    $host = "mysql-rfam-public.ebi.ac.uk:4497";
    
    try {
        $DBH = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        echo "<br />Connected to database<br />";
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

    $stmt = $DBH->query("SELECT * FROM full_region");
    while ($row = $stmt->fetch()) {
        echo $row['rfamseq_acc'].'<br />';
    }
    $DBH = null;
    */
    echo 'Finished<br />';
}
?>