<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/12/17
 * Time: 11:00 AM
 */

namespace Ashrafi\ThemeManager\Interfaces;


interface CommandActiveInterface extends CommandInterface
{
    public function active($name);
}