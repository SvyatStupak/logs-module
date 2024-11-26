<?php

namespace App\Http\Controllers;

use App\Facades\Logger;
use Illuminate\Http\Request;

class LoggerController extends Controller
{
    /**
     * Sends a log message to the default logger.
     */
    public function log(Request $request)
    {
        $message = $request->input('message', 'Default log message');
        Logger::send($message);

        return response()->json([
            'success' => true,
            'message' => 'Log message sent to the default logger.',
            'log_message' => $message,
        ], 200);
    }

    /**
     * Sends a log message to a special logger.
     *
     * @param string $type
     */
    public function logTo(Request $request, string $type)
    {
        $message = $request->input('message', 'Message for special logger');
        Logger::sendByLogger($message, $type);

        return response()->json([
            'success' => true,
            'message' => "Log message sent to the {$type} logger.",
            'log_message' => $message,
            'logger_type' => $type,
        ], 200);
    }

    /**
     * Sends a log message to all loggers.
     */
    public function logToAll(Request $request)
    {
        $message = $request->input('message', 'Broadcast log message');
        Logger::logToAll($message);

        return response()->json([
            'success' => true,
            'message' => 'Log message sent to all loggers.',
            'log_message' => $message,
        ], 200);
    }
}
