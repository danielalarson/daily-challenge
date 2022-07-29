<?php
namespace DataOutput;

/**
 * Class Execution
 * @package DataOutput
 */
class Execution
{

    /**
     * Executes a single function call and returns the milliseconds
     * value to run the specific function
     *
     * @param $function
     * @param mixed ...$args
     */
    public static function execute($function, ...$args)
    {
        $start = microtime(true);
        var_dump(call_user_func_array($function, $args));
        $final = round((microtime(true) - $start) * 1000, 5);
        echo "Execution time of <i>$function</i>: $final ms\n";
    }
}