<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('v2.0.0')->namespace('Api')->name('api.v2.0.0')->group(function () {
    Route::get('version', function () {
        return '商城 api v2.0.0';
    })->name('version');

//    Route::post('payment/wechat/notify', 'PaymentsController@wechatNotify')
//        ->name('payment.wechat.notify');

    Route::middleware('throttle:' . config('api.rate_limits.sign'))
        ->group(function () {
            // 图片验证码
            Route::post('captchas', 'CaptchasController@store')
                ->name('captchas.store');
            // 短信验证码
            Route::post('verificationCodes', 'VerificationCodesController@store')
                ->name('verificationCodes.store');
            // 用户注册
            Route::post('users', 'UsersController@store')
                ->name('users.store');

            // 图片验证码登录
            Route::post('authorizations', 'AuthorizationsController@store')
                ->name('api.authorizations.store');

            // 短信登录
            Route::post('authorizations/sms', 'AuthorizationsController@smsStore')
                ->name('api.authorizations.sms.store');

            //短信密码重置
            Route::post('user/password','UsersController@retryPassword')
                ->name('user.password');

            // 刷新token
            Route::put('authorizations/current', 'AuthorizationsController@update')
                ->name('authorizations.update');

            // 删除token
            Route::delete('authorizations/current', 'AuthorizationsController@destroy')
                ->name('authorizations.destroy');
        });

    Route::middleware('throttle:' . config('api.rate_limits.access'))
        ->group(function () {
            // 登录后可以访问的接口
            // 分类列表
            Route::get('categories', 'CategoriesController@index')
                ->name('categories.index');

            Route::get('categories/{category}/goods','CategoriesController@goodIndex')
                ->name('goods.index');

            Route::get('goods/{good}', 'GoodsController@show')
                ->name('good.show');

            Route::get('ads','AdsController@index')
                ->name('ads.index');



            Route::middleware('auth:api')->group(function() {
                // 当前登录用户信息
                Route::get('me', 'UsersController@me')
                    ->name('user.show');
                //上传图片
                Route::post('images', 'ImagesController@store')
                    ->name('images.store');
                //更新用户信息
                Route::patch('me','UsersController@update')
                    ->name('user.update');

                Route::get('user_addresses','UserAddressesController@index')
                    ->name('user.addresses.index');

                Route::post('user_addresses','UserAddressesController@store')
                    ->name('user.addresses.store');

                Route::get('user_addresses/{user_address}','UserAddressesController@show')
                    ->name('user.address.show');

                Route::put('user_addresses/{user_address}','UserAddressesController@update')
                    ->name('user.address.update');

                Route::delete('user_addresses/{user_address}','UserAddressesController@destroy')
                    ->name('user.address.destroy');

                Route::get('user_address/default','UserAddressesController@defaultAddress')
                    ->name('user.default.address');

                Route::post('user_addresses/{user_address}/default','UserAddressesController@setDefault')
                    ->name('user.address.default');

                Route::post('cart','CartController@add')
                    ->name('cart.add');

                Route::get('cart','CartController@index')
                    ->name('cart.index');

                Route::get('cart/index','CartController@cartIndex')
                    ->name('cart.cart.index');

                Route::patch('cart/{good}','CartController@update')
                    ->name('cart.update');

                Route::delete('cart/{good}','CartController@destroy')
                    ->name('cart.destroy');

                Route::post('orders','OrdersController@store')
                    ->name('orders.store');

                Route::get('orders','OrdersController@index')
                    ->name('orders.index');

                Route::get('orders/{order}','OrdersController@show')
                    ->name('orders.show');

                Route::get('payment/{order}/wechat','PaymentsController@payByWechat')
                    ->name('payment.wechat');
            });
        });
});

