<?php
try {
    $dbh = new PDO('mysql:dbname=[ 6 ];host=[ 7 ];unix_socket=/tmp/mysql.sock', 'root', '[ 8 ]');
    echo '<h1 style="color:yellow">Congratulations</h1>';
} catch (PDOException $e) {
    echo '<h1 style="color:red">Failed<br><p>' . $e->getMessage() . '</p>';
}

