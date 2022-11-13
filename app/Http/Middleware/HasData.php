<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HasData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $category = \App\Models\Category::first();
        $artist = \App\Models\Song::first();
        $song = \App\Models\Artist::first();

        if(!$category && !$artist && !$song)
        {
            echo '<meta http-equiv="refresh" content="2;url=http://127.0.0.1:8000/plaseSeedDataToDatabase" />';
            dd ('داده ای وجود نداره. تا چند لحظه دیگه سید میشه و میتونید استفاده کنید. فقط باید صبر کنید...');
        }

        return $next($request);
    }
}
