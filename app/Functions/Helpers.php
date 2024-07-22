<?php

namespace App\Functions;

use InvalidArgumentException;

class Helpers
{
    public static  function getCsvData($filePath)
    {

        $csvData = [];
        $fileData = fopen($filePath, 'r');

        if ($fileData === false) {
            throw new InvalidArgumentException('File not Found , wrong path!');
        }
        while (($csvRow = fgetcsv($fileData)) != false) {
            $csvData[] = $csvRow;
        }
        fclose($fileData);
        return $csvData;
    }
}
