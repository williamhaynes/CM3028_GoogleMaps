<?php
/**
 * Created by PhpStorm.
 * User: hype_
 * Date: 07/11/2016
 * Time: 13:16
 */

// connect to your Azure server and select database (remember you connection details are all on the azure portal
$db = new mysqli(
    "us-cdbr-azure-southcentral-f.cloudapp.net",
    "b21eaed643e4cb",
    "4756773b",
    "wjh0001db" );

// test our connection
if ($db->connect_errno) {
    die ('Connection Failed :'.$db->connect_error );
}
