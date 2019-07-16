<?php

/*
 * (c) Zachary Wang <291768903@qq.com>
 */

namespace Zachary\Middleware;

use think\Request;

class AuthFilter
{
    public function handle(Request $request, $next)
    {
        return $next($request);
    }
}
