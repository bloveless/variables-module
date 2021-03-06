<?php namespace Anomaly\VariablesModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class VariablesModuleServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\VariablesModule
 */
class VariablesModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Plugins provided by the addon.
     *
     * @var array
     */
    protected $plugins = [
        'Anomaly\VariablesModule\Variable\VariablePlugin'
    ];

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/variables'             => 'Anomaly\VariablesModule\Http\Controller\Admin\VariablesController@index',
        'admin/variables/choose'      => 'Anomaly\VariablesModule\Http\Controller\Admin\VariablesController@choose',
        'admin/variables/create'      => 'Anomaly\VariablesModule\Http\Controller\Admin\VariablesController@create',
        'admin/variables/edit/{id}'   => 'Anomaly\VariablesModule\Http\Controller\Admin\VariablesController@edit',
        'admin/variables/set/{field}' => 'Anomaly\VariablesModule\Http\Controller\Admin\VariablesController@set'
    ];

    /**
     * The singleton bindings.
     *
     * @var array
     */
    protected $singletons = [
        'Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface' => 'Anomaly\VariablesModule\Variable\VariableRepository'
    ];

}
