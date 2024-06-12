<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function showStudent(){
                $students = DB::table('students')
                ->select('id','name','age')
                ->where('id', '<', 16)
                ->orWhere('age','<', 20)
                ->get();

        // $students = DB::table('students')->where('id',2)->get();
        // $students = DB::table('students')->where('id',3)->get();

        // return $students;
        // dd($students);
        // dump($students);
        // foreach($students as $stu){
        //     echo $stu->name;
        //     echo "<br>";
        //     echo $stu->age;
        //     echo "<br>";
        // }
        return view('allStudents',['data'=> $students]);
    }

    public function singleStudent(string $id) {
        $students = DB::table('students')->where('id',$id)->get();
        // return view('allStudents',['data'=> $students]);
        return view('student', ['data'=> $students]);
    }

    public function deleteStudent(string $id) {
        $student = DB::table('students')->where('id', $id)->delete();

        if($student) {
            return redirect()->route('students');
        }
    }
}
