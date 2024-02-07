<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index() {
        return view('testimonial.index');
    }

    // handle fetch all eamployees ajax request
    public function fetchAll() {
        $emps = Testimonial::all();
        $output = '';
        if ($emps->count() > 0) {
            $output .= '<table class="table table-striped table-sm text-center align-middle" id="testtable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Bio</th>
                <th>Designation</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($emps as $emp) {
                $output .= '<tr>
                <td>' . $emp->id . '</td>
                <td><img src="storage/images/' . $emp->image . '" width="50" class="img-thumbnail rounded-circle"></td>
                <td>' . $emp->name . '</td>
                <td>' . $emp->bio . '</td>
                <td>' . $emp->designation . '</td>               
                <td>
                  <a href="#" id="' . $emp->id . '" class="text-success mx-1 teditIcon" data-bs-toggle="modal" data-bs-target="#editTestimonialModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="#" id="' . $emp->id . '" class="text-danger mx-1 tdeleteIcon"><i class="bi-trash h4"></i></a>
                </td>
              </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }

    // handle insert a new Testimonial ajax request
    public function store(Request $request) {

        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName);

        $empData = ['name' => $request->name,'bio' => $request->bio, 'designation' => $request->designation,  'image' => $fileName];
        Testimonial::create($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle edit an Testimonial ajax request
    public function edit(Request $request) {
        $id = $request->id;
        $emp = Testimonial::find($id);
        return response()->json($emp);
    }

    // handle update an Testimonial ajax request
    public function update(Request $request) {
        $fileName = '';
        $emp = Testimonial::find($request->fur_id);
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

        $empData = ['name' => $request->name,'bio' => $request->bio, 'designation' => $request->designation,  'image' => $fileName];

        $emp->update($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle delete an Testimonial ajax request
    public function delete(Request $request) {
        $id = $request->id;
        $emp = Testimonial::find($id);
        if (Storage::delete('public/images/' . $emp->image)) {
            Testimonial::destroy($id);
        }
    }
 
}
