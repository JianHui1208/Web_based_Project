<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\category;
use App\food;
use Session;

class FoodController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function create(){
        return view('insert') ->with('categories',Category::all());;
    }

    public function store(){ 
        $r=request();
        $image=$r->file('FoodImage');
        $image->move('images',$image->getClientOriginalName());
        $imageName=$image->getClientOriginalName();
        $addCategory=food::create([
            'id'=>$r->id,
            'FoodName'=>$r->FoodName,
            'FoodPrice'=>$r->FoodPrice,
            'FoodImage'=>$imageName,
            'FoodCategory'=>$r->FoodCategory,
        ]);
        Session::flash('success',"Food create succesful!");
        Return redirect()->route('all.food');
    }

    public function show(){
        $DBFood=DB::table('food')
        ->leftjoin('categories', 'categories.id', '=', 'food.FoodCategory')
        ->select('categories.FoodCategory as CatName', 'categories.id as CatID', 'food.*')
        ->orderBy('id', 'ASC')
        //DESC = 逆序 ASC = 顺序
        ->get();
        $DBCate=DB::table('categories')
        ->select('categories.*')
        ->orderBy('id', 'ASC')
        ->get();
        return view('menu')->with('SFoods',$DBFood)
                                ->with('CTLCate',$DBCate);
    }

    public function editshow(){
        $DBFood=DB::table('food')
        ->leftjoin('categories', 'categories.id', '=', 'food.FoodCategory')
        ->select('categories.FoodCategory as CatName', 'categories.id as CatID', 'food.*')
        ->orderBy('id', 'ASC')
        ->get();
        return view('control')->with('SFoods',$DBFood);
    }

    public function delete($id){
        $DBFood=food::find($id);
        $DBFood->delete();
        return redirect()->route('all.food');
    }

    public function edit($id){
        $DBFood=food::all()->where('id',$id);
        return view('update')->with('SFoods',$DBFood)
                                ->with('categories',Category::all());
    }

    public function update(){
        $r=request();
        $DBFood=food::find($r->id);
        if($r->file('FoodImage')!=''){
            $image=$r->file('FoodImage');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $DBFood->FoodImage=$imageName;
            }    
        $DBFood->FoodName=$r->FoodName;
        $DBFood->FoodPrice=$r->FoodPrice;
        $DBFood->FoodCategory=$r->FoodCategory;
        $DBFood->save();
        return redirect()->route('all.food');
    }

    public function search(){
        $r=request();
        $keyword=$r->searchFood;
        $DBFood=DB::table('food')
        ->leftjoin('categories', 'categories.id', '=', 'food.FoodCategory')
        ->select('categories.FoodCategory as CatName', 'categories.id as CatID', 'food.*')
        ->where('food.FoodName', 'like', '%' . $keyword . '%')
        ->orderBy('id', 'ASC')
        ->get();
        $DBCate=DB::table('categories')
        ->select('categories.*')
        ->orderBy('id','ASC')
        ->get();
        return view('menu')->with('SFoods',$DBFood)
                            ->with('CTLCate',$DBCate);
    }

    public function showCate($id){
        $DBFood =food::all()->where('FoodCategory',$id);
        $DBCate=DB::table('categories')
        ->select('categories.*')
        ->orderBy('id', 'ASC')
        ->get();
        return view('menu')->with('SFoods',$DBFood)
                             ->with('CTLCate',$DBCate);
    }
}
