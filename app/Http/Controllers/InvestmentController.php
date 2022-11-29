<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investment;
use App\Models\Admin;
use App\Http\Requests\InvestRequest;
use App\Http\Requests\InvestUpdateRequest;

class InvestmentController extends Controller
{
    public function create(InvestRequest $request){
    
        $validated = $request->validated();

        $data = Investment::create($validated);

       // Notification::send(auth()->user(), new UserCreatePost($data['title']));
        return Redirect(route('admin.dashboard'))->with('message', 'Investment Created Successfully!!!');
    }

    public function edit($id){
        $invest = Investment::findOrfail($id);
        return view('admin.invest.edit', compact('invest'));
    }

    public function update(InvestUpdateRequest $request ,$id){
        
        $data = $request->validated();
        $invest = Investment::findOrfail($id);

        $invest->name = $data['name'];
        $invest->amount = $data['amount'];
        $invest->description = $data['description'];
        $invest->save();

        return Redirect(route('admin.dashboard'))->with('update', 'Investment Updated Successfully!!!');
    }
    public function delete($id){
        $invest = Investment::where('id',$id)->first();
        $invest->delete();

        return Redirect(route('admin.dashboard'))->with('danger', 'Investment Deleted Successfully!!!');
    }
}
