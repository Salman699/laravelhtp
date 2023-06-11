<?php

use PhpOffice\PhpSpreadsheet\IOFactory;

return [
    // ... konfigurasi lainnya ...

    'extension_detector' => [
        'xlsx'     => \PhpOffice\PhpSpreadsheet\IOFactory::class,
        'xlsm'     => \PhpOffice\PhpSpreadsheet\IOFactory::class,
        'xltx'     => \PhpOffice\PhpSpreadsheet\IOFactory::class,
        'xltm'     => \PhpOffice\PhpSpreadsheet\IOFactory::class,
        'xls'      => \PhpOffice\PhpSpreadsheet\IOFactory::class,
        'xlt'      => \PhpOffice\PhpSpreadsheet\IOFactory::class,
        'ods'      => \PhpOffice\PhpSpreadsheet\IOFactory::class,
        'ots'      => \PhpOffice\PhpSpreadsheet\IOFactory::class,
        'slk'      => \PhpOffice\PhpSpreadsheet\IOFactory::class,
        'xml'      => \PhpOffice\PhpSpreadsheet\IOFactory::class,
        'gnumeric' => \PhpOffice\PhpSpreadsheet\IOFactory::class,
        'htm'      => \PhpOffice\PhpSpreadsheet\IOFactory::class,
        'html'     => \PhpOffice\PhpSpreadsheet\IOFactory::class,
        'csv'      => \PhpOffice\PhpSpreadsheet\IOFactory::class,
        'tsv'      => \PhpOffice\PhpSpreadsheet\IOFactory::class,
        'pdf'      => \PhpOffice\PhpSpreadsheet\IOFactory::class,
    ],

    // ... konfigurasi lainnya ...
];
