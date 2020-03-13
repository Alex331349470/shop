<?php

namespace App\Admin\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UsersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '用户';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User);

        $grid->id('id');
        $grid->name('姓名');
        $grid->phone('手机号');
        $grid->column('性别')->display(function (){
            $userInfo = UserInfo::query()->where('user_id',$this->id)->first();
            if ($userInfo) {
                return $userInfo->gender ? '男' : '女';
            }
        });
        $grid->created_at('注册时间');
        $grid->disableCreateButton();
        $grid->disableActions();

        $grid->tools(function ($tools) {

            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
        });
        return $grid;
    }
}
