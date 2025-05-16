<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkExperience\StoreRequest;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function store(StoreRequest $request) {
        $form = $request->validated();

        WorkExperience::create($form);

        return view('work-experience.show', ['form' => $form]);
    }

    public function show () {
        $work = WorkExperience::paginate(3);
        return view('work-experience.show', ['list' => $work]);
    }

    public function update($id = null) {
        $work = WorkExperience::where('id', $id)->first();

        return view('work-experience.update', ['form' => $work]);
    }

    public function update_record(Request $request, $id = null) {
        $work = WorkExperience::where('id', $id)->first();
        $work->company_name = $request->company_name;
        $work->start_date = $request->start_date;
        $work->end_date = $request->end_date;
        $work->position = $request->position;
        $work->save();

        $list = WorkExperience::get();
        return redirect()->route('work-experience.show', ['list' => $list]);
    }

    public function delete($id = null) {
        $form =array('id' => $id);
        return view('work-experience.delete', ['form' => $form]);
    }

    public function delete_record(Request $request, $id) {
        $work = WorkExperience::where('id', $id)->delete();

        if (!$work) {
            return '<script>Failed to delete record.</script>';
        }

        $list = WorkExperience::get();
        return redirect()->route('work-experience.show', ['list' => $list]);
    }
}
