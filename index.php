<?php
include "process.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Exporter</title>
</head>

<body>
<div class='main'>
    <h1>Exporter With OOP</h1>
    <form action="" method="POST">
        <input type="text" name="title" placeholder="Title Here">
        <textarea name="content" placeholder="Content Here" style="height: 450px"></textarea>
        <select name="format">
            <option value="Text">Text File</option>
            <option value="Pdf">Pdf Format</option>
            <option value="Json">Json File</option>
        </select>
        <button type='submit'>Export to File</button>
    </form>
</div>
</body>

</html>