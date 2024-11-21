<?php

spl_autoload_register(function ($class) {
    $classFile = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

    if (file_exists($classFile) && is_readable($classFile)) {
        include_once $classFile;
    } else {
        die("Class file not found: $classFile" . PHP_EOL);

    }
});

