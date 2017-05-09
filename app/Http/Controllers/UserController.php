<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
* 
*/
class UserController extends Controller
{
    public function showProfile($id)
    {
        $user = Redis::get('user:profile:' . $id);

        return view('profile', ['name' => $user]);
    }

    public function setProfile($id, Request $request)
    {
        $profile = $request->input('name');
        $profile = Redis::set('user:profile:' . $id, $profile);

        if ($profile) {
            echo 'success';
        } else {
            echo 'fail';
        }
    }
}
