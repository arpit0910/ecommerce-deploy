<?php

// Use this function to send response
if (!function_exists('sendResponse')) {
    function sendResponse($data, $message, $code)
    {
        $response = [
            'code' => $code,
            'message' => $message,
            'data' => $data
        ];
        return response()->json($response, 200);
    }
}
