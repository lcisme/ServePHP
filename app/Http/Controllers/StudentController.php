<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function all(Request $request){
//        $classTable = with(new Classes)->getTable();
//        $studentTable = with(new Classes)->getTable();
//        $students = Student::leftJoin($classTable,$studentTable."cid","=",$classTable."cid")
//            ->select($studentTable.".*",$classTable.'.name as className',$classTable.'.room')
//            ->simplePaginate(10);
//        $students = Student::with("classes")->simplePaginate(10);
//        return view("students.student-list",[
//            'students'=>$students
//        ]);
        $classList = Classes::all();
        $paramName = $request->get("name");
        $paramClassID = $request->get("classID");
        $paramDate1 = $request->get("date1");
        $paramDate2 = $request->query("date2");
        $students = Student::StartDate($paramDate1)->EndDate($paramDate2)->ClassFilter($paramClassID)->Search($paramName)->with("classes")->simplePaginate(10);
        return view("students.student-list",[
            'students'=>$students,
            'classesList'=>$classList
            ]);
    }

    public function form(){
        $classList = Classes::all();
        return view("students.add-student",['classesList'=>$classList]);
    }

    public function create(Request $request){
        Student::create([
            "sid"=>$request->get("sid"),
            "name"=>$request->get("name"),
            "birthday"=>$request->get("birthday"),
            "cid"=>$request->get("cid")
        ]
        );
        return redirect()->to("/student/list");
    }
}
