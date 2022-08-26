<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\product;
use Exception;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Image;
use PhpParser\Node\Expr;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::orderBy('id','desc')->get();
        return view('blackend.pages.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blackend.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";
// $newimage = time().'-'.$request->prd_name . '.' .$request->prd_image->extension();
// $request->prd_image->move(public_path('uploads'),$newimage);

        // สร้างกฏสำหรับการตรวจสอบ
        $rules = [
            'prd_name' => 'required',
            'prd_slug' => 'required',
            'prd_description' => 'required',
            'prd_price' => 'required|numeric',
        ];

        $messages = [
            'required' => 'ฟิลด์ :attribute นี้จำเป็น',
            'numeric' => 'ฟิลด์นี้ต้องเป็นตัวเลขเท่านั้น'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
    if($validator->fails()){ // ตรวจสอบฟอร์มยังไม่ผ่าน
        return redirect()->back()->withErrors($validator)->withInput();
    }else{
        $data_product = array(
            'name' => $request->prd_name,
            'slug' => $request->prd_slug,
            'description' => $request->prd_description,
            'price' => $request->prd_price
            // 'image' => $newimage
        );
        //อัพโหลดภาพ
        try{
            //รับค่ารูป
            $image = $request->file('prd_image');
            //ต้องมีไฟล์ส่งค่ามา
            if(!empty($image)){
                 $file_name = "product_" . time() . '.' . 
                 $image->getClientOriginalExtension();

                 //เช็คสกุลไฟล์
                if($image->getClientOriginalExtension() == 'jpg' or
                $image->getClientOriginalExtension() == 'png'){
                    $imgwidth = 300; //ขนาดความกว้าง
                    $folderupload = 'assets/blackend/images/products';
                    $path = $folderupload."/".$file_name;

                    //อัพโหลดรูปไปที่โฟรเดอร์
                    $img = Image::make($image->getRealPath());
                    if ($img->width() > $imgwidth) {
                        $img->resize($imgwidth, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    }
                    $img->save($path);
                    $data_product['image'] = $file_name;
                }else{
                    return redirect()->back()->withErrors($validator)
                    ->withInput()->with('status', '<div class="alert alert-danger">
                    ไฟล์ภาพไม่รองรับ อนุญาติเฉพาะ .jpg และ .png</div>');
                }
          }
        }catch(Exception $e){
            report($e);
            return false;
        }

        $status = Product::create($data_product);
        return redirect()->route('products.create')->with('success','Add Product Succcess');
        //return $status;
    }
    
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return view('blackend.pages.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('blackend.pages.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index')->with('update','Update Success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('destroy','Delete Success');

        
    }
}
