<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseQuestion;
use App\Models\StudentAnswer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\Count;

class LearningController extends Controller
{
    // function index() {
    //     $user = Auth::user();

    //     $my_courses = $user->courses()->with('category')->orderBy('id', 'DESC')->get();

    //     foreach ($my_courses as $course) {
    //         $totalQuestionsCount = $course->questions()->count();

    //         $answeredQuestionsCount = StudentAnswer::where('user_id', $user->id)->whereHas('question', function ($query) use ($course){
    //             $query->where('course_question_id', $course->id);
    //         })->distinct()->count('course_question_id');

    //         if ($answeredQuestionsCount < $totalQuestionsCount) {
    //             $firstUnansweredQuestion = CourseQuestion::where('course_id', $course->id)->whereNotIn('id', function ($query) use ($user) {
    //                 $query->select('course_question_id')->from('student_answers')->where('user_id', $user->id);
    //             })->orderBy('id', 'asc')->first();

    //             $course->nextQuestionId = $firstUnansweredQuestion ? $firstUnansweredQuestion->id : null;
    //         } else {
    //             $course->nextQuestionId = null;
    //         }

    //     }
    //     return view('student.courses.index', [
    //         'my_courses' => $my_courses,
    //     ]);
    // }

    // function learning(Course $course, $question) {
    //     $user = Auth::user();
    //     $isEnrolled = $user->courses()->where('course_id', $course->id)->exists();

    //     if (!$isEnrolled) {
    //         abort(404);
    //     }

    //     $currentQuestion = CourseQuestion::where('course_id', $course->id)->where('id', $question)->firstOrFail();

    //     return view('student.courses.learning', [
    //         'course' => $course,
    //         'question' => $currentQuestion,
    //     ]);
    // }

    public function index(){

        $user = Auth::user();

        $my_courses = $user->courses()->with('category')->orderBy('id', 'DESC')->get();

        foreach($my_courses as $course){
            $totalQuestionsCount = $course->questions()->count();

            $answeredQuestionsCount = StudentAnswer::where('user_id', $user->id)
            ->whereHas('question', function ($query) use ($course){
                $query->where('course_question_id', $course->id);
            })->distinct()->count('course_question_id');

            if($answeredQuestionsCount < $totalQuestionsCount){
                $firstUnansweredQuestion = CourseQuestion::where('course_id', $course->id)
                ->whereNotIn('id', function($query) use ($user) {
                    $query->select('course_question_id')->from('student_answers')
                    ->where('user_id', $user->id);
                })->orderBy('id', 'asc')->first();

                // 10, 2, 3 .... 10 ... null
                $course->nextQuestionId = $firstUnansweredQuestion ? $firstUnansweredQuestion->id : null;
            }
            else {
                $course->nextQuestionId = null;
            }
        }

        return view('student.courses.index', [
            'my_courses' => $my_courses,
        ]);
    }

    public function learning(Course $course, $question){
        $user = Auth::user();

        $isEnrolled = $user->courses()->where('course_id', $course->id)->exists();

        if(!$isEnrolled){
            abort(404);
        }

        $currentQuestion = CourseQuestion::where('course_id', $course->id)->where('id', $question)->firstOrFail();

        return view('student.courses.learning', [
            'course' => $course,
            'question' => $currentQuestion,
        ]);
    }

    function learning_raport(Course $course){

        // $userId = Auth::id();

        // $studentAnswers = StudentAnswer::with('question')->whereHas('question', function ($query) use ($course) {
        //     $query->where('course_id', $course->id);
        // })->where('user_id', $userId)->get();

        // $totalQuestions = CourseQuestion::where('course_id', $course->id)->count();
        // $correctAnswerCount = $studentAnswers->where('answer', 'correct')->count();
        // $passed = $correctAnswerCount == $totalQuestions;

        $userId = Auth::id();
        $studentAnswers = StudentAnswer::with('question')->whereHas('question', function ($query) use ($course) {
            $query->where('course_id', $course->id);
        })->where('user_id', $userId)->get();
        $totalQuestions = CourseQuestion::where('course_id', $course->id)->count();
        $correctAnswerCount = $studentAnswers->where('answer', 'correct')->count();
        $passed = $correctAnswerCount == $totalQuestions;

        return view('student.courses.learning_raport', [
            'course' => $course,
            'studentAnswers' => $studentAnswers,
            'totalQuestions' => $totalQuestions,
            'correctAnswerCount' => $correctAnswerCount,
            'passed' => $passed,
        ]);
    }

    function learning_finished(Course $course) {
        return view('student.courses.learning_finish', [
            'course' => $course,
        ]);
    }
}
