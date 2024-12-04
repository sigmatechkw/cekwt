<?php

namespace Botble\Theme\Commands\Traits;

use Botble\Theme\Facades\Theme;

trait ThemeTrait
{
    protected function getPath(?string $path = null, ?string $theme = null): string
    {
        $rootPath = theme_path();

        if (! $theme) {
            $theme = $this->getTheme();
        }

        return rtrim($rootPath, '/') . '/' . rtrim(ltrim(strtolower($theme), '/'), '/') . '/' . $path;
    }

    protected function getTheme(): string
    {
        if ($this->hasArgument('name')) {
            return strtolower($this->argument('name'));
        }

        return Theme::getThemeName();
    }
}