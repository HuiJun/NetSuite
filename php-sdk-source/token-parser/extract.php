<?php

ini_set('display_errors', true);
ini_set('memory_limit', '1024M');

require_once __DIR__ . '/functions.php';
$command = $argv[1];

switch (strtolower($command)) {

    case 'extract-classes':

        $single_file = true;
        $source_file = __DIR__ . '/../PHP_Toolkit/NetSuiteService.php';
        //$source_file = __DIR__ . '/example.php';
        $single_class_file_name = __DIR__ . '/classes/' . basename($source_file, '.php') . '.classes.php';

        $classes = add_function(extract_classes($source_file));

        if (!is_dir('classes')) {
            mkdir('classes');
        }

        if ($single_file) {
            $file = new SplFileObject($single_class_file_name, 'w');
            $file->fwrite("<?php\n\n");
            foreach ($classes as $class_string) {
                $file->fwrite($class_string);
                $file->fwrite("\n");
            }
        } else {
            foreach ($classes as $class_name => $class_string) {
                $filename = __DIR__ . '/classes/' . $class_name . '.php';
                $file     = new SplFileObject($filename, 'w');
                $file->fwrite("<?php\n\n");
                $file->fwrite($class_string);
            }
        }
        break;

    case 'generate-includes':
        echo "generate-includes".PHP_EOL;
        $source_file = __DIR__ . '/../PHP_Toolkit/NetSuiteService.php';
        $classes     = extract_classes($source_file);
        $writer = new SplFileObject(__DIR__ . '/classes/includes.php', 'w');
        $writer->fwrite("<?php\n\n");
        foreach (array_keys($classes) as $className) {
            echo "Writing include for $className" . PHP_EOL;
            $writer->fwrite("require_once __DIR__ . '/classes/{$className}.php';\n");
        }
        $writer->fwrite("\n");
        break;
    case 'generate-namespace':
        echo "generate-namespace".PHP_EOL;
        $source_file = __DIR__ . '/../PHP_Toolkit/NetSuiteService.php';
        $classes     = extract_classes($source_file);
        $writer = new SplFileObject(__DIR__ . '/classes/namespace.php', 'w');
        $writer->fwrite("<?php\n\n");
        foreach (array_keys($classes) as $className) {
            echo "Writing include for $className" . PHP_EOL;
            $writer->fwrite("use fbsg_NetSuite\NetSuiteToolkit\\{$className};\n");
        }
        $writer->fwrite("\n");
        break;
}
