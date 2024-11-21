<?php

namespace Export;

class JsonExporter extends Exporter
{
    function export()
    {
        $format = '.json';
        $fileName = "json-file-" . rand(100, 999) . $format ;
        $filePath = __DIR__ . DIRECTORY_SEPARATOR . "jsonFiles" . DIRECTORY_SEPARATOR . $fileName;
        file_put_contents($filePath, json_encode($this->data));
        echo "File exported to : $fileName" . PHP_EOL;


    }
}

