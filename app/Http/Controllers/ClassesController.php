<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function all(Request $request){
//        demo hiện sql
//        $classes = Classes::all();
        //        dd($classes);
        // lọc
//        $classes = Classes::where("cid",'like','TH1%')->get();
        // sắp xếp
//        $classes = Classes::orderBy("cid",'asc')->get();
        // lấy 1 số cột cần lấy
//        $classes = Classes::select('cid','name')->get();
        // ->skip(5) bỏ 5 thằng đầu
        // ->limit(5) lấy đúng 5 thằng
//        $classes = Classes::paginate(5);
        //        $classes = Classes::withCount("students")->simplePaginate(5);
        $classList = Classes::all();
        $className = $request->get("name");
        $classID = $request->get("classID");
        $classes = Classes::CLassFilter($classID)->Search($className)->with("students")->simplePaginate(10);
        return view("classes.list-classes",[
            'classes'=>$classes,
            'classesList'=>$classList
        ]);
    }

    public function form(){
        $classList = Classes::all();
        return view("classes.add-classes",['classesList'=>$classList]);
    }

    public function create(Request $request){
        Classes::create([
            "cid"=>$request->get("cid"),
            "name"=>$request->get("name"),
            "room"=>$request->get("room")
        ]
        );
        return redirect()->to("/class/list");
    }
}
