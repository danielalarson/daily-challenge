<?php
spl_autoload_register(function($class) {
    $namespace_string = str_replace('\\', '/', $class);
    include "$namespace_string.php";
});