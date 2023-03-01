<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;
use App\Models\Project;
use App\Models\GroupProject;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin/index');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'type'=>'required',
        ]);

        $input = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'type'=>$request->type
        );

        User::create($input);
        return redirect()->back()->with('success', 'New User Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userShow(User $users)
    {
        $users = User::all();

        return view('admin/user', compact(['users']));
    }
    public function groupShow(GroupProject $group_projects)
    {
        $group_projects = GroupProject::all();

        return view('admin/group', compact(['group_projects']));
    }
    public function projectShow(Project $projects, GroupProject $group_projects)
    {   
        $projects = Project::all();

        return view('admin/project', compact(['group_projects', 'projects']));
    }
    public function taskShow(Task $tasks)
    {
        $tasks = Task::all();

        return view('admin/task', compact(['tasks']));
    }
    public function feedbackShow(Feedback $feedbacks)
    {
        $feedbacks = Feedback::all();

        return view('admin/feedback', compact(['feedbacks']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userUpdate(Request $request, User $users)
    {
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'type'=>'required',
        ]);

        $id = $request->input('id');
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = bcrypt($request->input('password'));
        $users->type = $request->input('type');
        $users->save();

        return redirect()->back()->with('success', 'Updated Task Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function groupDestroy(Request $request, GroupProject $group_projects)
    {
        $id = $request->input('id');
        GroupProject::find($id)->delete();

        return redirect()->back()->with('success', 'Deleted Group Project Successfully');
    }
    public function projectDestroy(Request $request, Project $projects)
    {
        $id = $request->input('id');
        Project::find($id)->delete();

        return redirect()->back()->with('success', 'Deleted Update Successfully');
    }
    public function taskDestroy(Request $request, Task $tasks)
    {
        $id = $request->input('id');
        Task ::find($id)->delete();

        return redirect()->back()->with('success', 'Deleted Task Successfully');
    }
    public function feedbackDestroy(Request $request, Feedback $feedbacks)
    {
        $id = $request->input('id');
        Feedback::find($id)->delete();

        return redirect()->back()->with('success', 'Deleted Feedback Successfully');
    }
}
