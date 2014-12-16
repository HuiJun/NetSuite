<?php

function extract_classes($filename)
{
    if (!file_exists($filename)) {
        throw new RuntimeException("The file $filename does not exist");
    }

    $tokens = token_get_all(file_get_contents($filename));

    $found_classes = [];

    for ($i = 0, $z = count($tokens); $i < $z; $i++) {
        if (is_array($tokens[$i]) && token_name($tokens[$i][0]) === 'T_CLASS') {
            $class_index = $i;
            $depth       = 0;
            $class_name  = null;
            while ($i++) {
                $token = $tokens[$i];
                if (is_null($class_name) && is_array($token) && token_name($token[0]) === 'T_STRING') {
                    $class_name = $token[1];
                } elseif ($tokens[$i] === "{") {
                    $depth++;
                } elseif ($tokens[$i] === "}") {
                    $depth--;
                    if ($depth === 0) {
                        if (isset($class_name)) {
                            $found_classes[$class_name] = array_slice($tokens, $class_index, ($i - $class_index) + 1);
                        } else {
                            $found_classes[] = array_slice($tokens, $class_index, ($i - $class_index) + 1);
                        }
                        break;
                    }
                }
            }
        }
    }

    return $found_classes;
}

function get_constructor_args($tokens)
{
    for ($i = 0; $i < count($tokens); $i++) {
        $token = $tokens[$i];
        if (is_array($token) && strtolower($token[1]) === '__construct') {

            $start = 0;
            while ($i++) {
                $token = $tokens[$i];
                if ($tokens[$i] === '(') {
                    $start = $i + 1;
                } elseif ($tokens[$i] === ')') {
                    print_r($tokens[$start]);
                    print_r($tokens[$i]);
                    return implode("", array_map(function ($a)
                    {
                        if (is_string($a)) {
                            return $a;
                        }

                        return $a[1];
                    }, array_slice($tokens, $start, $i - $start)));
                }
            }
        }
    }

    return "";
}

function add_function($class_tokens)
{
    $ret = [];
    foreach ($class_tokens as $class_name => $class_token) {
        $constructor_args = get_constructor_args($class_token);
        $function_string = <<<EOQ
    public static function create($constructor_args)
    {
        return new static($constructor_args);
    }

EOQ;
        array_splice($class_token, count($class_token) - 1, 0, $function_string);
        $ret[$class_name] = token_to_class($class_token) . "\n";
    }

    return $ret;
}

function token_to_class($class_tokens)
{
    return array_reduce($class_tokens, function ($a, $b)
    {
        if (is_string($b)) {
            $a .= $b;
        } else {
            $a .= $b[1];
        }

        return $a;
    }, "");
}

 