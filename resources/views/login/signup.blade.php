@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sign Up</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="" id="signup_form" name="signup_form">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">First Name <span class="mandatory">*</span></label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" pattern="[A-Za-z]{3,}" title="First Name should be minimum 3 letters" placeholder="First Name" required autofocus onkeypress="myKeyPress('first_name')">
                                <strong><span class="red" id="first_name_err" style="display:none;"></span></strong>
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last Name <span class="mandatory">*</span></label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" pattern="[A-Za-z]" title="Alphabets Only Allowed!" placeholder="Last Name" required autofocus onkeypress="myKeyPress('last_name')">
                                <strong><span class="red" id="last_name_err" style="display:none;"></span></strong>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label for="phone_number" class="col-md-4 control-label">Phone Number <span class="mandatory">*</span></label>

                            <div class="col-md-6">
                                <input id="phone_number" type="number" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number" required autofocus onkeypress="myKeyPress('phone_number')">
                                <strong><span class="red" id="phone_number_err" style="display:none;"></span></strong>

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail <span class="mandatory">*</span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required onkeypress="myKeyPress('email')">
                                <strong><span class="red" id="email_err" style="display:none;"></span></strong>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password <span class="mandatory">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password"  required onkeypress="myKeyPress('password')">
                                <span class="showPwdSpan" id="pwd_view" onmouseover="mouseoverPass();" onmouseout="mouseoutPass();">
                                    <i class="fa fa-eye" ></i></span>
                                <strong><span class="red" id="password_err" style="display:none;"></span></strong>
                               <!--  @if ($errors->has('password'))
                                    <span class="help-block"> //onclick="showPassword(this)"
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif -->
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('promocode') ? ' has-error' : '' }} " id="promocodeDiv">
                            <label for="promocode" class="col-md-4 control-label">Promotion Code</label>

                            <div class="col-md-6">
                                <input id="promocode" type="text" class="form-control" name="promocode" placeholder="Promotion Code">

                                @if ($errors->has('promocode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('promocode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group promoDiv">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                                <a id="promo" onclick="showPromoCode()">Add a promo code</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="button" class="btn btn-primary" onclick="signup()" >
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                
        </div>
    </div>
</div>
<script type="text/javascript">
// Function to show the password 
function mouseoverPass(obj) {
  var obj = document.getElementById('password');
  obj.type = "text";
}
//Function to hide the password
function mouseoutPass(obj) {
  var obj = document.getElementById('password');
  obj.type = "password";
}
// function showPassword(icon){
//     alert();
//     var pwd = document.getElementById('password');
//     if(pwd.type ==='password'){
//         pwd.type = 'text';
//     }else{
//         pwd.type = 'password';
//     }
//     icon.classList.toggle("fa-eye-slash");
// } 
//Function to show the promotion code textbox
function showPromoCode(){
    document.getElementById('promocodeDiv').style.display = "block";
    document.getElementById('promo').style.display = "none";    
}   
function myKeyPress(input){
    if(input){
        document.getElementById(input +'_err').style.display="none";        
    }
}
 function signup() {
    var first_name = document.getElementById('first_name').value.length;
    var last_name = document.getElementById('last_name').value.length;
    var phone_number = document.getElementById('phone_number').value.length;
    var email = document.getElementById('email').value.length;
    var password = document.getElementById('password').value.length;
    if(first_name ==''){
        errMessage('first_name','First Name', 'required' );
    }else if(last_name ==''){
        errMessage('last_name','Last Name', 'required' );
        return false;
    }else if(phone_number ==''){
        errMessage('phone_number','Phone Number', 'required' );
        return false;
    }else if(email ==''){
        errMessage('email','Email', 'required' );
        return false;
    }else if(password ==''){
        errMessage('password','Password', 'required' );
        return false;
    }else if(password < 7){
        errMessage('password','The Password must be atleast 6 characters.', 'info' );      
        return false;
    }else{
        var kvpairs = [];
        var form = document.getElementById('signup_form');
        for ( var i = 0; i < form.elements.length; i++) {
           var e = form.elements[i];
           if(e.name){
                kvpairs.push(encodeURIComponent(e.name) + "=" + e.value);
           }
        }
        var queryString = kvpairs.join("&");
        var inputIDs ='';
        var inputVals ='';
        var http = new XMLHttpRequest();
        var url = 'signup';
        http.open('POST', url, true);
        http.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
        http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        http.onreadystatechange = function() {//Call a function when the state changes.
            if(http.readyState == 4 && http.status == 200) {
                var obj = JSON.parse(http.responseText);
                if(obj.status == true){
                    alert(obj.message);
                    document.getElementById('signup_form').reset();
                }else if(obj.status == false){                    
                    JSON.parse(obj.message, (key, value) => {   
                        if(isNaN(key) ==  true){
                            inputIDs  = key;
                        } else if(inputVals == ''){
                            inputVals  = value;
                        }  
                        if(inputIDs != '' && inputVals !=''){
                            errMessage(inputIDs, inputVals, 'info') ;
                           
                        }  
                    });     
                }
            }
        }
        http.send(queryString);  
    }
}

function errMessage(inputId, message, type){
    if(type == 'required'){
        document.getElementById(inputId + '_err').innerHTML = message +" is Required";
        document.getElementById(inputId + '_err').style.display ="block";
        document.getElementById(inputId).focus();           
    }else if(type == 'info'){
        if(isNaN(inputId)){
            document.getElementById(inputId + '_err').innerHTML = message;
            document.getElementById(inputId + '_err').style.display ="block";
            document.getElementById(inputId).focus(); 
        }       
    }       
}
</script>
@endsection
