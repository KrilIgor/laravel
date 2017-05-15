<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{

    /**
     * Show user.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $profile_id = User::find($id)->profile_id;

        User::find($id)->update([
            'name' => $request->get('name'),
            'email' => $request->get('email')
        ]);

        Profile::find($profile_id)->update([
            'last_name' => $request->get('last_name'),
            'age' => $request->get('age'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
        ]);

        return redirect()->route('user.show', ['id' => $id])
            ->with('success', 'Item updated successfully');
    }

}
    