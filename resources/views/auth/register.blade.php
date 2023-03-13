@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}"  id="myForm">
                        @csrf

                        <div class="mb-4 row">
                            <small class="mb-5 text-secondary">I campi con <strong class="text-black">(*)</strong> sono obbligatori</small>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control error  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}*</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>

                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}*</label>
                            
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}*</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}*</label>

                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <script>
                                // get form values
                                const form = document.getElementById("myForm");
                                const name = document.getElementById("name").value;
                                const surname = document.getElementById("surname").value;
                                const email = document.getElementById("email").value;
                                const password = document.getElementById("password").value;
                                const password_confirmation = document.getElementById("password-confirm").value;
                                
                                const SuccesMsg = (userNameVal) => {
                                    let formControl = document.getElementsByClassName('form-control');
                                    var Count = formControl.length - 1;
                                    for (var i = 0; i < formControl.length; i++){
                                        if (formControl[i].className === "form-control success"){
                                            var sRate = 0 + i;
                                            console.log(sRate);
                                        }else{
                                            return false;
                                        }
                                    }
                                }
                                const isEmail = (emailVal) =>{
                                    var atSymbol = emailVal.indexOf('@');
                                    if(atSymbol < 1) return false;

                                    var dot = emailVal.lastIndexOf('.');
                                    if(dot <= atSymbol + 2) return false;

                                    if(dot === emailVal.length -1) return false;

                                    return true;
                                }

                                form.addEventListener('submit', (event) => {
                                    event.preventDefault();

                                    Validate();
                                });

                                function Validate(){
                                    const userNameVal = name.value.trim();
                                    const userSurnameVal = surname.value.trim();
                                    const emailVal = email.value.trim();
                                    const passwordVal = email.value.trim();
                                    const password_confirmationVal = password_confirmation.value.trim();

                                    //User NAME
                                    if(userNameVal === ""){
                                        SetErrorMsg(name, "Il nome è obbligatorio");
                                    }else if (userNameVal.legth <= 2){
                                        SetSuccessMsg(name, "Il minino è di 3 caratteri");
                                    }else{
                                        SetSuccessMsg(name);
                                    }

                                    //User SURNAME
                                    if(userSurnameVal === ""){
                                        SetErrorMsg(surname, "Il cognome è obbligatorio");
                                    }else if (userSurnameVal.legth <= 2){
                                        SetSuccessMsg(surname, "Il minino è di 3 caratteri");
                                    }else{
                                        SetSuccessMsg(surname);
                                    }

                                    //User EMAIL
                                    if(emailVal === ""){
                                        SetErrorMsg(email, "L'email è obbligatoria");
                                    }else if (!isEmail(emailVal)){
                                        SetSuccessMsg(email, "L'email non è valida");
                                    }else{
                                        SetSuccessMsg(email);
                                    }

                                    //User PASSWORD
                                    if(passwordVal === ""){
                                        SetErrorMsg(password, "La password è obbligatoria");
                                    }else if (passwordVal.legth <= 7){
                                        SetSuccessMsg(password, "La password deve contenere almeno 8 caratteri");
                                    }else{
                                        SetSuccessMsg(password);
                                    }

                                    //User CONFIRM PASSWORD
                                    if(password_confirmationVal === ""){
                                        SetErrorMsg(password_confirmation, "Inserisci la password di nuovo");
                                    }else if (password_confirmationVal != passwordVal){
                                        SetSuccessMsg(password_confirmation, "La password non combacia");
                                    }else{
                                        SetSuccessMsg(password_confirmation);
                                    }


                                    SuccessMsg(userNameVal);
                                }

                                function SetErrorMsg(input, errormsg){
                                    const formControl = input.parentElement;
                                    const small = formControl.querySelector('small');
                                    formControll.className = "form-control error";
                                    small.InnerText = errormsg;
                                }

                                function SetSuccessMsg(input){
                                    const formControl = input.parentElement;
                                    formControll.className = "form-control success";
                                }

                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
