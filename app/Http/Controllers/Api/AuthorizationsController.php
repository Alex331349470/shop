<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\AuthCaptchaReuqest;
use App\Http\Requests\Api\AuthVerificationCodeReuqest;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class AuthorizationsController extends Controller
{
    public function store(AuthCaptchaReuqest $request)
    {
        $captchaData = \Cache::get($request->captcha_key);

        if (!$captchaData) {
            abort(403, '图片验证码已失效');
        }

        if (!hash_equals($captchaData['code'], $request->captcha_code)) {
            // 验证错误就清除缓存
            \Cache::forget($request->captcha_key);
            throw new AuthenticationException('验证码错误');
        }

        $username = $request->username;

        if (is_numeric($username)){
            $credentials['phone'] = $username;
        } else {
            $credentials['name'] = $username;
        }

        $credentials['password'] = $request->password;

        if (!$token = \Auth::guard('api')->attempt($credentials)) {
            throw new AuthenticationException('用户名或密码错误');
        }

        return $this->respondWithToken($token)->setStatusCode(201);
    }

    public function smsStore(AuthVerificationCodeReuqest $request)
    {
        $verifyData = \Cache::get($request->verification_key);

        if (!$verifyData){
            abort(403,'验证码失效');
        }

        if (!hash_equals($verifyData['code'],$request->verification_code)){
            throw new AuthenticationException('验证码不正确');
        }

        if (!hash_equals($verifyData['phone'],$request->phone)){
            throw new AuthenticationException('手机号错误');
        }
        $credentials['phone'] = $request->phone;

        if (!$token = \Auth::guard('api')->attempt($credentials)) {
            throw new AuthenticationException('手机号错误');
        }

        return $this->respondWithToken($token)->setStatusCode(201);
    }

    public function update()
    {
        $token = auth('api')->refresh();
        return $this->respondWithToken($token);
    }

    public function destroy()
    {
        auth('api')->logout();
        return response(null, 204);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
