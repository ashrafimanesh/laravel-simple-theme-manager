<?php

namespace Ashrafi\ThemeManager\Abstracts;


use Ashrafi\ThemeManager\Commands\FileSystemCommand;
use Ashrafi\ThemeManager\Commands\InvalidThemeCommandArgumentException;
use Ashrafi\ThemeManager\Interfaces\CommandCreateInterface;

abstract class AbstractThemeCreate extends FileSystemCommand implements CommandCreateInterface
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'theme:create
                            {--name= : Theme name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create theme in resources/Themes/{$name} directory. Example= theme:create {--name= : Theme name}';

    /**
     * @throws InvalidThemeCommandArgumentException
     */
    public function handle()
    {
        $name=$this->option('name');
        if(!$name){
            throw (new InvalidThemeCommandArgumentException())->setCommand($this);
        }
        $this->create($name);
    }
}
