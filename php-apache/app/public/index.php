<?php
try {
    $dbh = new PDO('mysql:dbname=docker_review;host=review-mysql;unix_socket=/tmp/mysql.sock', 'root', 'e2QNqCUd');
    echo '<h1 style="color:yellow">Congratulations</h1>';
} catch (PDOException $e) {
    echo '<h1 style="color:red">Failed<br><p>' . $e->getMessage() . '</p>';
}

