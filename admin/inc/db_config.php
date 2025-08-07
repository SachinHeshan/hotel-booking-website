<?php

$hname = 'localhost';
$uname = 'root';
$pass = '';     
$dbname = 'hotel-booking';

$con = mysqli_connect($hname, $uname, $pass, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

function fileration($data) {
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = stripslashes($data[$key]); 
        $data[$key] = htmlspecialchars($data[$key]);
        $data[$key] = strip_tags($data[$key]);
    }
    return $data;
}

function Select($sql, $value, $datatype) {
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {

        mysqli_stmt_bind_param($stmt, $datatype, ...$value);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("query cannot be executed-select");
        }

    } else {
        die("query cannot be prepared-select");
    }
}

function update($sql, $value, $datatype) {
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {

        mysqli_stmt_bind_param($stmt, $datatype, ...$value);
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            die("query cannot be executed-update");
        }

    } else {
        die("query cannot be prepared-update");
    }
}

?>
