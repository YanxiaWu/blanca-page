<?php

$con = new mysqli('localhost:3308', 'root', '', 'contactos');



if (!$con) {
    die(mysqli_error($con));
}
