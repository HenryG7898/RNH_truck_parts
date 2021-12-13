<div>
    <div class="modal">
        <div class="modal-content">
            <form wire:submit.prevent="register" id="myForm">
                <h2 class="font" style="text-align: center;">Sign Up</h2>
                <p id="close">x</p>



                <div id="names">
                    <div class="firstname">
                        <label for="first_nm">First Name:</label>
                        <input type="text" wire:model="first_nm" placeholder="Enter First Name">
                        @error('first_nm') <span class="error text-red-600">{{ $message }}</span> @enderror
                        <span > <i class="fas fa-exclamation-circle"></i> Required field</span>
                    </div>

                    <div class="lastname">
                        <label for="last_nm">Last Name:</label>
                        <input type="text" wire:model="last_nm" placeholder="Enter Last Name">
                        @error('last_nm') <span class="error text-red-600">{{ $message }}</span> @enderror
                        <span><i class="fas fa-exclamation-circle"></i>Required field</span>
                    </div>
                    <div class="username">
                        <label for="User_nm">Username:</label>
                        <input type="text" wire:model="username" placeholder="Enter Username">
                        @error('username') <span class="error text-red-600">{{ $message }}</span> @enderror
                        <span><i class="fas fa-exclamation-circle"></i>Required field</span>
                    </div>

                    <div class="email">
                        <label for="email">Email:</label>
                        <input type="email" wire:model="email" placeholder="Enter Email">
                        @error('email') <span class="error text-red-600">{{ $message }}</span> @enderror

                        <span><i class="fas fa-exclamation-circle"></i>Please enter a valid email</span>
                    </div>

                    <div class="phoneNumber">
                        <label for="phoneNumber">Phone Number:</label>
                        <input type="text" wire:model="phone_nbr" placeholder="Enter Phone Number">
                        @error('phone_nbr') <span class="error text-red-600">{{ $message }}</span> @enderror
                        <span><i class="fas fa-exclamation-circle"></i>Please enter a valid phone number</span>
                    </div>

{{--                <div id="dobGender">--}}

                    <div class="dob">
                        <label for="birthday">Date of Birth:</label> <br>
                        <input type="date" id="birthday" wire:model="DOB">
                        @error('DOB') <span class="error text-red-600">{{ $message }}</span> @enderror

                        <span><i class="fas fa-exclamation-circle"></i>Required field</span>
                    </div>



                    <div class="gender">
                        <p style="margin-bottom: 4px;">Gender:</p>
                        <input type="radio" id="mail" wire:model="gender" value="male">
                        <label for="male">Male</label><br>
                        <input type="radio" id="female" wire:model="gender" value="female">
                        <label for="female">Female</label><br>
                        @error('gender') <span class="error text-red-600">{{ $message }}</span> @enderror

                    </div>

{{--                </div>--}}

                    <div class="address">
                        <label for="address">Address:</label>
                        <textarea wire:model="address" id="" placeholder="Enter your Address"></textarea>
                        @error('address') <span class="error text-red-600">{{ $message }}</span> @enderror

                        <span><i class="fas fa-exclamation-circle"></i>Required field</span>
                    </div>

                    <div class="password">
                        <label for="password">Password:</label>
                        <input type="password" placeholder="Password" wire:model="password" id="password">
                        @error('password') <span class="error text-red-600">{{ $message }}</span> @enderror

                        <span><i class="fas fa-exclamation-circle"></i>Please enter a valid password</span>
                        <!-- <p id="seeMe">O</p> -->
                    </div>

                    <div class="confirmPass">
                        <label for="re-password">Re-enter password:</label>
                        <input type="password" placeholder="Confirm" wire:model="password" id="re-password">
                        @error('password') <span class="error text-red-600">{{ $message }}</span> @enderror

                        <span><i class="fas fa-exclamation-circle"></i>Password does not match</span>
                    </div>

                    <div class="submit">
                        <input type="submit" value="submit">
                    </div>


                    <div class="checkBox" style="text-align: center; margin: 0;">
                        <input type="checkbox" wire:model="checkbox" id="" value="1">
                        <label for="checkbox">I agree to the legal terms. </label>
                    </div>

                    <div class="already" style="text-align: center; margin: 0; padding: 0;">
                        <p>Already have an account? <a href="#">Sign in</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

    let inputs = document.querySelectorAll('input');

    const list = {
        fName : /^[a-z\d]+$/,
        lName : /^[a-z\d]+$/,
        email : /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
        phoneNumber : /^\d{10}$/,
        password: /^[\w@-]{8,20}$/,
    };

    function validate(field,regex){
        if(regex.test(field.value)){
            field.className = 'valid';
        }else{
            field.className = 'invalid'
        }
    }

    inputs.forEach((input)=>{
        input.addEventListener('keyup',(e)=>{
            validate(e.target,list[e.target.attributes.name.value])
        });
    });

    // re-enter password function
    let password = document.getElementById('password').value;
    let rePassword = document.getElementById('re-password').value

    if(!rePassword == password){

    }



    // password visibility
    // let seeMe = document.getElementById('seeMe');

    // seeMe.addEventListener('click' , ()=>{
    //     var x = document.getElementById("password");
    //     if (x.type === "password") {
    //     x.type = "text";
    //   } else {
    //     x.type = "password";
    //   }
    // })

    swal({
        // position: "top-end",
        title: "Good job!",
        text: "You clicked the button!",
        icon: "success",
        button: "Aww yiss!",
    });

</script>


