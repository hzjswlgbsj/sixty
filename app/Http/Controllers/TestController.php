<?php
/**
 * Created by PhpStorm.
 * User: liulin
 * Date: 2018/2/28
 * Time: 下午1:51
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TestController extends Controller {
    public function test() {
        $tags = DB::select('select * from hi_tags');
        dd($tags);
    }
}