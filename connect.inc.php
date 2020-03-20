<?php

$con = mysqli_connect('remotemysql.com','Y7zU17vNOu', 'Z3ocmC37t7');

if (!$con)
{
    echo 'Not connected to server';
}

//if (!mysqli_select_db($con, 'partner'))
if (!mysqli_select_db($con, 'Y7zU17vNOu'))
{
    echo 'Database not selected';
}
