<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/12/17
 * Time: 12:40 PM
 */

namespace Ashrafi\ThemeManager\Interfaces;


use Ashrafi\ThemeManager\Theme;

interface StoreDriverInterFace
{
    function save($name);

    function checkExist($name);

    function validateTheme($name);

    function getThemes();

    function getDefault();

}
