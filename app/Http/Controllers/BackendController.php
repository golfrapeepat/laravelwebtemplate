<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use  App\Models\Employee;
use  App\Models\product;

class BackendController extends Controller
{
    //   public function dashboard(){
    //     return "aaaaaa";
    // }
    public function dashboard(){
        return view('blackend.pages.dashboard');
    }
    public function employees(){
        // $employees = DB::table('employees')->get();
        // return $employees;

        // $employees = DB::table('employees')->first();
        // return $employees;

        // $employees = DB::table('employees')->get(['fullname','gender','email']);
        // return $employees;

        // $employees = DB::table('employees')
        //                     ->where('age','=','30')
        //                     ->where('gender','Female')->get();

         //$employees = DB::table('employees')->find(7);
        // การหาค่าสูงสุด ต่ำสุด และค่าเฉลี่ย
        // $employees = DB::table('employees')->max('age');
        // $employees = DB::table('employees')->min('age');
        // $employees = DB::table('employees')->avg('age');
        // $employees = DB::table('employees')->count();
        // การจัดเรียนข้อมูล และการเลือกข้อมูลบางส่วน
        //  $employees = DB::table('employees')->orderBy('age')->get(); // order asc
        // return $employees;
       // $employees = DB::table('employees')->orderByDESC('age')->get(); // order DESC
       
        //เพิ่มข้อมูล
    //    $data = array(
    //         'fullname' => 'Samit Koyom',
    //         'gender' => 'Male',
    //         'email' => 'samit@email.com',
    //         'tel' => '0898938889389',
    //         'age' => 38,
    //         'address' => '20/2 moo.2 bangkok',
    //         'avartar' => 'noavatar.jpg',
    //         'status' => 1
    //     );
    //     $employees = DB::table('employees')->insert($data);

        //แก้ไข
    // $data = array(
    //     'fullname' => 'Wichai Jaidee',
    //     'gender' => 'Male',
    //     'email' => 'wichai@email.com',
    //     'tel' => '0898938889389',
    //     'age' => 38,
    //     'address' => '20/2 moo.2 bangkok',
    //     'avartar' => 'noavatar.jpg',
    //     'status' => 1
    // );
    // $employees = DB::table('employees')->where('id',7)->update($data);

    // การลบข้อมูลเข้าไปในตาราง --------------------------------------------
     //$employees = DB::table('employees')->where('id',1003)->delete();

       return $employees;
    }

    public function employeelist(){
        //$employees = Employee::all();
        $employees = Employee::orderBy('id','desc')->paginate(25);
       // $employees = Employee::where('age','>','98')->orderBy('age')->get();
       return view('blackend.pages.employeelist',compact('employees'));
    }

    public function productlist(){
        //$employees = Employee::all();
        $products = product::orderBy('id','desc')->paginate(25);
       // $employees = Employee::where('age','>','98')->orderBy('age')->get();
       return view('blackend.pages.productlist',compact('products'));
    }
}
