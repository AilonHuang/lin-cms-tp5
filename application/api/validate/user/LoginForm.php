<?php
/**
 * Created by PhpStorm.
 * User: 沁塵
 * Date: 2019/4/28
 * Time: 21:38
 */

namespace app\api\validate\user;


use app\api\validate\BaseValidate;

class LoginForm extends BaseValidate
{
    protected $rule = [
        'nickname' => 'require',
        'password' => 'require',
    ];

    protected $message = [
        'nickname' => '用户名不能为空',
        'password' => '密码不能为空'
    ];
}