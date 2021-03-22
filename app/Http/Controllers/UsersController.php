<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Gate;
use Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (Auth::check()) {
        //     if(Gate::allows('IsAdmin')){
                $users = User::all();
                return view('user.index', ['users' => $users]);
        
            //     $results = DB::table('leagues')
                // ->join('countries', 'leagues.country_id', '=', 'countries.country_id')
                // ->where('countries.country_name', $country)
                // ->get();
        
        //     }
        //     return back()->withInput();
        // }
        // return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (Auth::check()) {
        //     if(!Gate::allows('IsAdmin')){
                return view('user.create');
    //         }
    //     return back()->withInput();
    // }
    // return redirect('/login');
        
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
            'name' => 'required|max:200',
            'email' => 'required|unique:users|email|',
            'password' => 'required',
            ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password = Hash::make('{{$password}}');
        $user->level_id = '6';
        
        $user->save();

        return redirect('/user')->with('status','User di tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.detail', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        User::where('id', $user->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'level_id' => $request->level_id,
            ]);
        return redirect('/user')->with('status','Data user diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {   
        User::destroy($user->id);
        return redirect('/user')->with('status','Data user dihapus.');
    }
}
