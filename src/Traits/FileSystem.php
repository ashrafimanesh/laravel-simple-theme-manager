<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/12/17
 * Time: 12:29 PM
 */

namespace Ashrafi\ThemeManager\Traits;


use Ashrafi\ThemeManager\Commands\InvalidThemeCommandArgumentException;
use Ashrafi\ThemeManager\Theme;

trait FileSystem
{


    /**
     * @param $name
     * @return array
     */
    protected function getResourcePath($name)
    {
        $themesPath = $this->getThemesPath();

        $resource_path = $themesPath . $name;
        return $resource_path;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function validateTheme($name)
    {
        $resource_path = $this->getResourcePath($name);

        $this->checkDuplicate($name);
        return $resource_path;
    }

    public function getThemes(){
        $themesPath=$this->getThemesPath();

        $dirs = scandir($themesPath);
        $themes=[];
        $call=function($themesPath,$themeName)use(&$themes){
            $themes[]=new Theme($themeName);
        };

        $this->analyseThemes($call);
        return $themes;
    }

    public function checkExist($name){
        $themes=$this->getThemes();

        foreach ($themes as $theme) {
            if ($theme->name == $name) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param $name
     * @throws InvalidThemeCommandArgumentException
     */
    protected function checkDuplicate($name)
    {
        if($this->checkExist($name)){
            throw (new InvalidThemeCommandArgumentException())->setCommand($this);
        }
        return false;
    }

    /**
     * @param $name
     * @return bool
     */
    public function save($name)
    {
        $resource_path=$this->getResourcePath($name);
        //create directory in resources/Themes/{$name}
        return mkdir($resource_path, 0777, true);
    }

    /**
     * @return string
     */
    protected function getThemesPath()
    {
        $themesPath = resource_path('views/Themes/');
        if(!is_dir($themesPath)){
            mkdir($themesPath,0777,true);
        }
        return $themesPath;
    }

    /**
     * @return null|Theme
     */
    public function getDefault(){

        $theme=null;
        $filename = config_path('theme.php');
        if(!file_exists($filename)){
            return $theme;
        }

        $data=include($filename);
        if(!isset($data['default'])){
            return $theme;
        }

        return new Theme($data['default']);
    }

    protected function analyseThemes(callable $call){
        $themesPath=$this->getThemesPath();
        $dirs = scandir($themesPath);
        foreach ($dirs as $dir) {
            if (!in_array($dir, ['.', '..']) && is_dir($themesPath . $dir)) {
                $call($themesPath,$dir);
            }
        }
    }

}
