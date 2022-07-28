<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;
use MongoDB\BSON\UTCDateTime;

class FormController extends Controller
{
    public function __construct()
    {

    }

    /**
     * demo create table test
     */

    public function index()
    {
        $data  = Form::where('del_flag', 0)->get();
        return view('form.index', ['entities' => $data]);
    }

    public function show($id)
    {
        $data  = Form::find($id);
        return view('form.show', ['entity' => $data]);
    }

    public function create()
    {
        return view('form.create');
    }

    public function store(Request $request)
    {
        $params = $request->all();
        $data = [
            'user_id' => 1,
            'type' => '1',
            'name' => $params['name'],
            'tax_code' => $params['tax_code'],
            'address' => $params['address'],
            'details' => [
                $params['code_13'] => [
                    'name' => 'Tổng doanh thu trả trong kỳ ',
                    'code' => $params['code_13'],
                    'number_generated' => $params['number_generated_13'],
                    'cumulative_number' => $params['cumulative_number_13'],
                ],
                $params['code_14'] => [
                    'name' => 'Tổng doanh thu thuộc diện khấu trừ thuế',
                    'code' => $params['code_14'],
                    'number_generated' => $params['number_generated_14'],
                    'cumulative_number' => $params['cumulative_number_14'],
                ]
            ],
            'del_flag' => 0
        ];

        $result = Form::create($data);
        return redirect()->route('form.index')
            ->with('success','Created successfully');
    }

    public function edit(Form $form)
    {
        return view('form.edit', ['entity' => $form]);
    }

    public function update(Request $request, Form $form)
    {
        $params = $request->all();
        $data = [
            'user_id' => 1,
            'type' => '1',
            'name' => $params['name'],
            'tax_code' => $params['tax_code'],
            'address' => $params['address'],
            'details' => [
                $params['code_13'] => [
                    'name' => 'Tổng doanh thu trả trong kỳ ',
                    'code' => $params['code_13'],
                    'number_generated' => $params['number_generated_13'],
                    'cumulative_number' => $params['cumulative_number_13'],
                ],
                $params['code_14'] => [
                    'name' => 'Tổng doanh thu thuộc diện khấu trừ thuế',
                    'code' => $params['code_14'],
                    'number_generated' => $params['number_generated_14'],
                    'cumulative_number' => $params['cumulative_number_14'],
                ]
            ],
            'del_flag' => 0
        ];
        $form->update($data);
        return redirect()->route('form.index')
            ->with('success','updated successfully');
    }

    public function destroy(Form $form)
    {
        $form->del_flag = 1;
        $form->save();
        return redirect()->route('form.index')
            ->with('success','deleted successfully');
    }
}

