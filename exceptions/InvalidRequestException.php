<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;

class InvalidRequestException extends Exception
{
    public function __construct(string $message = "请求错误")
    {
        parent::__construct($message, 400);
    }

    public function render(Request $request)
    {
        return response()->json(['message' => $this->message], $this->code);
    }
}
