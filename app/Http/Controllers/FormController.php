<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

use App\Models\Form;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'image' => 'required|file|mimes:jpeg,jpg,png',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $name = $request->input('name');
            $email = $request->input('email');
            $image = $request->file('image');
            $filename = Str::random(40) . '.' . $image->getClientOriginalExtension();

            $path = $image->move(public_path('images'), $filename);

            $formData = new Form();
            $formData->name = $name;
            $formData->email = $email;
            $formData->image = $filename;
            $formData->save();
        }

        return back()->with('status', 'Created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'image' => 'required|file|mimes:jpeg,jpg,png',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $name = $request->input('name');
            $email = $request->input('email');
            $image = $request->file('image');
            $filename = Str::random(40). '.' . $image->getClientOriginalExtension();

            $path = $image->move(public_path('images'), $filename);

            $formData = Form::find( $request->id);
            $formData->name = $name;
            $formData->email = $email;
            $formData->image = $filename;
            $formData->save();
        }
        return back()->with('status', 'Uploaded succesfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $formData = Form::find($id);
        // dd($formData);
        $formData->delete();
        return back()->with('status', 'Deleted succesfully');
    }
}
