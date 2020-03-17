<?php

Route::post('payment/wechat/notify', 'ReturnsController@wechatNotify')
    ->name('payment.wechat.notify');

Route::post('payment/alipay/notify', 'ReturnsController@alipayNotify')
    ->name('payment.alipay.notify');

