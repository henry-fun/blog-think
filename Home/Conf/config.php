<?php
return array(
    /**
    * 配置数据库
    *
    */
    'DB_TYPE'   => 'mysql',
    'DB_HOST'   => 'localhost',
    'DB_NAME'   => 'blog',
    'DB_USER'   => 'root',
    'DB_PWD'    => '123456',
    'DB_PORT'   => '3307',
    'DB_PREFIX' => 'blog_',
 
	/**
	 * 启用前后端分开的模块分组模式
	 * 关于模块分组详见API——“5.控制器/模块分组” 
	 * 关于本次项目的分组模式应用了3.1.2的最新分组模式——独立分组，详见http://www.thinkphp.cn/info/177.html
	 */
    // 开启项目分组模式
    'APP_GROUP_LIST' => 'Home,Admin',
    // 设置默认分组
    'DEFAULT_GROUP'  => 'Home',
    // 0,为以前版本的普通分组模式，1位独立分组模式
    'APP_GROUP_MODE' => 1,
    // 独立分组目录(默认分组目录就为Modules)
    'APP_GROUP_PATH' => 'Modules',
);
?>