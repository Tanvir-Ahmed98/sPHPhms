<?php

namespace sPHP;

if ($User->UserGroupIdentifierHighest() == "ADMINISTRATOR") {
  print '<center><div class="alert alert-success"><strong>Admimistrator home page</strong></div></center>';
} else 
if ($User->UserGroupIdentifierHighest() == "PATIENT") {
  print '<center><div class="alert alert-success"> <strong>Patient home page</strong></div></center>';
} else
if ($User->UserGroupIdentifierHighest() == "DOCTOR") {
  print '<center><div class="alert alert-success"> <strong>Doctor home page</strong></div></center>';
} else
  print '<center><div class="alert alert-success"> <strong>This is your home page</strong></div></center>';


  

