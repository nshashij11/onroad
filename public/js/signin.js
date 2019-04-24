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