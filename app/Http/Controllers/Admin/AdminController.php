<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {

    }

    /**
     * demo create table test
     */
    public function test()
    {
        $data = [
            'name' => 'Nguyen Van Anh',
            'team' => [
                'name' => 'khoai Tay',
                'members' => [
                    [
                        'name' => 'Nguyen Van A',
                        'position' => 'developer',
                    ],
                    [
                        'name' => 'Nguyen Van B',
                        'position' => 'leader',
                    ]
                ]
            ],
        ];

        $result = Admin::create($data);

        dd($result);
    }

    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {

    }

    public function edit(Request $request)
    {
        return view('admin.edit');
    }

    public function update(Request $request)
    {

    }
}

