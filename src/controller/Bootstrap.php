<?php

namespace linkphp\addons\controller;

class Bootstrap
{

    public function boot($plugin)
    {
        $plugin = 'addons\\' . $plugin . '\\Plugin' . ucfirst($plugin);
        return call_user_func([new $plugin, 'execute']);
    }

}