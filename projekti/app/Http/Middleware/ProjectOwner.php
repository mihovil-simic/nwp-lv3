<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ProjectOwner
{
    public function handle($request, Closure $next)
    {
        $project_id = $request->route('project_id');
        $project = \App\Models\Project::findOrFail($project_id);

        if ($project->user_id == Auth::id()) {
            return $next($request);
        } else {
            return redirect('/home');
        }
    }
}