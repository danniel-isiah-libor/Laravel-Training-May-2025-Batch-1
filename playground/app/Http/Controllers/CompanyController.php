<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Company\StoreRequest;
use App\Models\WorkExperience;
use App\Models\User;

class CompanyController extends Controller
{
    public function store(StoreRequest $request){
        $form = $request->validated();
        WorkExperience::create([
            'company_name' => $form['company_name'],
            'start_date' => $form['start_date'],
            'end_date' => $form['end_date'],
            'role' => $form['role'],
            'tenure' => $form['tenure'],
            'location' => $form['location'],
            'user_id' => $form['user_id'],
        ]);

        return view('components.company', [
            'company_name' => $request->company_name,
            'tenure' => $request->tenure,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'role' => $request->role,
            'location' => $request->location
        ]);
    }

    public function show(Request $request){
        $search = $request->query('search');

        $query = WorkExperience::with(['user' => function($query) {
            $query->select('id', 'name')
            ->with(['profile' => function ($q) {
                  $q->select('id', 'user_id', 'birthdate', 'gender');
              }]);
        }]);

        if(!empty($search)){
            $query->whereHas('user', function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                ->orWhereHas('profile', function ($q) use ($search) {
                    $q->where('gender', 'like', '%' . $search . '%');
                });
            })->orWhere('role', 'like', '%' . $search . '%')
            ->orWhere('company_name', 'like', '%' . $search . '%')
            ->orWhere('location', 'like', '%' . $search . '%');
        }
        
        $collection = $query->paginate(5)->appends($search ? ['search' => $search] : []);

        return view('workexperience', [
            'collection' => $collection,
            'count' => $collection->total(),
            'search' => $search
        ]);
    }

    public function edit($id){
        $result = WorkExperience::where('id', $id)->first();
        return view('components.edit-workexperience', [
            'result' => $result,
        ]);
    }

    public function delete($id){
        $result = WorkExperience::where('id', $id)->first();
        return view('components.delete-workexperience', [
            'result' => $result,
        ]);
    }

    public function update($id, StoreRequest $request){
        $form = $request->validated();
        WorkExperience::where('id', $id)->update($form);
        return redirect()->route('workexperience.show')->with('success', 'Work Experience has been updated successfully');
    }

    public function destroy($id){
        $experience = WorkExperience::findOrFail($id);
        $experience->delete();
        return redirect()->route('workexperience.show')->with('success', 'Work Experience has been deleted successfully');
    }
}
