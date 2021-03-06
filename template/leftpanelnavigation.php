<?php
namespace sPHP;

$LeftPanelLinkHTML[] = HTML\UI\Accordion("LeftPanelNavigation", [
	
	
	$User->UserGroupIdentifierHighest() == "ADMINISTRATOR" ? new HTML\UI\Accordion\Pad([
		new HTML\UI\Accordion\Item($Caption = "User", null, $Application->URL("Management/Generic/{$Caption}"), null, null, "" . strtolower("" . ($PadKey = "Administration") . "_" . ($Key = "User")) . "", "{$Caption}", null, "{$Key}"),
		new HTML\UI\Accordion\Item($Caption = "User group", null, $Application->URL("Management/Generic/UserGroup"), null, null, "" . strtolower("" . ($PadKey = "Administration") . "_" . ($Key = "UserGroup")) . "", "{$Caption}", null, "{$Key}"),
		new HTML\UI\Accordion\Item($Caption = "Doctor Information", null, $Application->URL("Management/Generic/DoctorInfo"), null, null, "" . strtolower("" . ($PadKey = "Administration") . "_" . ($Key = "Doctor")) . "", "{$Caption}", null, "{$Key}"),
		new HTML\UI\Accordion\Item($Caption = "Department", null, $Application->URL("Management/Generic/Department"), null, null, "" . strtolower("" . ($PadKey = "Administration") . "_" . ($Key = "Department")) . "", "{$Caption}", null, "{$Key}"),
		new HTML\UI\Accordion\Item($Caption = "List Of Appointments", null, $Application->URL("Management/Generic/Appointment"), null, null, "" . strtolower("" . ($PadKey = "Administration") . "_" . ($Key = "Appointment")) . "", "{$Caption}", null, "{$Key}"),
		// new HTML\UI\Accordion\Item($Caption = "Time", null, $Application->URL("Management/Generic/Time"), null, null, "" . strtolower("" . ($PadKey = "Administration") . "_" . ($Key = "Time")) . "", "{$Caption}", null, "{$Key}"),
	], "" . ($Caption = "Administration") . "", "{$Caption}", "{$Caption}", null, "{$PadKey}") : null,

	$USR->UserGroupIdentifierHighest() == "CUSTOMER" ? new HTML\UI\Accordion\Pad([
		new HTML\UI\Accordion\Item($Caption = "User group", null, $Application->URL("Management/Generic/UserGroup"), null, null, "" . strtolower("" . ($PadKey = "Administration") . "_" . ($Key = "UserGroup")) . "", "{$Caption}", null, "{$Key}"),
	]): null,




	$USR->UserGroupIdentifierHighest() == "DOCTOR" ? new HTML\UI\Accordion\Pad([
		new HTML\UI\Accordion\Item($Caption = "Doctor panel", null, $Application->URL("Management/Generic/DoctorInfo"), null, null, "" . strtolower("" . ($PadKey = "Administration") . "_" . ($Key = "DoctorInfo")) . "", "{$Caption}", null, "{$Key}"),
		// new HTML\UI\Accordion\Item($Caption = "Take Appointment", null, $Application->URL("Management/Generic/Appointment"), null, null, "" . strtolower("" . ($PadKey = "Administration") . "_" . ($Key = "Doctor")) . "", "{$Caption}", null, "{$Key}"),
	]): null,


	$USR->UserGroupIdentifierHighest() == "PATIENT" ? new HTML\UI\Accordion\Pad([
		new HTML\UI\Accordion\Item($Caption = "Available Doctor", null, $Application->URL("Management/Generic/AvailableDoctor"), null, null, "" . strtolower("" . ($PadKey = "Administration") . "_" . ($Key = "AvailableDoctor")) . "", "{$Caption}", null, "{$Key}"),
		new HTML\UI\Accordion\Item($Caption = "List Of Appointments", null, $Application->URL("Management/Generic/Appointment"), null, null, "" . strtolower("" . ($PadKey = "Administration") . "_" . ($Key = "Appointment")) . "", "{$Caption}", null, "{$Key}"),
		// new HTML\UI\Accordion\Item($Caption = "Take Appointment", null, $Application->URL("Management/Generic/Appointment"), null, null, "" . strtolower("" . ($PadKey = "Administration") . "_" . ($Key = "Doctor")) . "", "{$Caption}", null, "{$Key}"),
	]): null,

	



	$Session->IsGuest() ? new HTML\UI\Accordion\Pad([
		new HTML\UI\Accordion\Item($Caption = "Log in", null, $Application->URL("User/SignIn"), null, null, "" . strtolower("" . ($PadKey = "User") . "_" . ($Key = "SignIn")) . "", "{$Caption}", null, "{$Key}"),
	], "" . ($Caption = "") . "", "{$Caption}", "{$Caption}", null, "{$PadKey}") : new HTML\UI\Accordion\Pad([
		new HTML\UI\Accordion\Item($Caption = "Log out", null, $Application->URL("User/SignOut"), null, null, "" . strtolower("" . ($PadKey = "User") . "_" . ($Key = "SignOut")) . "", "{$Caption}", null, "{$Key}"),
	], "" . ($Caption = "") . "", "{$Caption}", "{$Caption}", null, "{$PadKey}"),
], "{$Environment->ImageURL()}layout/header/leftpanel/icon/", "LeftPanelNavigation", null);
?>