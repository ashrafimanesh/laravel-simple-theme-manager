<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/12/17
 * Time: 11:01 AM
 */

namespace Ashrafi\ThemeManager\Commands;


use Ashrafi\ThemeManager\Abstracts\AbstractThemeCreate;

class ThemeCreate extends AbstractThemeCreate
{

    public function create($name)
    {
        $this->validateTheme($name);

        $result = $this->save($name);
        if($result){
            $this->info('Success action');
        }
        else{
            $this->error('Error on create theme!');
        }
    }
}