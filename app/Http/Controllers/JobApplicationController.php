<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\JobApplicationResource;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;

class JobApplicationController extends Controller
{
    public function store(Request $request, $jobId)
    {
        $request->validate([
            'cover_letter' => 'required|string',
        ]);

        $jobApplication = JobApplication::create([
            'user_id' => Auth::id(),
            'job_id' => $jobId,
            'cover_letter' => $request->cover_letter,
        ]);

        return new JobApplicationResource($jobApplication);
    }

    public function index($jobId)
    {
        $applications = JobApplication::where('job_id', $jobId)->get();

        return JobApplicationResource::collection($applications);
    }
}
