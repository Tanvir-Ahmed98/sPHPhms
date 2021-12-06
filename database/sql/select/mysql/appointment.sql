SELECT			{ALIAS}.*, 
				CONCAT({ALIAS}.AppointmentFirstName,'') AS {ENTITY}LookupCaption,DoctorTime,US.UserSignInName, 
				'' AS _Other
FROM			{PREFIX}{NAME} AS {ALIAS}
	/*LEFT JOIN		X AS Y ON Y.YID = {ALIAS}.YID*/
	-- LEFT JOIN sphp_user AS DO ON DO.UserID={ALIAS}.UserID 
	LEFT JOIN hms_doctor AS DOC ON DOC.DoctorID={ALIAS}.DoctorID
	LEFT JOIN sphp_user AS US ON US.UserID=DOC.UserID
	
 