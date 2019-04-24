@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center"><h4><b>{{Session('username')}}</b></h4></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" id="signinpwd_form" name="signinpwd_form">
                        {{ csrf_field() }}

                        <div class="col-md-12  col-md-offset-3">
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Enter Your Password</label>
                            </div>
                        </div>
                         <div class="col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}" align="center">
                            <div class="col-md-6 col-md-offset-4">
                                <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}"   required="required" autofocus onkeypress="myKeyPress()">
                                <span class="showPwdSpan" style="margin-left: 293px;margin-top:-64px;"><i class="fa fa-eye" onclick="showPassword(this)"></i></span>
                            </div>                              

                        </div>
                        <div class="form-group">
                             <div class="col-md-8 col-md-offset-4">
                                <strong><span class="red" id="password_err" style="display:none;"></span></strong>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="button" class="btn btn-primary" id="nextBtnOne" style="width:43%" onclick="signinPwd()">
                                    Next
                                </button>                               
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-1" align="right" >
                                <a id="promo" style="margin-right: 34px;" href="">Forgot Password?</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

// Function to show/hide the password 
function showPassword(icon){
    var pwd = document.getElementById('password');
    if(pwd.type ==='password'){
        pwd.type = 'text';
    }else{
        pwd.type = 'password';
    }
    icon.classList.toggle("fa-eye-slash");
} 

function myKeyPress() {     
    document.getElementById('password_err').style.display="none";     
}

function signinPwd() {
    var pwd = document.getElementById('password').value.length;
    if(pwd ==''){
        document.getElementById('password_err').style.display="block";
        document.getElementById('password_err').innerHTML ='Please Enter the Password';
        document.getElementById('password').focus();
        return false;
    }
    var kvpairs = [];
    var form = document.getElementById('signinpwd_form');
    for ( var i = 0; i < form.elements.length; i++) {
       var e = form.elements[i];
       if(e.name){
            kvpairs.push(encodeURIComponent(e.name) + "=" + e.value);
       }
    }
    var queryString = kvpairs.join("&");
    var http = new XMLHttpRequest();
    var url = 'signin';
    http.open('POST', url, true);
    http.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
            var obj = JSON.parse(http.responseText);
            if(obj.status == true){
                window.location.href ="profile";
            }else if(obj.status == false){
                document.getElementById('password_err').style.display="block";
                document.getElementById('password_err').innerHTML = obj.message;
                document.getElementById('password').focus();        
            }
        }
    }
    http.send(queryString);  
}

// var pwds = document.getElementById('password');
// pwds.addEventListener("keydown", function(e){
//     alert();
//     if(e.keycode === 13){
//         siginPwd();
//     }
// });


</script>
@endsection
