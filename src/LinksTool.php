<?php

namespace JustBetter\NovaLinks;

use Illuminate\Http\Request;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Tool;

class LinksTool extends Tool
{
    /**
     * @param  array<string, string|MenuItem>  $links
     */
    public function __construct(
        protected string $name = 'Links',
        protected string $icon = 'link',
        protected array $links = []
    ) {
        parent::__construct();
    }

    public function menu(Request $request): MenuSection
    {
        $items = collect($this->links)
            ->map(function (string|MenuItem $path, string $name): MenuItem {
                return $path instanceof MenuItem
                    ? $path
                    : MenuItem::make($name)->path($path)->external();
            })
            ->toArray();

        return MenuSection::make($this->name, $items)
            ->icon($this->icon)
            ->collapsable();
    }
}
