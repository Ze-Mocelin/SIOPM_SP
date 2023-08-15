<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class GroupMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && time() - session('last_activity_time', 0) > config('session.lifetime') * 60) {
            Auth::logout();
            $request->session()->flush();
            return redirect()->route('login')->with('session_expired', 'Sua sessão expirou. Faça o login novamente.');
        }

        // Atualiza o tempo da última atividade a cada requisição
        session(['last_activity_time' => time()]);

        return $next($request);
    }

}
