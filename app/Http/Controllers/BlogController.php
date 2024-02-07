<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Postss;
use App\Mail\WelcomeMail;
use Mail;
use DB;

class BlogController extends Controller
{
    // public function sendEmail(Request $request) //send multiple user mail with content 
    // {   $users = User::all();            
    //     Mail::to($users)->send(new WelcomeMail($users));    
    //     return response()->json(['success'=>'Send email successfully.']);
    // }
    // public function sendEmail(Request $request) //send multiple user mail with content using foreach loop
    // {   $users = User::all(); foreach ($users as $key => $user) { Mail::to($user->email)->send(new WelcomeMail($user));
    //     }          return response()->json(['success'=>'Send email successfully.']);
    // }
  

    public function index()
    {
        // $product = Postss::all();
        // dd($product);
        // $products = Product::all();
        // dd($products);
        // dd(DB::connection('second_db')->table('posts')->get());
        // dd(DB::connection('mysql')->table('products')->get());


       
    }
    public function blogdata()
    {
        $blogdata=Product::all();

        return view("blog.blog_list",compact('blogdata'));

    }

   
    public function create()
    {
        //
    }

    public function store(Request $request)
    { 
        $request->validate([
            'content' => 'required|string',
            'sdescription' => 'required|string',
            'image' => 'required',
            'title' => 'required|string',        
        ]);
        $post= new Product;
        $post->title=$request->title;
        $post->category_id=$request->category;
        $post->sdescription=$request->sdescription;
        $post->content=$request->content;

        $blogImage = $request->file('image');
 
  
        if ($blogImage) {
            $blogImageName = time().'.'.$blogImage->getClientOriginalExtension();
            $blogImage->move(public_path('/uploads'), $blogImageName);
            $post->image = $blogImageName;
        }
        $post->save();

    
        return redirect()->back()->with('success', 'Content saved successfully!');
  

   
    }

   
    public function show(string $id)
    {
        //
    }

    public function edit( $id)
    {
        $student = Product::findOrFail($id);
        return response()->json(['student' => $student]);

      
    }

    public function update(Request $request, $id)
    {

        $student = Product::findOrFail($id);
        $student->update($request->all());
    
        return response()->json(['message' => 'Student updated successfully']);
        // $post = Product::findOrFail($id);
        // // $post->update($request->all());
        // $responseData = compact('post');
        // // dd($responseData);

        // // return Response::json(['success' => $responseDatas], 200);
        // echo '<pre>';
        // print_r( $responseData );
        // echo '</pre>';die;
        // return response()->json(['message' => 'Post updated successfully', 'data' => $responseData]);
        
    }

    public function destroy($id)
    { 
        $product = Product::findOrFail($id);
        $product->delete();

        // return response()->json(['message' => 'Product deleted successfully']);

        return redirect()->back()->with('success', 'Content saved successfully!');
    }


}
