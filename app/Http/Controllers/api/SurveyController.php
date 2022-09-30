<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SurveysResource;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Survey $survey
     * @return SurveysResource
     */
    public function show(Survey $survey): SurveysResource
    {
        return new SurveysResource($survey);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Survey $survey
     * @return Response
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Survey $survey
     * @return void
     */
    public function update(Request $request, Survey $survey)
    {
        $survey->questioner=$request->questioner;
        $survey->status=0;
        $survey->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Survey $survey
     * @return Response
     */
    public function destroy(Survey $survey)
    {
        //
    }
}
