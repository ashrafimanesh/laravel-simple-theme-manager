<?php

namespace Ashrafi\ThemeManager\Abstracts;


use Ashrafi\ThemeManager\Commands\FileSystemCommand;
use Ashrafi\ThemeManager\Commands\InvalidThemeCommandArgumentException;
use Ashrafi\ThemeManager\Interfaces\CommandActiveInterface;
use Ashrafi\ThemeManager\Interfaces\CommandCreateInterface;

abstract class AbstractThemeDefault extends FileSystemCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'theme:default';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Return default theme';
}
