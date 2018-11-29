<?php

namespace linkphp\addons\controller;

class Bootstrap
{

    public function boot($plugin)
    {
        app()->get(\linkphp\loader\Loader::class)->addNamespacePsr4('addons\\', ROOT_PATH . 'src/addons');
        $plugin = 'addons\\' . $plugin . '\\Plugin' . ucfirst($plugin);
        return call_user_func([new $plugin, 'execute']);
    }

}