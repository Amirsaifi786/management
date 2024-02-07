<?php

namespace App\Http\Controllers;
// use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use App\Models\Item;
use DataTables;
class ItemsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
        $data = Item::latest()->get();
        dd($data);
        return DataTables::of($data)
     
            ->addColumn('status', function ($row) {
                // Use $btn without concatenation here
                $btn = '<button type="button" data-subject-id="' . $row->id . '" class="activate-deactivate btn btn-success btn-sm">' . ($row->status == 1 ? 'Deactivate' : 'Activate') . '</button>';
                return $btn;
            })
            ->addColumn('action', function ($row) {
                $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm" data-toggle="modal" data-target="#model-info-subject" data-subject-id="' . $row->id . '">Edit</a>';
                $btn .= '<button type="button" data-subject-id="' . $row->id . '" class="delete btn btn-danger btn-sm">Delete</button>';

                return $btn;
            })
            ->rawColumns(['action', 'status']) // Include 'status' as a raw column
            ->make(true);
    }


        return view('item.additem');
    }
       
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Item::updateOrCreate([
                    'id' => $request->product_id
                ],
                [
                    'name' => $request->name, 
                    'detail' => $request->detail
                ]);        
     
        return response()->json(['success'=>'Product saved successfully.']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Item::find($id);
        return response()->json($product);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::find($id)->delete();
      
        return response()->json(['success'=>'Product deleted successfully.']);
    }
}
