<?php

namespace Michielkempen\NovaResourceGroups;

use Illuminate\View\View;
use Laravel\Nova\Tool;

class NovaResourceGroups extends Tool
{
    /**
     * @var string
     */
    private $groupName;

    /**
     * @var array
     */
    private $resources;

    /**
     * @var View|null
     */
    private $icon;

    /**
     * ResourceGroups constructor.
     * @param string $groupName
     * @param array $resources
     * @param View $icon
     */
    public function __construct(string $groupName, array $resources, View $icon = null)
    {
        parent::__construct();
        $this->groupName = $groupName;
        $this->resources = $resources;
        $this->icon = $icon;
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('nova-resource-groups::navigation', [
            'groupName' => $this->groupName,
            'resources' => $this->resources,
            'icon' => $this->icon,
        ]);
    }
}
