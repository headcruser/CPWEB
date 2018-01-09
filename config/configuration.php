<?php
$data=__loader(CONFIG.'database.json');
define('DB', $data['database']);

/**
 * Reader Configuration
 */
function __loader(string $pathFile):array
{
    if (!existFile($pathFile)) {
        throw new Exception("File: ".$pathFile." not Exist");
    }

    $data = json_decode(file_get_contents($pathFile), true);
    return $data;
}

function existFile(string $file):bool
{
    return file_exists($file);
}
