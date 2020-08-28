<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
    public function Json($code,$msg,$data){
        $arr = [
            'code'=>$code,
            'msg'=>$msg,
            'data'=>$data
        ];
        $arr = json_encode($arr);
        return $arr;
    }
}
