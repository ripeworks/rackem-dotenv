<?php
namespace Rackem;

class Dotenv extends Middleware
{
    public function call($env)
    {
        if( file_exists(".env") ) {
            $file = file_get_contents(".env");
            $lines = preg_split('/\r\n|\r|\n/', $file);

            foreach($lines as $line) {
                if(empty($line) || strpos($line, '=') === false) continue;

                $line = trim(str_replace(array('export ', '\'', '"'), '', $line));

                list($k, $v) = explode('=', $line, 2);
                $env[$k] = $v;
            }
        }
        return $this->app->call($env);
    }
}
