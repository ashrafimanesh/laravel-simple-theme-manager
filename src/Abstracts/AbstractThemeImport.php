<?php

namespace Ashrafi\ThemeManager\Abstracts;


use Ashrafi\ThemeManager\Commands\FileSystemCommand;
use Ashrafi\ThemeManager\Interfaces\CommandCreateInterface;
use Ashrafi\ThemeManager\Interfaces\CommandImportInterface;

abstract class AbstractThemeImport extends FileSystemCommand implements CommandImportInterface
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'theme:import 
                            {name}
                            {--source= : Your theme zip file';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create theme in resources/Themes/{$name} directory from source. example= theme:import {--name= : Theme name} {--source= : Your theme zip file';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name=$this->argument('name');
        if(!$name){
            throw (new InvalidThemeCommandArgumentException('Set --name option'))->setCommand($this);
        }
        $source=$this->option('source');
        if(!$source){
            throw (new InvalidThemeCommandArgumentException('Set --source option'))->setCommand($this);
        }
        $this->import($name,$source);
    }
}
