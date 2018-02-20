<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
  
    public function edit(User $user)
    {
        $settings = json_decode($user->settings);
    return view ('home', compact('user', 'settings'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
            $this->authorize('update', $user);

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'pagination' => 'required',
    ]);

    $user->update([
        'name'=> $request->name,
        'email' => $request->email,
        'settings' => json_encode(['pagination' => $request->pagination]),

    ]);
     flashy('Profil mise à jour');
        return back(); 
    }

}
