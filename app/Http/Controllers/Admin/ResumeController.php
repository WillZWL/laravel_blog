<?php

namespace App\Http\Controllers\Admin;

// use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Experience;
use App\Project;
use App\Http\Requests\ExperienceRequest;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function experience()
    {
        $experiences = Experience::latest()->paginate(15);

        return view('admin.resume.experience', compact('experiences'));
    }

    public function add_experience()
    {
        return view('admin.resume.experience_create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function project()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store_experience(ExperienceRequest $request)
    {
        dd($request);
        $this->createExperience($request);

        flash()->success('Your experience has been created!');

        return redirect('admin/resume/experience');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function update($id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
    }
}
