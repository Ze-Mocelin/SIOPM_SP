<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogoutActivity; // Replace with your LogoutActivity model namespace
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Auth;// uso da autenticação do usuario logado


class LogoutController extends Controller
{
    public function logout(Request $request)
{
    // Log the user's logout activity in the database
    LogoutActivity::create([
        'user_id' => auth()->id(),
        'logout_at' => now(),
        // Add any other relevant information you want to store
    ]);

    // Perform the actual logout


    $id_user = Auth::user()->id;

    if (User::where('id', '=', $id_user)
        ->update(['trabalhando' => "",
            ])){
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
            return redirect('/');
            }else{
                return redirect()
                    ->back()
                    ->withInput()
                    ->with('error', 'Ops! Ocorreu um erro ao fazer logout do sistema.');
            }
        }



}
