<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/12/17
 * Time: 11:05 AM
 */

namespace Ashrafi\ThemeManager\Commands;


class InvalidThemeCommandArgumentException extends \Exception
{
    protected $command;
    public function setCommand($command){
        $this->command=$command;
        return $this;
    }

    public function getCommand(){
        return $this->command;
    }
}