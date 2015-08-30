<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Jurisdiction {


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $permits = $this->getPermission($request);

        $admin = Auth::user()->power;

        // 只要有一个有权限，就可以进入这个请求
        foreach ($permits as $permit) {
            if ($permit <= $admin) {
                return $next($request);
            }

        }

        return Redirect::to('index')->withInput("没有权限");
    }

    // 获取当前路由需要的权限
    public  function getPermission($request)
    {
        $actions = $request->route()->getAction();

        return $actions['permissions'];
    }


}
