<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebCTL extends Controller
{
    public function abuotUs(){
        return view("abuot-us");
    }

    public function listST(){
        return view("student-list");
    }

    public function listCL(){
        return view("list-classes");
    }

    public function listSB(){
        return view("list-subject");
    }

    public function listSC(){
        return view("list-score");
    }

    public function addST(){
        return view("add-student");
    }

    public function addCL(){
        return view("add-classes");
    }

    public function addSB(){
        return view("add-subject");
    }

    public function addSC(){
        return view("add-score");
    }

    public function editST(){
        return view("edit-student");
    }

    public function editCL(){
        return view("edit-classes");
    }

    public function editSB(){
        return view("edit-subject");
    }

    public function editSC(){
        return view("edit-score");
    }
}

