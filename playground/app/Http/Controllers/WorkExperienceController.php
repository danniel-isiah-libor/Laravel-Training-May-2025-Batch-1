<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkExperience\StoreRequest;
use App\Http\Requests\WorkExperience\UpdateRequest;
use App\Models\User;
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
            'model' => $model
        ]);
    }

    public function edit(WorkExperience $id)
    {
        // $model = WorkExperience::where('id', $id)->first();
        // $model = WorkExperience::findOrFail($id);

        return view('work-experience.edit', [
            'model' => $id
        ]);
    }

    public function update(UpdateRequest $request, WorkExperience $model)
    {
        $form = $request->validated();

        $model->update($form);

        return redirect()->route('work-experience.edit', ['id' => $model->id]);
    }

    public function destroy(WorkExperience $id)
    {
        $id->delete();

        return redirect()->route('work-experience.create');
    }

    public function show(WorkExperience $id)
    {
        // $model = WorkExperience::with([
        //     // 'user' => function ($query) {
        //     //     $query->where(function ($query) {
        //     //         $query->where(function ($query) {
        //     //             $query->where('email', 'test@mail.test');
        //     //         });
        //     //     });
        //     // },
        //     // 'user.profile' => function ($query) {
        //     //     $query->join('');
        //     // }
        // ])
        //     ->where('id', $id->id) // 2
        //     ->first();
        // ->toSql();
        // // $model = User::with('workExperiences')->where('id', 2)->first();

        // joins
        // $model = WorkExperience::where('work_experiences.id', 2)
        //     ->join('users', function ($query) {
        //         $query->on('users.id', '=', 'work_experiences.user_id')
        //             ->where('users.email', '');
        //     })
        //     // ->leftJoin('users', 'users.id', '=', 'work_experiences.user_id')
        //     // ->join('users', 'users.id', '=', 'work_experiences.user_id')
        //     // ->groupBy('work_experiences.id')
        //     ->first();
        // // ->toSql();

        // dd($model->user->profile->birthdate);

        $search = 'alberto';

        $model = WorkExperience::whereHas('user', function ($query) use ($search) {
            // $query->where('users.name', 'like', "%{$search}%")
            //     ->orWhere('users.email', 'like', "%{$search}%");
            $query->filter($search);
        })
            ->groupBy()
            ->orderBy('updated_at', 'desc')
            ->first();

        dd($model->toArray());

        return view('work-experience.show', [
            'model' => $id
        ]);
    }

    public function getList()
    {
        $models = WorkExperience::paginate();

        return view('work-experience.lists', [
            'models' => $models
        ]);
    }
}
