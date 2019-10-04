<?php

// this will autoload the class that we need in our code
spl_autoload_register(function($class) {
 
    // we are assuming that it is in the same directory as common.php
    // otherwise we have to do
    // $path = 'path/to/' . $class . ".php"    
    require_once "$class.php"; 
  
});


// session related stuff

session_start();
ini_set('display_errors', 1);



error_reporting(E_ALL ^ E_NOTICE);

function printErrors() {
    if(isset($_SESSION['errors'])){
        echo "<ul style='color:red;'>";
        
        foreach ((array)$_SESSION['errors'] as $value) {
            echo "<li>" . $value . "</li>";
        }
        
        echo "</ul>";   
        unset($_SESSION['errors']);
    }    
}

# check if field is set
function isMissingOrEmpty($name) {
    $value = $_REQUEST[$name];
    if (!isset($value) || (empty($value) && $value !== "0")) {
        return "$name cannot be empty";
    }
}

function isNull($name) {
    $value = $_REQUEST[$name];
    if (!isset($value) || (empty($value) && $value !== "0")) {
        return "There was an error. Please try again.";
    }
}

# this is better than empty when use with array, empty($var) returns FALSE even when
# $var has only empty cells
function isEmpty($var) {
    if (isset($var) && is_array($var))
        foreach ($var as $key => $value) {
            if (empty($value)) {
               unset($var[$key]);
            }
        }

    if (empty($var))
        return TRUE;
}
