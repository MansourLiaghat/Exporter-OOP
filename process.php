<?php

include_once __DIR__ . "/autoloader.php";

# validate request
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    return;
}

# validate data
[$title, $content, $format] = [$_POST['title'], $_POST['content'], $_POST['format']];
$whiteList = ['Text', 'Pdf', 'Json'];

if (!in_array($format, $whiteList)) {
    echo "invalid format";
    return;
}

$className = "\Export\\{$format}Exporter";

try {
    if (class_exists($className)) {
        $obj = new $className(["title" => $title, "content" => $content]);
        $obj->export();
    }else{
        throw new Exception("not found $className");
    }

} catch (Exception $e) {
    echo "error : " . $e->getMessage() . PHP_EOL;
}

