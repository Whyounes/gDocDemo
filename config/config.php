<?php

use RAFIE\Configuration;
use Symfony\Component\Finder\Finder;

$dir = __DIR__ . '/../docs';

$finder = Finder::create()->files()->in($dir);

$versions = RAFIE\Version\GitVersionCollection::create($dir)
    ->add('master', 'Master')
    ->add('5.0', '5.0')
    ->add('4.2', '4.2');

$options = [
    'theme'       => 'laravel',
    'build_path'  => __DIR__ . '/../build/%version%',
    'versions'    => $versions,
    'themesPaths' => [__DIR__ . '/../gDocThemes/themes/'],
    //'parser'      => '\\RAFIE\\Parser\\MarkdownParser'
];

// the documentation file can also be under version control, I'm using it this way because i'm using the Laravel doc repo as a submodule
$docConf = $dir . '/../doc.yml';

return new Configuration($finder, $docConf, $options);
