<?php namespace Adrian\Arrivallogger;

use Backend;
use System\Classes\PluginBase;
use RainLab\User\Models\User;

/**
 * Arrivallogger Plugin Information File
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
            'name'        => 'Arrivallogger',
            'description' => 'No description provided yet...',
            'author'      => 'Adrian',
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
        User::extend(function($model){
            $model->hasMany['arrivallogger'] = ['Adrian\Arrivallogger\Models\Arrivallogger'];
        });
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Adrian\Arrivallogger\Components\MyComponent' => 'myComponent',
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
            'adrian.arrivallogger.some_permission' => [
                'tab' => 'Arrivallogger',
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
        // return []; // Remove this line to activate

        return [
            'arrivallogger' => [
                'label'       => 'Arrivallogger',
                'url'         => Backend::url('adrian/arrivallogger/arrivallogger'),
                'icon'        => 'icon-leaf',
                'permissions' => ['adrian.arrivallogger.*'],
                'order'       => 500,
            ],
        ];
    }
}
