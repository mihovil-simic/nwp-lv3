<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ProjectTeamMember
{
    public function handle($request, Closure $next)
    {
        $project_id = $request->route('project_id');
        $project = \App\Models\Project::findOrFail($project_id);

        $team_members = $project->team_members->pluck('id')->toArray();

        if (in_array(Auth::id(), $team_members)) {
            return $next($request);
        } else {
            return redirect('/home');
        }
    }
}