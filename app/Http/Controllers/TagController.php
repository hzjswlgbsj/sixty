<?php
/**
 * Created by PhpStorm.
 * User: liulin
 * Date: 2018/3/18
 * Time: 下午1:51
 */
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TagController extends Controller {
    public function all() {
        try {
            $article = DB::table('tags')->get();
            if ($article) {
                $result = [
                    'data' => $article,
                    'ret' => 1
                ];
            } else {
                $result = [
                    'ret' => 0,
                    'data' => null,
                    'msg' => '获取标签数据出错'
                ];
            }
            return $result;
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }
}