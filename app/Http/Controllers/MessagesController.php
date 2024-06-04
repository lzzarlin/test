<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //
    public function store(MessageRequest $request)
    {
        
        $data = $request->all();
        if ($request->validated()){
            // XSS 漏洞过滤 user_topic_body 为 调用 config/purifier.php 文件中的过滤规则
            $data['message'] = clean($request->messages, 'user_topic_body');
        }
        $message = Message::create($data);
        if ($message) {
            return redirect()->back()->with("success", "Your Message has been send successfully , we will get in touch in a few hours!");
        } else {
            return redirect()->back()->with("danger", "Your Message can not be sent ,please contact us with phone or email!");
        }
    }
}
