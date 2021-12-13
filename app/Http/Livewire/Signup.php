<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\User;
use Livewire\Component;

class Signup extends Component
{
    public $first_nm;
    public $last_nm;
    public $username;
    public $address;
    public $phone_nbr;
    public $profile_image;
    public $gender;
    public $checkbox;
    public $DOB;
    public $email;
    public $password;
    public $user_type;

    use WithFileUploads;

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

    protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
    ];

    public function register(){


            $this->validate();

//        $this->profile_image->store('public');

        User::create([
                'first_nm' => $this->first_nm,
                'last_nm' => $this->last_nm,
                'username' => $this->username,
                'address' => $this->address,
                'phone_nbr' => $this->phone_nbr,
                'DOB' => $this->DOB,
//                'profile_image' => $this->profile_image->store('public'),
                'gender' => $this->gender,
                'email' => $this->email,
                'T_&_C' => $this->checkbox,
                'user_type' => 'User',
                'password' => $this->password,
            ]);

            session()->flash('success', 'You have successfully registered');

        }

        public function updated()
        {
            $this->validate();
        }

}
