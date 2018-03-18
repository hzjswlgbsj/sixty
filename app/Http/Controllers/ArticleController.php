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

class ArticleController extends Controller {
    public function all() {
        try {
            $article = DB::table('article')->get();
            if ($article) {
                $result = [
                    'data' => $article,
                    'ret' => 1
                ];
            } else {
                $result = [
                    'ret' => 0,
                    'data' => null,
                    'msg' => '获取文章数据出错'
                ];
            }
            return $result;
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }
}