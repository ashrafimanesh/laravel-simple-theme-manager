<?php
/**
 * Created by PhpStorm.
 * User: ashrafimanesh@gmail.com
 * Date: 8/12/17
 * Time: 10:31 AM
 */

namespace Ashrafi\ThemeManager\Commands;


use Ashrafi\ThemeManager\Interfaces\CommandInterface;
use Ashrafi\ThemeManager\Interfaces\StoreDriverInterFace;
use Ashrafi\ThemeManager\Traits\FileSystem;
use Illuminate\Console\Command;

abstract class FileSystemCommand extends Command implements CommandInterface,StoreDriverInterFace
{
    use FileSystem;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
}