<?php
namespace console\controllers;
use Yii;
use yii\console\Controller;
use common\components\rbac\UserRoleRule;
class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll(); //удаляем старые данные
        //Создадим для примера права для доступа к админке
        $dashboard = $auth->createPermission('dashboard');
        $dashboard->description = 'Dashboard';
        $auth->add($dashboard);
        //Включаем наш обработчик
        $rule = new UserRoleRule();
        $auth->add($rule);
        //Добавляем роли
        $user = $auth->createRole('user');
        $user->description = 'User';
        $user->ruleName = $rule->name;
        $auth->add($user);
        $moder = $auth->createRole('owner');
        $moder->description = 'Owner';
        $moder->ruleName = $rule->name;
        $auth->add($moder);
        //Добавляем потомков
        $auth->addChild($moder, $user);
        $admin = $auth->createRole('admin');
        $admin->description = 'Admin';
        $admin->ruleName = $rule->name;
        $auth->add($admin);
        $auth->addChild($admin, $moder);
        $auth->addChild($admin, $dashboard);
    }
}