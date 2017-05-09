<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;

class WechatController extends Controller
{
    public function welcome()
    {
        $rooms = [];
        return view('wechat', ['rooms' => $rooms]);
    }
}
