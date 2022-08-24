<?php

namespace JustBetter\NovaLinks\Tests;

use Illuminate\Http\Request;
use JustBetter\NovaLinks\LinksTool;
use Laravel\Nova\Menu\MenuItem;

class LinksToolTest extends TestCase
{
    /** @test */
    public function it_can_create_a_links_menu_item(): void
    {
        $links = new LinksTool('::name::', '::icon::', [
            '::link::' => '::url::',
        ]);

        /** @var Request $request */
        $request = app(Request::class);

        $menu = $links->menu($request);

        $this->assertEquals('::name::', $menu->name);
        $this->assertEquals('::icon::', $menu->icon);

        $this->assertEquals(1, $menu->items->count());

        /** @var MenuItem $menuItem */
        $menuItem = $menu->items->first();

        $this->assertEquals('::link::', $menuItem->name);
        $this->assertEquals('::url::', $menuItem->path);
        $this->assertTrue($menuItem->external);
    }
}
