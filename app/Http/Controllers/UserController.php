<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create ()
    {
    User::create([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => '1',
        'nickname' => 'AdminNick',
        'bio' => 'Jogo cs2 a mais de 20 anos e procuro um lobby sem troll',
        'rank' => 'Global',
        'position' => 'Rifler',
        'avatar_url' => 'avatar-url',
        'discord_user' => 'Admin_Discord' 
    ]);
}
}
