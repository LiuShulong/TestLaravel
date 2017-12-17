<?php

namespace App\Http\Controllers\Service;

use App\Entity\TempPhone;
use App\Http\Controllers\Controller;
use App\Tool\Validate\ValidateCode;
use App\Tool\SMS\SendTemplateSMS;

class ValidateCodeController extends Controller
{
    public function create($value = ''){
        $validateCode = new ValidateCode();
        return $validateCode->doimg();
    }

    public function sendSMS(Request $request){

        $phone = $request->input('phone','');
        if($phone == ''){

        }

        $sendSMSTemplateSMS = new SendTemplateSMS();

        $this->charset = '1234567890';
        $_len = strlen($this->charset) - 1;
        $this->codelen = 4;
        $this->code = '';
        for ($i = 0;$i < $this->codelen;++$i) {
            $this->code .= $this->charset[mt_rand(0, $_len)];
        }

        $sendSMSTemplateSMS->sendTemplateSMS('18515572868',array(1234,60),1);

        $tempPhone = new TempPhone();
        $tempPhone->phone = $phone;
        $tempPhone->code = $this->code;
        $tempPhone->deadline = date('Y-m-d H-i-s',time() + 60);
        $tempPhone->save();


        return $this->code;
    }
}
