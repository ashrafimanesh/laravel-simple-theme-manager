<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/12/17
 * Time: 10:59 AM
 */

namespace Ashrafi\ThemeManager\Interfaces;


interface CommandImportInterface extends CommandInterface
{

    public function import($name,$source);

}