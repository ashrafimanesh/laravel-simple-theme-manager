<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/12/17
 * Time: 2:33 PM
 */

namespace Ashrafi\ThemeManager\Commands;


use Ashrafi\ThemeManager\Abstracts\AbstractThemeList;

class ThemeList extends AbstractThemeList
{

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info(print_r($this->getThemes()));
    }

}