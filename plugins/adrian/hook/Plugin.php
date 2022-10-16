<?php namespace Adrian\Hook;

use Event;
use Backend;
use System\Classes\PluginBase;


/**
 * Hook Plugin Information File
 */
class Plugin extends PluginBase
{

    public $require = ['Adrian.Arrivallogger'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Hook',
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


        Event::listen('backend.form.extendFields', function($widget) {
            // Only apply this listener when the Users controller is being used
            if (!$widget->getController() instanceof \Adrian\Arrivallogger\Controllers\Arrivallogger) {
                return;
            }

            // Only apply this listener when the User model is being modified
            if (!$widget->model instanceof \Adrian\Arrivallogger\Models\Arrivallogger) {
                return;
            }

            // Only apply this listener when the Form widget in question is a root-level
            // Form widget (not a repeater, nestedform, etc)
            if ($widget->isNested) {
                return;
            }

            // Add an extra birthday field
            $widget->addFields([
                'desc' => [
                    'label' => 'Desc',
                    'type' => 'textarea',
                ],
                'skills' => [
                    'label' => 'Skills',
                    'type' => 'textarea',
                ],
            ]);
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
            'Adrian\Hook\Components\MyComponent' => 'myComponent',
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
            'adrian.hook.some_permission' => [
                'tab' => 'Hook',
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
            'hook' => [
                'label'       => 'Hook',
                'url'         => Backend::url('adrian/hook/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['adrian.hook.*'],
                'order'       => 500,
            ],
        ];
    }
}
