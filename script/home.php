<?php
namespace sPHP;
//upadted home page
if($User->UserGroupIdentifierHighest() == "ADMINISTRATOR"){

  print '<center><div class="alert alert-success"> <strong> Admimistrator Page</strong></div></center>
  <center>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
       
      </div>
      <div class="col-sm-6">
     
      </div>
    </div>
  </div>
  </center>';
  

}else
  
if($User->UserGroupIdentifierHighest() == "PATIENT"){

  print '<center><div class="alert alert-success"> <strong> Patient Page</strong></div></center>
  <center>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
      </div>
      <div class="col-sm-6">
      <button class="btn btn-primary">Find Doctors</button><br>
      </div>
    </div>
  </div>
  </center>';



}else


if($User->UserGroupIdentifierHighest() == "DOCTOR"){

  print '<center><div class="alert alert-success"> <strong> Doctor Page</strong></div></center>
  <center>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
    
      </div>
      <div class="col-sm-6">
     
      </div>
    </div>
  </div>
  </center>';



}else



print'<center><div class="alert alert-success"> <strong> This is homePage</strong></div></center>
  <center>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
    
      </div>
      <div class="col-sm-6">
     
      </div>
    </div>
  </div>
  </center>';






?>
















