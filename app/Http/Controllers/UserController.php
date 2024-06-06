<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recette;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\View\View;





class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show the profile for the given user.
     */
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => Redis::get('user:profile:' . $id)
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::select()
            ->orderby('name')
            ->paginate(10);
        $recettes = Recette::all();
        return view('user.index', ["users" => $users, "recettes" => $recettes]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $validated = $request->validated();

        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect(route('user.index'))->withSuccess('User created successfully!');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }

    public function forgot()
    {
        return view('user.forgot');
    }

    /**
     * Get the recettes for the user.
     */
    public function recettes(): HasMany
    {
        return $this->hasMany(Recette::class);
    }
}
