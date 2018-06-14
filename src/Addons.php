<?php

namespace linkphp\addons;

abstract class Addons
{

    /**
     * 插件信息
     */
    protected $info = [
        'name'          => 'Test',
        'title'         => '测试插件',
        'description'   => '用于thinkphp5的插件扩展演示',
        'status'        => 1,
        'author'        => 'byron sampson',
        'version'       => '0.1'
    ];

    /**
     * 检查配置信息是否完整
     * @return bool
     */
    final public function checkInfo()
    {
        $info_check_keys = array('name','title','description','status','author','version');
        foreach ($info_check_keys as $value) {
            if(!array_key_exists($value, $this->info))
                return false;
        }
        return true;
    }

    /**
     * 获取插件的配置数组
     */
    final public function getConfig($name = '')
    {
    }

    /**
     * 插件安装方法
     */
    abstract public function install();

    /**
     * 插件卸载方法
     */
    abstract public function uninstall();

}