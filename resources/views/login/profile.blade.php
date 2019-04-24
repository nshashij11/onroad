@extends('layouts.app')

@section('content')
<style>
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html {
  font-family: Helvetica, Arial, sans-serif;
  font-size: 100%;
  background: #333;
  -webkit-font-smoothing: antialiased;
}

#page-wrapper {
  width: 640px;
  background: #FFFFFF;
  padding: 1em;
  margin: 1em auto;
  border-top: 5px solid #69c773;
  box-shadow: 0 2px 10px rgba(0,0,0,0.8);
}

h1 {
  margin-top: 0;
}

label {
  display: block;
  margin-top: 2em;
  margin-bottom: 0.5em;
  color: #999999;
}

input {
  width: 100%;
  padding: 0.5em 0.5em;
  font-size: 1.2em;
  border-radius: 3px;
  border: 1px solid #D9D9D9;
}

button {
  display: inline-block;
  border-radius: 3px;
  border: none;
  font-size: 0.9rem;
  padding: 0.5rem 0.8em;
  background: #69c773;
  border-bottom: 1px solid #498b50;
  color: white;
  -webkit-font-smoothing: antialiased;
  font-weight: bold;
  margin: 0;
  width: 100%;
  text-align: center;
}

button:hover, button:focus {
  opacity: 0.75;
  cursor: pointer;
}

button:active {
  opacity: 1;
  box-shadow: 0 -3px 10px rgba(0, 0, 0, 0.1) inset;
}

</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>My Profile</h3></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" id="profile_form" enctype="multipart/form-data" name="profile_form">
                        {{ csrf_field() }}
                        <div class="panel-heading"><h4>General Information</h4></div>

                        <div class="col-md-12">

                            <div class="row">
                            	<div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="fullname" class="col-md-5 control-label  ">
                                        Name</label>             
                                    </div>
                                </div>
                                 <div class="col-md-2">
                                    <div class="form-group">         
                                    	<div>{{$users->first_name}}</div>                       
                                    </div>
                                </div>
                                <div class="col-md-1" align="center">
                                    <div class="form-group">         
                                    	<div>{{$users->last_name}}</div> 
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="location" class="col-md-7 control-label">
                                        Location</label>             
                                    </div>
                                </div>
                                 <div class="col-md-2">
                                    <div class="form-group">         
                                    	 <input type="text" id="location" name="location" list="locations" placeholder="Type To Search Location" class="form-control" value="{{$users->location}}">
									  
                  									  	<datalist id="locations">
                  										  	@foreach($locations as $locs)
                  										    	<option value="{{$locs->country_name}}">
                  										   	@endforeach									 
                  										  </datalist>	                     
                                    </div>
                                </div>
                                <div class="col-md-1" align="center">
                                    <div class="form-group">         
                                    	<!-- <div>00000</div>  -->
                                    </div>
                                </div>                                
                            </div>

                       
                        <div class="row">
                        		<div class="col-md-1"></div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="profilephoto" class="control-label">
                                    Profile Photo</label>             
                                </div>
                            </div>
                             <div class="col-md-2">
                                <div class="form-group">         
                                	<input type="file" id="photo" name="photo" accept="image/*" onchange="loadFile(event)">                        
                                </div>
                            </div>
                            <div class="col-md-1">
                              <img id="viewProfilePic" src="{{$profilePic}}" width="50px;" height="50px"/>   
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="mobile" class="col-md-6 control-label">
                                    Mobile</label>             
                                </div>
                            </div>
                             <div class="col-md-1">
                                <div class="form-group">         
                                	     India       
                                </div>
                            </div>
                            <div class="col-md-1" align="center">
                                <div class="form-group">         
                                	<div>{{$users->phone_number}}</div> 
                                </div>
                            </div>                                
                        </div>
                      

                        	<div class="row">
                        		<div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="language" class="col-md-4 control-label">
                                        Language</label>             
                                    </div>
                                </div>
                                 <div class="col-md-2">
                                    <div class="form-group">         
                                    	<input type="text" name ="language" id="language" list="languages" placeholder="Type To Search Language" class="form-control" value="{{$users->language}}">									  
                  									  	<datalist id="languages">
                  										  	@foreach($languages as $lang)
                  										    	<option value="{{$lang->name}}">
                  										   	@endforeach									 
                  										</datalist>	     
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="mobile" class="col-md-8 control-label">
                                        Invite Code</label>             
                                    </div>
                                </div>
                                 <div class="col-md-1">
                                    <div class="form-group" id="promocode">         
                                    	{{$users->promocode}}     
                                      <input type="hidden" name="promocode" value="{{$users->promocode}}"> 	
                                    </div>
                                </div>
                                <div class="col-md-3" align="left">
                                    <div class="form-group">         
                                    	<div id="customizeDiv" ><a class="promo" onclick="showPromoInput()">Customize</a></div> 
                                      <div class="displayNone" id="promoCodeDiv">
                                        <!-- <label class="fLeft">uber</label> -->
                                        <input type ="text"  id="newPromocode" name="newPromocode" class="form-control fLeft" style="width:60%;" required>
                                        <input type ="button" class="btn btn-primary" value="Claim" onclick="claimPromocode()">
                                      </div>
                                    </div>
                                </div>                                
                            </div>

                            <div class="row">
                        		<div class="col-md-1"></div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="email" class="control-label">
                                        Email Address</label>             
                                    </div>
                                </div>
                                 <div class="col-md-2">
                                    <div class="form-group">         
                                    	{{$users->email}}     
                                    
                                    </div>
                                </div>
                                <div class="col-md-1">
                                   <div class="form-group">         
                                    <span class="pull-right promo" onclick="addNewEmail()"><a><i class="fa fa-plus" title="Add New Email Address"></i></a></span>
                                  </div>
                                </div>
                            </div>

                            <div id="appendNewEmail">

                            </div>

                            <!-- <div class="row">
                              <div class="col-md-1"></div>
                              <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="email" class="control-label">
                                        Email Address<span id="emailCount"></span></label>           
                                    </div>
                                </div>
                            	<div class="col-md-2">
                            				<div class="form-group">
                                      <input type="text" class="form-control" id="newEmail" name="newEmail">
                                    </div>          
                              </div>
                              <div class="col-md-1">                                
                                <span class="promo"><a><i class="fa fa-close fa-2x"></i></a></span>
                              </div>    
                                                            
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-3" style="margin-left: -15px;">
                                   <span>
                                        Send receipts from
                                    </span>  
                                  <select class="form-control">
                                    <option value="All">All</option>
                                    <option value="None" selected>None</option>
                                    <option value="Cash">Cash</option>
                                  </select>
                                </div>
                            </div> -->

                            <div class="col-md-2 pull-right" >
                            	<div class="form-group">
                            		<input type="button" value="Save" id="submitProfile" class="btn btn-primary" onclick="return saveProfile()">
                            	</div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

function loadFile(event) {
    var formData = new FormData(); 
    var file = document.getElementById("photo").files[0];
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
        alert('Please select a valid image file');
        document.getElementById("photo").value = '';
        return false;
    }
    if (file.size > 1024000) {
        alert('Max Upload size is 1MB only');
        document.getElementById("photo").value = '';
        return false;
    }
    //PreviewFile
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('viewProfilePic');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
    return true;
}
function showPromoInput(){
  document.getElementById('promocode').innerHTML ='uber';
  document.getElementById('customizeDiv').style.display ="none";
  document.getElementById('promoCodeDiv').style.display ="block";
}
function claimPromocode(){
  var inputVal = document.getElementById('newPromocode').value;
  if(inputVal ==''){
    alert('Please Enter the Promocode');
    document.getElementById('newPromocode').focus();
    return false;
  }else{
      document.getElementById('promocode').innerHTML ='uber'+inputVal;
      document.getElementById('customizeDiv').style.display ="block";
      document.getElementById('promoCodeDiv').style.display ="none";
    }
}
var sno = 2;
function addNewEmail(){ 
  var html = '<div id="newEmailDiv_'+sno+'"><div class="row"><div class="col-md-1"></div><div class="col-md-2"><div class="form-group"><label for="email" class="control-label">Email Address <span id="emailCount">'+ sno +'</span></label></div></div><div class="col-md-3"><div class="form-group"><input type="text" class="form-control" id="newEmail" name="newEmail_'+ sno+'" style="width: 89%;"></div></div><div class="col-md-1"><span class="promo" onclick="removeNewEmail('+ sno +')"><a><i class="fa fa-close fa-2x closeIcon"></i></a></span></div></div><div class="row"><div class="col-md-3"></div><div class="col-md-3" style="margin-left: -15px;"><span>Send receipts from</span><select class="form-control"><option value="All">All</option><option value="None" selected>None</option><option value="Cash">Cash</option></select></div></div></div></br>';
  var div = document.getElementById('appendNewEmail');
  div.innerHTML += html;
  sno++;
}
function removeNewEmail(num){
   if(confirm("Do you want to delete?")){
    document.getElementById('newEmailDiv_'+num).remove();
   }
}

function saveProfile(){
    var obj = {};
    var form = document.getElementById( "profile_form" );
    var elements = form.querySelectorAll( "input, select, textarea" );
    for( var i = 0; i < elements.length; ++i ) {
      var element = elements[i];
      var name = element.name;
      var value = element.value;
      if( name ) {
        obj[ name ] = value;
      }
    }
  var queryString = JSON.stringify( obj ); 
  var imageName = document.getElementById('photo').value;
  var file = document.getElementById("photo").files[0];
  if(imageName == ''){
    file ='';
  }
  var formdata = new FormData();
  formdata.append('inputs', queryString);
  formdata.append('files', file );
  var http = new XMLHttpRequest();
  var url ='saveUserProfile';
  http.open('POST', url, true);
  http.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
  http.onreadystatechange = function(){
    if(http.readyState == 4 && http.status == 200){
      var obj = JSON.parse(http.responseText);
      if(obj.status == true){
            alert(obj.message);
            return false;
        }else if(obj.status == false){
            alert(obj.message);
            return false;      
        }
    }
  }
  http.send(formdata);
}


</script>
@endsection
