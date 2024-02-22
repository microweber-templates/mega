<?php
$config = array();
$config['name'] = "Mega";
$config['author'] = "Bozhidar Slaveykov (Microweber)";
$config['version'] = '1.0';
$config['url'] = "http://microweber.com";
$config['standalone_module_skins'] = true;
$config['framework'] = "tailwind";


$config['settings'] = [];
$config['settings']['autoload_namespace'] = [
    [
        'path' => __DIR__ . '/src/',
        'namespace' => 'MicroweberPackages\Templates\Mega'
    ],
];

$config['settings']['service_provider'] = [
 //   \MicroweberPackages\Templates\Mega\Providers\MegaServiceProvider::class
];
