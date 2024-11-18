<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Models\Chat;
use App\Models\ChatRoom;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    // ambil user untuk admin
    public function getUser(){
        // login as ebisee id = 1
        $admin = Auth::user();
        $chatRooms = ChatRoom::where('admin_id', $admin->id)->get();
        return view('Admin.adminChat', compact('chatRooms'));
    }

    // ambil admin untuk user
    public function getAdmin(){
        // login as garry ada 2 transaksi
        $user = Auth::user();
        $chatRooms = ChatRoom::where('user_id', $user->id)->get();
        // chat ke 10
        return view('chat', compact('chatRooms'));
    }

    public function adminChat($cr_id){
        $chatRoom = ChatRoom::with('chats')->findorfail($cr_id);
        return view('Admin.adminChatDetail', compact('chatRoom'));
    }

    public function userChat($cr_id){
        $chatRoom = ChatRoom::with('chats')->findorfail($cr_id);
        return view('chatDetail', compact('chatRoom'));
    }

    public function adminInsertChat(Request $req){
        $chat = new Chat();
        $chat->message = $req->message;
        $chat->chat_room_id = $req->chat_room_id;
        $chat->senderuser = $req->senderuser;
        date_default_timezone_set('Asia/Jakarta');
        $chat->created_at = date('Y-m-d H:i:s');
        $chat->updated_at = date('Y-m-d H:i:s');
        $chat->save();

        broadcast(new ChatEvent($chat))->toOthers();
    }

    public function insertChat(Request $req){
        $chat = new Chat();
        $chat->message = $req->message;
        $chat->chat_room_id = $req->chat_room_id;
        $chat->senderuser = $req->senderuser;
        date_default_timezone_set('Asia/Jakarta');
        $chat->created_at = date('Y-m-d H:i:s');
        $chat->updated_at = date('Y-m-d H:i:s');
        $chat->save();

        broadcast(new ChatEvent($chat))->toOthers();
    }
}
