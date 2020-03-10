<?php

Route::post('payment/wechat/notify', 'ReturnsController@wechatNotify')
    ->name('payment.wechat.notify');
