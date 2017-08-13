<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/12/17
 * Time: 10:50 AM
 */

namespace Ashrafi\ThemeManager\Interfaces;


interface CommandCreateInterface extends CommandInterface
{
    public function create($name);

}