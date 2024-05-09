<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2024/5/9
 * Time: 17:30
 */

namespace Zsymv\Wmsoft\server;


use Zsymv\Wmsoft\wm\Wm;

class Application
{
    /**
     * object container
     * @var array
     */
    static public $container = array();

    /**
     * Application constructor.
     * @param array $config
     */
    public function __construct($config = array())
    {
        foreach ($config as $key => $value) {
            Wm::$app->$key = $value;

            if ($key == 'time_zone') {
                $this->setTimeZone($value);
            }
        }
    }

    /**
     * 设置时区
     * @param $value
     */
    public function setTimeZone($value)
    {
        date_default_timezone_set($value);
    }

    /**
     * init
     */
    public function init()
    {

    }


    /**
     * run
     */
    public function run()
    {

    }

}