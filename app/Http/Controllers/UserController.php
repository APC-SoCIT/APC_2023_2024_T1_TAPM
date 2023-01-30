<?php

namespace App\Http\Controllers;

use App\Models\GroupProject;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the Student dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function studentHome()
    {
        return view('student/home');
    }

    /**
     * Show the Faculty dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function facultyHome()
    {
        return view('faculty/home');
    }

    /**
     * Show the Client dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clientHome()
    {
        return view('client/home');
    }
    /**
     * Show the Project Development Director dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function officeHome()
    {
        return view('office/home');
    }
}
