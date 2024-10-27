<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle($request, Closure $next)
    {
        // Check if the user is not authenticated
        if (!auth()->check()) {
            // Store additional parameters in the session
           $productInfo = new \stdClass();
            $productInfo->product_id = $request->input('id_prodact');
            $productInfo->quantity = $request->input('quantity');
            $productInfo->color = $request->input('color');

            // Save the object in the session
                $request->session()->put('product_info', $productInfo);

            // Redirect to the login page
            return redirect()->route('login');
        }

        return $next($request);
    }
}
