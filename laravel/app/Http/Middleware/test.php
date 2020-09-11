<?php

namespace App\Http\Middleware;

use Closure;
use App\user;
class test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$name)
    {
        $user = user::find(1);
        echo $user;
        if($name != $user->name){
            throw new \Exception("your are not allowed here: "  .$name);
            
        }
        // $ip = $request->ip();
        // if($ip =='127.0.0.1'){
        //     //throw new \Exception("Error Processing Request");
        //     return redirect('test');


         
        
        return $next($request);
    }
}
