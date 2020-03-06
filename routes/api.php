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
            Route::middleware('auth:api')->group(function() {
                // 当前登录用户信息
                Route::get('me', 'UsersController@me')
                    ->name('user.show');
            });
        });
});

