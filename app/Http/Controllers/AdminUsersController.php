<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\FaqCategory;
use App\Models\News;
use App\Models\Question;
use App\Models\QuestionRequest;
use App\Models\User;
use App\Models\UsertypeRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{

    public function showAdminUsers()
    {
        $users = User::all();



        return view('admin.users', compact('users'));
    }

    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();


        return redirect()->back()->with("status", "USER DELETED");
    }
    /**
     * Display a listing of the resource.
     */
    public function userBlock(Request $request)
    {
        $validated = $request->validate([
            "userId" => "required",
        ]);

        $id = $validated["userId"];
        $user = User::findOrFail($id);
        $user->is_banned = true;
        $user->save();

        return redirect()->back()->with("status", "USER BANNED");
    }

    public function userUnBlock(Request $request)
    {
        $validated = $request->validate([
            "userId" => "required",
        ]);

        $id = $validated["userId"];
        $user = User::findOrFail($id);
        $user->is_banned = false;
        $user->save();

        return redirect()->back()->with("status", "USER UNBANNED");
    }


    public function resetPassword(Request $request)
    {
        $validated = $request->validate([
            "userId" => 'required',
            "password" => 'required',
        ]);

        $userId = $validated['userId'];
        $password = $validated['password'];
        $user = User::findOrFail($userId);

        $user->password = Hash::make($password);
        $user->save();


        return redirect()->back()->with("status", "USER PASSWORD RESETTED");
    }

    public function updateUser(Request $request)
    {

        $validated = $request->validate([
            'userId' => 'required',
            'avatar' => 'image',
        ]);

        $user = User::findOrFail($validated['userId']);

        
        if (isset($validated['avatar'])) {
            $avatarName = $user->email;
            $avatarExt = $validated['avatar']->getClientOriginalExtension();
            $avatar = $avatarName . '.' . $avatarExt;
            $validated['avatar']->move(public_path('img/avatars/'), $avatar);
            $user->avatar = 'img/avatars/' . $avatar;
        }

        if($request->birthday != null){
            $user->birthday = $request->birthday;
        }

        if($request->about != null){
            $user->about = $request->about;
        }
        
        $user->save();


        return redirect()->back()->with('status', 'USERINFORMATIONS UPDATED');
    }

    public function createUser(Request $request){

        $validated = $request->validate([
            "name" => 'required',
            "email" => ['required', 'email'],
            'avatar' => ['image', 'max:10240'],
            'usertype' => 'required',
            'password' => ['required', 'min:8'],

        ]);

        $user = new User();

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->usertype = $validated['usertype'];
        $user->password = Hash::make($validated['password']);


        if(isset($validated['avatar'])){
            $avatarName = $user->email;
            $avatarExt = $validated['avatar']->getClientOriginalExtension();
            $avatar = $avatarName . '.' . $avatarExt;
            $validated['avatar']->move(public_path('img/avatars/'), $avatar);
            $user->avatar = 'img/avatars/' . $avatar;

        }

        if($request->birthday){
            $user->birthday = $request->birthday;
        }

        if($request->about){
            $user->about = $request->about;
        }

        $user->save();



        return redirect()->back()->with("status", "USER CREATED");
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
