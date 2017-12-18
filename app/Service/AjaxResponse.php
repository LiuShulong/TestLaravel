<?php
/**
 * Created by PhpStorm.
 * User: liushulong
 * Date: 19/12/2017
 * Time: 12:57 AM
 */

namespace App\Service;


class AjaxResponse {

    protected function ajaxResponse($code, $message, $data = null)
    {
        $out = [
            'code' => $code,
            'message' => $message,
        ];

        if ($data !== null) {
            $out['result'] = $data;
        }

        return response()->json($out);
    }

    public function success($data = null)
    {
        $code = 0;
        return $this->ajaxResponse(0, '', $data);
    }

    public function fail($message, $extra = [])
    {
        return $this->ajaxResponse(1, $message, $extra);
    }
}
