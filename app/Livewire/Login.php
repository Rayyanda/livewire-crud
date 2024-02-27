<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{

    #[Validate]
    public $email = '';
    public $password = '';

    protected $rules = [
        'email' => 'required',
        'password' => 'required'
    ];

    public function render()
    {
        return view('livewire.login');
    }

    /**
     * login
     * 
     */

     public function login()
     {
        $validated = $this->validate();

        if(Auth::attempt($validated))
        {
            return redirect()->to('/');
        }else{
            session()->flash('error', 'Email or Password is incorrect!');
            
        }

     }

     public function logout()
     {
        Auth::logout();
        return redirect()->to('/login');
     }
}
