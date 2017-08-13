<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/12/17
 * Time: 11:11 AM
 */

namespace Ashrafi\ThemeManager\Commands;


use Ashrafi\ThemeManager\Abstracts\AbstractThemeActive;

class ThemeActive extends AbstractThemeActive
{

    public function active($name)
    {
        $this->setDefault($name);

        $this->info('Success action');
    }
}