<?php
spl_autoload_register(function ($className) {
    foreach (array('PageObjects') as $type) {
        $filePath = __DIR__ . DIRECTORY_SEPARATOR . $type . DIRECTORY_SEPARATOR . $className . '.php';
        if (file_exists($filePath)) {
            include_once($filePath);
        }}});