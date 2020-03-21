<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Good;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Monolog\Handler\IFTTTHandler;

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
        $grid->on_sale('已上架')->display(function ($value) {
            return $value ? '是' : '否';
        });
        $grid->type('类型');
        $grid->style('风格');
        $grid->weight('净重');
        $grid->unit('单位');
        $grid->good_no('商品编号');
        $grid->brand('商品品牌');
        $grid->discount('折扣');
        $grid->price('价格');
        $grid->rating('评分');
        $grid->stock('库存');
        $grid->sold_count('销量');
        $grid->review_count('评论数');
        $grid->actions(function ($actions) {
            $actions->disableView();
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
        $show->field('weight',__('weight'));
        $show->field('unit',__('Good unit'));
        $show->field('good_no',__('Good no'));
        $show->field('brand',__('Brand'));
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

        $form->text('title', '商品名称')->rules('required');
        $form->text('description', '商品描述');
        $form->text('art', '艺术家');
        $form->text('time', '创作时间(xxxx-xx-xx)');
        $form->text('size', '尺寸')->rules('required');
        $form->text('quality', '材质')->rules('required');
        $form->radio('on_sale', '上架')->options(['1' => '是', '0' => '否'])->default(1);
        $form->text('type', '类型')->rules('required');
        $form->text('style', '风格');
        $form->decimal('weight','净重')->default(0);
        $form->text('unit','单位')->default('g');
        $form->text('good_no','商品编号');
        $form->text('brand','商品品牌');
        $form->text('theme', '题材');
        $form->decimal('discount', '折扣')->default(1);
        $form->quill('content', '商品介绍');
        $form->decimal('price', '市场价格')->default(0);
        $form->decimal('rating', '评分')->default(5.00);
        $form->number('stock', '库存')->default(0);
        $form->number('sold_count', '销量')->default(0);
        $form->number('review_count', '评论数')->default(0);
        $form->select('category_id', '分类')->options(Category::getSelectOptions());

        $form->hasMany('images', '图片列表', function (Form\NestedForm $form) {
            $form->text('description', '图片描述');
            $form->image('image', '产品图片')->rules('image');
        });
        return $form;
    }


}
