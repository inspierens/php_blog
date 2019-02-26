<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23.02.2019
 * Time: 1:54
 */

//connect to base
$connection = mysqli_connect(
    $config['db']['server'],
    $config['db']['username'],
    $config['db']['password'],
    $config['db']['name']
);

//if not connected
if ($connection == false) {
    echo 'Not connection!<br/>';
    echo mysqli_connect_error();
    exit(); //or die
}