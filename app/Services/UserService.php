<?php


namespace App\Services;


use App\Models\User;

class UserService
{
    public static function create(array $data) {
        (new UserService)->verifyCreateStruct($data);
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        return $user;
    }

    public function verifyCreateStruct(array $data){
        $existables = collect([
            'first_name',
            'last_name',
            'other_names',
            'mobile_number',
            'email',
            'password',
        ]);
        $existables->each(function ($existable) use ($data){
            array_verify_key($existable, $data);
        });
    }
}
