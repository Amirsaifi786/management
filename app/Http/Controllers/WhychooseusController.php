<?php

namespace App\Http\Controllers;

use App\Models\Whychooseus;

use Illuminate\Http\Request;

class WhychooseusController extends Controller
{
    public function index() {
        return view('why.index');
    }

    // handle fetch all eamployees ajax request
    public function fetchAll() {
        $emps = Whychooseus::all();
        $output = '';
        if ($emps->count() > 0) {
            $output .= '<table class="table table-striped table-sm text-center align-middle" id="whytable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($emps as $emp) {
                $output .= '<tr>
                <td>' . $emp->id . '</td>
                <td><img src="storage/images/' . $emp->image . '" width="50" class="img-thumbnail rounded-circle"></td>
                <td>' . $emp->title . '</td>
                <td>' . $emp->description . '</td>
                <td>
                  <a href="#" id="' . $emp->id . '" class="text-success mx-1 weditIcon" data-bs-toggle="modal" data-bs-target="#editWhychooseusModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="#" id="' . $emp->id . '" class="text-danger mx-1 wdeleteIcon"><i class="bi-trash h4"></i></a>
                </td>
              </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }

    // handle insert a new Whychooseus ajax request
    public function store(Request $request) {

        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName);

        $empData = ['title' => $request->title,'description' => $request->description, 'image' => $fileName];
        Whychooseus::create($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle edit an Whychooseus ajax request
    public function edit(Request $request) {
        $id = $request->id;
        $emp = Whychooseus::find($id);
        return response()->json($emp);
    }

    // handle update an Whychooseus ajax request
    public function update(Request $request) {
        $fileName = '';
        $emp = Whychooseus::find($request->fur_id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
            if ($emp->avatar) {
                Storage::delete('public/images/' . $emp->image);
            }
        } else {
            $fileName = $request->fur_image;
        }

        $empData = ['title' => $request->title,'description' => $request->description, 'image' => $fileName];

        $emp->update($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle delete an Whychooseus ajax request
    public function delete(Request $request) {
       
        $id = $request->id;
        $emp = Whychooseus::find($id);
        if (Storage::delete('public/images/' . $emp->image)) {
            Whychooseus::destroy($id);
        }
    }
}
