<?php
$con = mysqli_connect("localhost", 'root', '', 'management');
if (!$con) {
    die("Cannot connect to the database.");
}
