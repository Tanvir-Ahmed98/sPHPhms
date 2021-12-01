SELECT			{ALIAS}.*, 
				CONCAT({ALIAS}.DoctorID, '') AS {ENTITY}LookupCaption,DoctorLastName,
				'' AS _Other

FROM			{PREFIX}{NAME} AS {ALIAS}
	/*LEFT JOIN		X AS Y ON Y.YID = {ALIAS}.YID*/
	LEFT JOIN hms_doctor AS DO ON DO.DoctorID={ALIAS}.DoctorID