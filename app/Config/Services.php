<?php

namespace Config;

use CodeIgniter\Config\BaseService;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This file holds any application-specific services, or service overrides
 * that you might need. An example has been included with the general
 * method format you should use for your service methods. For more examples,
 * see the core Services file at system/Config/Services.php.
 */
class Services extends BaseService
{
    // 白名单里的uri不认证
    public const jwt_white_list = [
        'swagger/get',
        'auth/login/post',
        '/sys/user/login/post',
        '/sys/user/logout/post',
        '/sys/user/refreshtoken/post', // 刷新token接口需要在控制器内作权限验证,比较特殊
        '/sys/user/githubauth/get', // github认证免授权
        '/sys/user/giteeauth/get', // gitee码云认证免授权
        '/sys/user/corpauth/get', // wecom认证免授权
        '/sys/user/wecombinding/put', //綁定wecom_id
        // 下面接口uri 可以在菜单权限里面添加,再分配给对应角色即可, 方便/安全?
        // 如果不想在前端菜单里添加,也可以直接在后端在控制器里单独做token验证,不用做权限认证
        // 参考/sys/user/refreshtoken
        '/sys/user/info/get',
        '/sys/user/list/get',
        '/sys/user/getroleoptions/get',
        '/sys/user/getdeptoptions/get',
        '/sys/user/password/put',
        '/sys/role/allroles/get',
        '/sys/role/allmenus/get',
        '/sys/role/alldepts/get',
        '/sys/role/rolemenu/post',
        '/sys/role/rolerole/post',
        '/sys/role/roledept/post',
        '/sys/menu/treeoptions/get',

        // 以下均为测试接口        
        '/testapi/get',



        '/uploadimg/goods/get',
        '/uploadimg/upload/post',
        //  '/sys/user/testapi/get', // 测试api接口不认证 http://cirest.com:8890/api/v2/sys/user/testapi         uri_string => api/v2/sys/user/testapi
        '/sys/log/dbrestore/post',
    ];
    /*
     * public static function example($getShared = true)
     * {
     *     if ($getShared) {
     *         return static::getSharedInstance('example');
     *     }
     *
     *     return new \CodeIgniter\Example();
     * }
     */
    public static function getSecretKey()
    {
        return getenv('JWT_SECRET_KEY');
    }
}
