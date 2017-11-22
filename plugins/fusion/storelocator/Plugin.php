<?php namespace Fusion\StoreLocator;

use Backend;
use System\Classes\PluginBase;

/**
 * StoreLocator Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'StoreLocator',
            'description' => 'Store locations shown on map from the webservice result',
            'author'      => 'Ram Gopinath',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'Fusion\StoreLocator\Components\Location' => 'locationList',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'fusion.storelocator.some_permission' => [
                'tab' => 'StoreLocator',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'storelocator' => [
                'label'       => 'StoreLocator',
                'url'         => Backend::url('fusion/storelocator/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['fusion.storelocator.*'],
                'order'       => 500,
            ],
        ];
    }

}
