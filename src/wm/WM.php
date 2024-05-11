<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2024/5/9
 * Time: 16:42
 */

namespace Zsymv\Wmsoft\wm;


class WM
{
    public static $app;

    public function __construct()
    {
        if (!self::$app) {
            self::$app = $this;
        }
    }

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {

        // TODO: Implement __get() method.
        if (isset(self::$app->components) && isset(self::$app->components[$name]) && !isset(WM::$app->$name)) {
            self::$app->$name = $this->create_object(self::$app->components[$name]);

            return self::$app->$name;
        }
    }


    /**
     * Creating object method
     * @param $arr
     * @return mixed
     */
    public function create_object($arr)
    {
        $class = $arr['class'];
        return new $class($arr);
    }

}

new WM();