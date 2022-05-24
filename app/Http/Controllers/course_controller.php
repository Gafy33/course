<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class course_controller extends Controller
{
    public function index()
    {
        $liste_courses = Course::all();

        return view('welcome', ['liste_course' => $liste_courses]);
    }

    public function create(Request $request)
    {
        $course = new Course;

        $course->course = $request->input('course');
        $course->valide = "0";

        $course->save();

        return redirect()->action(
            [course_controller::class, 'index']
        );
    }

    public function valide($id)
    {
        $course = Course::find($id);

        $course->valide = 1;

        $course->update();

        return redirect()->action(
            [course_controller::class, 'index']
        );
    }

    public function devalide($id)
    {
        $course = Course::find($id);

        $course->valide = 0;

        $course->update();

        return redirect()->action(
            [course_controller::class, 'index']
        );
    }

    public function delete($id)
    {
        $course = Course::find($id);

        $course->delete();

        return redirect()->action(
            [course_controller::class, 'index']
        );
    }
}
