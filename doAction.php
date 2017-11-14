<?php
header("content-type:text/html;charset=utf-8");

include_once "getFile.php";
include_once "common.php";

$files = getFile();

foreach ($files as $fileInfo) {
    $res = uploadFile($fileInfo);
    echo $res['mes'] . '<br>';
    @$uploadFiles[] = $res['dest'];
}

$uploadFiles = array_values(array_filter($uploadFiles));

print_r($uploadFiles);




