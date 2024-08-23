<?php

namespace App\Http\Controllers;

use Exception;

abstract class Controller
{
    // private function checkIsNumber($data)
    // {
    //     return
    // }

    public function showError(Exception $e, string $message, int $code) {
        return response()->json([
            'message' => $message ?? "",
            'error' => $e->getMessage(),
            'code' => $code
        ], $code);
    }

    public function showSuccess(string $message, $code = 200) {
        return response()->json([
            'message' => $message,
            'code' => $code
        ], $code);
    }
}
