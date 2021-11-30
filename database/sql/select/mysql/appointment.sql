SELECT			{ALIAS}.*, 
				CONCAT({ALIAS}.AppointmentFirstName, '') AS {ENTITY}LookupCaption,DoctorLastName,DoctorTime, 
				'' AS _Other
FROM			{PREFIX}{NAME} AS {ALIAS}
	/*LEFT JOIN		X AS Y ON Y.YID = {ALIAS}.YID*/
	LEFT JOIN hms_doctor AS DO ON DO.DoctorID={ALIAS}.DoctorID 
