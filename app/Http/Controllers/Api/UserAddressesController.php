<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\UserAddressRequest;
use App\Http\Resources\UserAddressResource;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class UserAddressesController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $addresses = $user->addresses;

        UserAddressResource::wrap('data');
        return new UserAddressResource($addresses);
    }

    public function store(UserAddressRequest $request)
    {
        $user = $request->user();

        UserAddress::create([
            'user_id' => $user->id,
            'province' => $request->province,
            'city' => $request->city,
            'district' => $request->district,
            'address' => $request->address,
            'zip' => $request->zip,
            'contact_name' => $request->contact_name,
            'contact_phone' => $request->contact_phone,
        ]);

        UserAddressResource::wrap('data');
        return new UserAddressResource($user->addresses);
    }

    public function show(UserAddress $user_address)
    {
       return new UserAddressResource($user_address);
    }

    public function update(UserAddress $user_address,UserAddressRequest $request)
    {
        $user_address->update($request->only([
            'province',
            'city',
            'district',
            'address',
            'zip',
            'contact_name',
            'contact_phone',
        ]));

        return new UserAddressResource($user_address);
    }

    public function destroy(UserAddress $user_address,Request $request)
    {
        $user_address->delete();
        return response(null,204);
    }
    


}
