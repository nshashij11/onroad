@extends('layouts.app')

@section('content')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script src="/js/signin.js" type="text/javacript"></script> -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sign In</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" id="signin_form" name="signin_form">
                        {{ csrf_field() }}

                        <div class="col-md-12  col-md-offset-3" align="center">
                            <div class="form-group ">
                                <label for="email" class="col-md-4 control-label">Email or Mobile Number</label>
                            </div>
                        </div>
                         <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}" align="center">
                            <div class="col-md-6 col-md-offset-4">
                                <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus onkeypress="myKeyPress()">
                            </div>
                        </div>  
                        <div class="form-group">
                             <div class="col-md-8 col-md-offset-4">
                                <strong><span class="red" id="email_err" style="display:none;"></span></strong>
                            </div>
                        </div>                  
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="button" class="btn btn-primary" id="nextBtnOne" style="width:66%" onclick="checkUsername()">
                                    Next
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
function myKeyPress(){
    document.getElementById('email_err').style.display ="none";
}
 function checkUsername() {
    var username = document.getElementById('email').value.length;
    if(username ==''){
        document.getElementById('email_err').style.display ="block";
        document.getElementById('email_err').innerHTML ="Please Enter the Email/Mobile Number!";
        document.getElementById('email').focus();
        return false;
    }
    var kvpairs = [];
    var form = document.getElementById('signin_form');
    for ( var i = 0; i < form.elements.length; i++) {
       var e = form.elements[i];
       if(e.name){
            kvpairs.push(encodeURIComponent(e.name) + "=" + e.value);
       }
    }
    var queryString = kvpairs.join("&");

    var http = new XMLHttpRequest();
    var url = 'checkusername';
    http.open('POST', url, true);
    http.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
            var obj = JSON.parse(http.responseText);
            if(obj.status == true){
                window.location.href="signinpwd";
            }else if(obj.status == false){
                document.getElementById('email').focus();    
                document.getElementById('email_err').style.display ="block";
                document.getElementById('email_err').innerHTML =obj.message;
                return false;      
            }
        }
    }
    http.send(queryString);  
}
</script>
@endsection
