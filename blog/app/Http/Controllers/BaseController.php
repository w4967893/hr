<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    /**
     * 返回成功信息
     *
     * @param int $code 状态码
     * @param string $message 提示信息
     * @param array $data 返回参数
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondSuccess($message = '', $data = null, $code = 0)
    {
        $ret = ['is_succ' => true, 'code' => $code, 'message' => $message];
        if (! is_null($data)) {
            $ret['data'] = $data;
        }
        return response()->json($ret);
    }

    /**
     * 返回失败信息
     *
     * @param int $code 状态码
     * @param string $message 提示信息
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondFailure($message,$code = 1)
    {
        $ret     = ['is_succ' => false, 'code' => $code, 'message' => $message];
        return response()->json($ret);
    }
}
