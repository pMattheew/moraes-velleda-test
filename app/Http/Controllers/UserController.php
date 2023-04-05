<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Update the specified resource's role in storage.
     */
    public function update_role(Request $request)
    {
        $user = $request->user();

        $user->role = 'admin';

        $user->save();

        return Redirect::route('profile.edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
