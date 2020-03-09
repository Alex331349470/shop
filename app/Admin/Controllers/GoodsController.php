<?php

namespace App\Admin\Controllers;

use App\Models\Good;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class GoodsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '商品';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Good);

        $grid->id('ID')->sortable();
        $grid->title('商品名称');
        $grid->description('商品描述');
        $grid->art('艺术家');
        $grid->time('创作时间');
        $grid->size('尺寸');
        $grid->quality('材质');
        $grid->on_sale('已上架')->display(function ($value){
            return $value ? '是' : '否';
        });
        $grid->type('类型');
        $grid->style('风格');
        $grid->discount('折扣');
        $grid->content('商品介绍');
        $grid->price('价格');
        $grid->rating('评分');
        $grid->stock('库存');
        $grid->sold_count('销量');
        $grid->review_count('评论数');
        $grid->actions(function ($actions) {
            $actions->disableView();
            $actions->disableDelete();
        });
        $grid->tools(function ($tools) {
            // 禁用批量删除按钮
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
        });


        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Good::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('art', __('Art'));
        $show->field('time', __('Time'));
        $show->field('size', __('Size'));
        $show->field('quality', __('Quality'));
        $show->field('on_sale', __('On sale'));
        $show->field('type', __('Type'));
        $show->field('style', __('Style'));
        $show->field('discount', __('Discount'));
        $show->field('content', __('Content'));
        $show->field('price', __('Price'));
        $show->field('rating', __('Rating'));
        $show->field('stock', __('Stock'));
        $show->field('sold_count', __('Sold count'));
        $show->field('review_count', __('Review count'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Good);

        $form->text('title', __('Title'));
        $form->text('description', __('Description'));
        $form->text('art', __('Art'));
        $form->text('time', __('Time'));
        $form->text('size', __('Size'));
        $form->text('quality', __('Quality'));
        $form->switch('on_sale', __('On sale'))->default(1);
        $form->text('type', __('Type'));
        $form->text('style', __('Style'));
        $form->decimal('discount', __('Discount'));
        $form->textarea('content', __('Content'));
        $form->decimal('price', __('Price'));
        $form->decimal('rating', __('Rating'))->default(5.00);
        $form->number('stock', __('Stock'));
        $form->number('sold_count', __('Sold count'));
        $form->number('review_count', __('Review count'));

        return $form;
    }
}
