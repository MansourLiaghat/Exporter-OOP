<?php
namespace Export;

class TextExporter extends Exporter

{
    public function export()
    {
        $format = ".txt";
        $fileName = "text-file" .rand(100,999) .$format;
        $filePath = __DIR__ . DIRECTORY_SEPARATOR ."textFiles" .  DIRECTORY_SEPARATOR."$fileName";
        file_put_contents($filePath,$this->data);
        echo "File exported to : $fileName" . PHP_EOL;

    }

}
