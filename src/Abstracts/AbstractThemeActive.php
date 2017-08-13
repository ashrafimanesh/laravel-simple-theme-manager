<?php

namespace Ashrafi\ThemeManager\Abstracts;


use Ashrafi\ThemeManager\Commands\FileSystemCommand;
use Ashrafi\ThemeManager\Commands\InvalidThemeCommandArgumentException;
use Ashrafi\ThemeManager\Interfaces\CommandActiveInterface;
use Ashrafi\ThemeManager\Interfaces\CommandCreateInterface;

abstract class AbstractThemeActive extends FileSystemCommand implements CommandActiveInterface
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'theme:active
                            {--name= : Theme name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set default theme. Example= theme:active {--name= : Theme name}';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name=$this->option('name');
        if(!$name){
            throw (new InvalidThemeCommandArgumentException())->setCommand($this);
        }
        $this->active($name);
    }
}
