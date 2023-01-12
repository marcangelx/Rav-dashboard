<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssessmentRequest;
use App\Http\Requests\StoreAssessmentRequest;
use App\Http\Requests\UpdateAssessmentRequest;
use App\Http\Resources\AssessmentResource;
use App\Models\Assessment;
use App\Models\Quotation;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AssessmentResource::collection(Assessment::with('quotations')->get());
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssessmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssessmentRequest $request)
    {
        $request->validated($request->all);
        $assessment = Assessment::create([
            'resident_id' => $request->resident_id,
            'assessment_type' => $request->assessment_type,
            'facility_name' => $request->facility_name,
            'clinical_category' => $request->clinical_category,
            'days' => $request->days
        ]);
        return new AssessmentResource($assessment);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function show(Assessment $assessment)
    {
        return new AssessmentResource($assessment);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssessmentRequest  $request
     * @param  \App\Models\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function update(AssessmentRequest $request, Assessment $assessment)
    {
        $assessment->update($request->all());
        return AssessmentResource($assessment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assessment $assessment)
    {
        return $assessment->delete();
    }
}
