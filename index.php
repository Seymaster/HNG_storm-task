<?php
error_reporting(E_ERROR | E_PARSE);

if ($handle = opendir('scripts')) {
    while (false !== ($entry = readdir($handle))) {
        //Remove back dot director
        if ($entry != "." && $entry != "..") {
            $ext = pathinfo($entry, PATHINFO_EXTENSION);
            switch ($ext) {
                case 'js':
                    ReadJs::initialized($entry);
                    break;
                case 'php':
                    ReadPhp::initialized($entry);
                    break;
                case 'py':
                    ReadPy::initialized($entry);
                    break;
                default:
                    echo 'There is an error reading file' . $entry;
            }
        }
    }
    closedir($handle);
}


class ReadPy {
    public static function initialized($file) {
        $file_content = file_get_contents('scripts/'.$file);
        echo $file_content . "<br>";
    }
}

class ReadJs {
    public static function initialized($file)
    {
        $file_content = file_get_contents('scripts/'.$file);
        echo $file_content . "<br>";
    }
}

class ReadPhp {
    public static function initialized($file) {
        $file = require ('scripts/'.$file);
        $file = file_get_contents($file);
        echo $file . "<br>";
    }
}
