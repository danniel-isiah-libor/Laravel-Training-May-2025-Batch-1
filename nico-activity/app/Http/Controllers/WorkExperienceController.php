<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkExperience\StoreRequest;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function store(StoreRequest $request){
        $form = $request->validated();

        $model = new WorkExperience();
        $model->user_id = $form['user_id'];
        $model->company = $form['company'];
        $model->position = $form['position'];
        $model->start_date = $form['start_date'];
        $model->end_date = $form['end_date'];
        $model->save();

    }
}
