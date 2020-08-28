<?php
//命名空间
namespace App\Http\Controllers\Goods;
//使用公共方法
use App\Http\Controllers\Controller;
//使用model
use App\Model\Goods;
//创建Goods类并继承基类
class GoodsController extends Controller{
    //商品接口
    public function goods(){
        //查询商品列表接口
        $url = env("API_HOST")."/api/goods";
        $goodsInfo = file_get_contents($url);
        $data = json_decode($goodsInfo,true);
        return $this->Json('00000','成功',$data['data']);
    }
}