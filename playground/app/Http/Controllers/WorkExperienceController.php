<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkExperience\StoreRequest;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function store(StoreRequest $request)
    {
        $form = $request->validated();

        // option 1:
        // WorkExperience::create($form);

        // option 2:
        // WorkExperience::insert([
        //     [
        //         'user_id' => $form['user_id'],
        //         'company_name' => $form['company_name'],
        //         'position' => $form['position'],
        //         'start_date' => $form['start_date'],
        //         'end_date' => $form['end_date'],
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'user_id' => $form['user_id'],
        //         'company_name' => $form['company_name'],
        //         'position' => $form['position'],
        //         'start_date' => $form['start_date'],
        //         'end_date' => $form['end_date'],
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'user_id' => $form['user_id'],
        //         'company_name' => $form['company_name'],
        //         'position' => $form['position'],
        //         'start_date' => $form['start_date'],
        //         'end_date' => $form['end_date'],
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        // ]);

        // option 3:
        $model = new WorkExperience();
        $model->user_id = $form['user_id'];
        $model->company_name = $form['company_name'];
        $model->position = $form['position'];
        $model->start_date = $form['start_date'];
        $model->end_date = $form['end_date'];
        $model->save();

        // saving....
        return view('work-experience.show', [
            'form' => $form
        ]);
    }
}
