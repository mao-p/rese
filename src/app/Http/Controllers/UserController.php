<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\Favorite;

class UserController extends Controller
{
    public function mypage()
    {
        $user = Auth::user();
        
        $reservations = $user ? $user->reservations : collect(); // ユーザーの予約情報の取得
        $favorites = $user ? $user->favoriteRestaurants : collect(); // ユーザーのお気に入りレストランの取得

        return view('mypage', compact('reservations', 'favorites'));
    }
}
