<?php

/**
 * 统一响应格式
 * 更新时间: 2022-05-09 11:43
 */

// JSON 响应 200 和 JSON 数据
function responseJSON($data)
{
    return response()->json($data);
}

// Success 响应 200 和预设『操作成功！』的 JSON 数据
// 执行某个『没有具体返回数据』的『变更』操作成功后调用，例如删除、修改密码、修改手机号
function responseSuccess()
{
    return response()->json([
        'success' => True,
        'message' => "操作成功！",
    ]);
}
function responseSuccessMessage($msg = '操作成功！')
{
    return response()->json([
        'success' => True,
        'message' => $msg,
    ]);
}

// Data 响应 200 和带 data 键的 JSON 数据
// 执行『更新操作』成功后调用，例如更新话题，成功后返回已更新的话题
function responseSuccessData($data)
{
    return response()->json([
        'success' => True,
        'data' => $data,
    ]);
}

// Created 响应 201 和带 data 键的 JSON 数据
// 执行『更新操作』成功后调用，例如更新话题，成功后返回已更新的话题
function responseCreated($data)
{
    return response()->json([
        'success' => True,
        'data' => $data,
    ])->setStatusCode(201);;
}

// CreatedJSON 响应 201 和 JSON 数据
function responseCreatedJSON($data)
{
    return response()->json($data)->setStatusCode(201);;
}

// Abort404 响应 404，未传参 msg 时使用默认消息
function responseAbort404($msg = '数据不存在，请确定请求正确')
{
    return response()->json([
        'message' => $msg,
    ])->setStatusCode(404);
}

// Abort403 响应 403，未传参 msg 时使用默认消息
function responseAbort403($msg = '权限不足，请确定您有对应的权限')
{
    return response()->json([
        'message' => $msg,
    ])->setStatusCode(403);
}

// Abort500 响应 500，未传参 msg 时使用默认消息
function responseAbort500($msg = '服务器内部错误，请稍后再试')
{
    return response()->json([
        'message' => $msg,
    ])->setStatusCode(500);
}

// BadRequest 响应 400，传参 err 对象，未传参 msg 时使用默认消息
// 在解析用户请求，请求的格式或者方法不符合预期时调用
function responseBadRequest($msg = '')
{
    if ($msg == '') {
        $msg = '请求解析错误，请确认请求格式是否正确。上传文件请使用 multipart 标头，参数请使用 JSON 格式。';
    }

    return response()->json([
        'message' => $msg,
    ])->setStatusCode(400);
}

// 在解析用户请求，请求的格式或者方法不符合预期时调用
// 算是 responseBadRequest 的别名
function responseErrorMessage($msg)
{
    return responseBadRequest($msg);
}

// Unauthorized 响应 401，未传参 msg 时使用默认消息
// 登录失败、jwt 解析失败时调用
function responseUnauthorized($msg = '')
{
    if ($msg == '') {
        $msg = '请求解析错误，请确认请求格式是否正确。上传文件请使用 multipart 标头，参数请使用 JSON 格式。';
    }

    return response()->json([
        'message' => $msg,
    ])->setStatusCode(401);
}
