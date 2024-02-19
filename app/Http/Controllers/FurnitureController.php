<?php
    namespace App\Http\Controllers;
    
    use App\Models\Furniture;
    use App\Models\Testimonial;
    use App\Models\Whychooseus;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;
    
    class FurnitureController extends Controller {
    
        // set index page view
        public function index() {
            return view('furniture.addfurniture');
        }
    
        // handle fetch all eamployees ajax request
        public function fetchAll() {
            $emps = Furniture::all();
            $output = '';
            if ($emps->count() > 0) {
                $output .= '<table class="table table-striped table-sm text-center align-middle" id="furtable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Shortdescription</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>';
                foreach ($emps as $emp) {
                    $output .= '<tr>
                    <td>' . $emp->id . '</td>
                    <td><img src="public/storage/images/' . $emp->image . '" width="50" class="img-thumbnail rounded-circle"></td>
                    <td>' . $emp->title . '</td>
                    <td>' . $emp->price . '</td>
                    <td>' . $emp->description . '</td>
                    <td>' . $emp->shortdescription . '</td>
                   
                    <td>
                      <a href="#" id="' . $emp->id . '" class="text-success mx-1 feditIcon" data-bs-toggle="modal" data-bs-target="#editFurnitureModal"><i class="bi-pencil-square h4"></i></a>
    
                      <a href="#" id="' . $emp->id . '" class="text-danger mx-1 fdeleteIcon"><i class="bi-trash h4"></i></a>
                    </td>
                  </tr>';
                }
                $output .= '</tbody></table>';
                echo $output;
            } else {
                echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
            }
        }
    
        // handle insert a new Furniture ajax request
        public function store(Request $request) {
      
         
      


            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $fileName);
    
            $empData = ['name' => $request->name,'title' => $request->title, 'price' => $request->price, 'shortdescription' => $request->shortdescription, 'description' => $request->description,  'image' => $fileName];
            Furniture::create($empData);
            return response()->json([
                'status' => 200,
            ]);
        }
    
        // handle edit an Furniture ajax request
        public function edit(Request $request) {
            $id = $request->id;
            $emp = Furniture::find($id);
            return response()->json($emp);
        }
    
        // handle update an Furniture ajax request
        public function update(Request $request) {
            $fileName = '';
            $emp = Furniture::find($request->fur_id);
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
    
            $empData = ['name' => $request->name, 'title' => $request->title, 'description' => $request->description, 'shortdescription' => $request->shortdescription, 'price' => $request->price, 'image' => $fileName];
    
            $emp->update($empData);
            return response()->json([
                'status' => 200,
            ]);
        }
    
        // handle delete an Furniture ajax request
        public function delete(Request $request) {
            $id = $request->id;
            $emp = Furniture::find($id);
            if (Storage::delete('public/images/' . $emp->image)) {
                Furniture::destroy($id);
            }
        }

        public function furnitureindex()
        {
            $ids = [1, 2, 3, 4];
            $furniture=Furniture::take(3)->get();
            $testimonial=Testimonial::all();
            $whychooseus=Whychooseus::whereIn('id', $ids)->get();

    
       
            return view('furniture.index', compact('testimonial','furniture','whychooseus'));
        }
    }
    


