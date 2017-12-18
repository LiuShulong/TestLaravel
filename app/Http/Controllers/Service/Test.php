<?php
/**
 * Created by PhpStorm.
 * User: liushulong
 * Date: 17/12/2017
 * Time: 9:30 PM
 */

namespace App\Http\Controllers\Service;

use App\Service\AjaxResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entity\Member;

class Test extends Controller
{

    public function getInfo(Request $request){
        $response = new AjaxResponse();
        return $response->success();
    }

    public function add(Request $request){
        $member = new Member();
        $member->phone = $request->input('phone','');
        $member->password = $request->input('password','');
        $member->nickname = $request->input('nickname','');
        echo $member->save();
    }

    public function update(Request $request){
//        $member = new Member();
//        $member->phone = $request->input('phone','');
//        $member->password = $request->input('password','');
//        $member->nickname = $request->input('nickname','');

        //返回修改成功的条数
        $res = Member::where('phone',$request->input('phone',''))
            ->update(['password'=>$request->input('password',''),
                'nickname'=> $request->input('nickname','')]);

        echo $res;
    }

}