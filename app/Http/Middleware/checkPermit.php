<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class checkPermit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!empty(Auth::user())) {
            $user_permissions = unserialize(Auth::user()->permissions);
            // dd($user_permissions);
            $current_routeName = Route::currentRouteName();
            $routeName = substr($current_routeName, 0, strrpos($current_routeName, '.'));
            $method = substr($current_routeName, strrpos($current_routeName, '.') + 1);
            // dump($method);

            $access = ['index'];
            $add = ['create', 'store'];
            $edit = ['edit', 'update'];
            $delete = ['destroy'];
            $view = ['show']; 
            $download = ['download'];

            if(in_array($method, $access)) { 
                $permission = 'access';
            } 
            elseif (in_array($method, $add)) {
                $permission = 'add';
            } 
            elseif (in_array($method, $edit)) {
                $permission = 'edit';
            } 
            elseif (in_array($method, $delete)) {
                $permission = 'delete';
            } 
            elseif (in_array($method, $view)) {
                $permission = 'view';
            } 
            elseif (in_array($method, $download)) {
                $permission = 'download';
            }
            else {
                $permission = +'';
            }


            $role = Role::where(['active' => 1, ['route', 'like', $routeName . "%"]])->first();

            // dd($user_permissions[$role->id]);
            if(!empty($permission) && !empty($role) && array_key_exists($role->id, $user_permissions) && !empty($user_permissions[$role->id]) && in_array($permission, explode(',', $user_permissions[$role->id]))){
                return $next($request);
            }

            return redirect()->route('admin.dashboard.index');
        }

        return redirect()->route('admin.login');
    }
}
