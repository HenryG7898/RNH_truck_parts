<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Signup extends Component
{
    public $first_nm;
    public $last_nm;
    public $gender;
    public $DOB;
    public $email;
    public $password;
    public $user_type;

    public function render()
    {
        return view('livewire.signup');
    }

        protected $rules = [
            'first_nm' => ['required', 'string', 'max:255'],
            'last_nm' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'DOB' => ['required', 'date'],
            'gender' => ['required', 'string'],
            'phone_nbr' => ['required', 'numeric'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ];

    public function register(){


            $this->validate();

            User::create([
                'first_nm' => $this->first_nm,
                'last_nm' => $this->last_nm,
                'username' => $this->username,
                'address' => $this->address,
                'DOB' => $this->DOB,
                'profile_image' => $this->profile_image,
                'gender' => $this->gender,
                'email' => $this->email,
                'user_type' => 'User',
                'password' => $this->password,
            ]);

            session()->flash('success', 'Student Added Successfully');


        }

        public function updated()
        {
            $this->validate();
        }

}
