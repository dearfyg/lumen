<?php
//命名空间
namespace  App\Model;
//使用基类
use Illuminate\Database\Eloquent\Model;
//定义一个类并继承
class Goods extends Model
{
    //表名
    protected $table = "admin_goods";
    //主键
    protected $primaryKey = "goods_id";
    //关闭时间戳
    public $timestamps = false;
}