<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Canteen;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store($senderType, $senderId, $recipientType, $recipientId, Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'content' => 'required|string',
        ]);

        // Create a new message instance
        $message = new Message;
        $message->content = $validatedData['content'];

        // Determine the sender model and associate
        $sender = app($senderType)->find($senderId);
        $message->sender()->associate($sender);

        // Determine the recipient model and associate
        $recipient = app($recipientType)->find($recipientId);
        $message->recipient()->associate($recipient);

        // Save the message
        $message->save();

        // Additional logic or response as needed

        return response()->json(['message' => 'Message stored successfully']);
    }
}
