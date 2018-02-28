<?php
/**
 * Created by PhpStorm.
 * User: liulin
 * Date: 2018/2/28
 * Time: 下午1:51
 */
namespace app\Http\Controller;

use App\Http\Controllers\Controller;

class TestController extends Controller {
    public function test() {
        return view('test');
    }
}