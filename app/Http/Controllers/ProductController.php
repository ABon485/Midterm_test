<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
class ProductController extends Controller
{
    // public $data = [];
    function index(){
        $products = product::all();
        // $Allproduct = product::where('new','=',1)->get();
        return view('client.pageWeb.home',compact('products'));
    }
    public function getproduct(){

        $products = product::all();
        // $this->data['title'] = 'sản phẩm';
        return view('client.shop.shop',compact('products'));
    }
    public function getAllproduct(Request $request){
        $products = product::all();
        if(isset($request->search)){
            // dd($request->search);
            $products = product::where('name','like','%'.$request->search.'%')->get();
        }
        return view('Admin.ListProduct',compact('products'));
    }
    public function product(){
        // $this->data['title'] = 'sản phẩm';
        return view('client.shop.shop',compact('products'));
    }
    public function Detailproduct($id){
        $product = DB::table('product')->where('id', $id)->first();
        // Sử dụng first() vì bạn chỉ mong muốn lấy một bản ghi
    
        return view('client.pageWeb.detail', compact('product'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $mfList = Mf::all();
        return view('Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $validatedData = $request->validate([
            'Name' => 'required|max:255',
            'description' => 'required|max:255',
            'Price' => 'required|numeric',
            'Category_id' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,jfif|max:2048', 
        ]);

        $product = new product();

        $product->Name = $request->Name;
        $product->description = $request->description;
        $product->Price = $request->Price;
        $product->Category_id = $request->Category_id;


        $file = $request->file('image');
            $name =time().'_'.$file->getClientOriginalName();
            $destinationPath= public_path('images'); // lưu hình ảnh vào thư mục public
            $file->move($destinationPath,$name);
            $product->image=$name;
            $product->save();
            session()->flash('success', 'Thêm thành công!');
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        // Các xử lý khác với biến $product
        return view('Listproduct', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request  $request, string $id){
        if(isset($request->image)){
            return $this->update($request, $id);
        }

        $product = product::find($id);
        return view('Admin.update', compact('product'));
    }

   /**
 * Update the specified resource in storage.
 */
/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{

    $validatedData = Validator([
        'Name' => 'required|max:255',
        'description' => 'required|max:255',
        'Price' => 'required|numeric',
        'Category_id' => 'required|numeric',
        'image' => 'required|mimes:jpeg, png, jpg, gif, svg, jfif', 
    ]);


    $product = product::find($id);
    
    $product->Name = $request->input('Name');
    $product->description = $request->input('description');
    $product->Price = $request->input('Price');
    $product->Category_id = $request->input('Category_id');



    if ($request->hasFile('image')) {
        $file = $request->file('image');

        if ($file->isValid()) {
            $name = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('images');
            $file->move($destinationPath, $name);
            $product->image = $name;
            $product->save();
            return redirect('/admin');
        } else {
            return redirect()->back()->with('error', 'Invalid file upload.');
        }
    }


}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = product::find($id);
        $product->delete();
        return redirect("/admin");
    }
}
