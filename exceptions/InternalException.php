<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;

class InternalException extends Exception
{
    public function __construct(string $message = '系统内部错误')
    {
        parent::__construct($message, 500);
    }

    public function render(Request $request)
    {
        return response()->json(['message' => $this->message], $this->code);
    }
}
