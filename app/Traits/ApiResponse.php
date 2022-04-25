<?php
namespace App\Traits;

trait ApiResponse 
{
    protected function apiSuccess($data, $code = 200, $message = null)
    {
        return response()->json([
            'data' => $data,
            'massage' => $message,
        ], $code);
    }

    protected function apiError($errors, $code, $message = null)
    {
        return response()->json([
            'errors' => $errors,
            'massage' => $message,
        ], $code);
    }
}