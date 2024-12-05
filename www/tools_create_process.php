<?php

if($_SERVER["REQUEST_METHOD"] !== "POST"){
    echo "verkeerde methode gebruikt";
    exit;

}


// Als tool_name in POST-array NIET bestaat dan is het goed!!!
if(!isset($_POST["tool_name"])){
    echo "De sleutel TOOL_NAME bestaat is";
    exit;
}
if(!isset($_POST["tool_category"])){
    echo "De sleutel TOOL_CATEGORY bestaat is";
    exit;
}
if(!isset($_POST["tool_brand"])){
    echo "De sleutel TOOL_BRAND bestaat is";
    exit;
}
if(!isset($_POST["tool_price"])){
    echo "De sleutel TOOL_PRICE bestaat is";
    exit;
}

$name = $_POST['tool_name'];