<?php

$options = getopt('',
                  array(
                      'command:',
                      'args:'
                  ));

switch (strtolower($options['command'])) {

case 'generate-includes':
    $args        = explode(',', $options['args']);
    $includeFile = isset($args[0]) ? $args[0] : __DIR__ . '/token-parser/PHP_Toolkit_Fixed/includes.php';
    $directory   = __DIR__ . '/token-parser/PHP_Toolkit_Fixed/classes';
    $iter        = new FilesystemIterator($directory);
    $includeFile = new SplFileObject($includeFile, 'w');

    $includeFile->fwrite("<?php\n\n");

    /** @type SplFileInfo $file */
    foreach ($iter as $file) {
        echo "Requiring file " . $file->getBasename('.php') . PHP_EOL;
        $includeFile->fwrite("require_once __DIR__ . '/classes/{$file->getBasename()}';\n");
    }
    $includeFile->fwrite("\n");

    break;

}
