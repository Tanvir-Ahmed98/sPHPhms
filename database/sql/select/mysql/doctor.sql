SELECT			{ALIAS}.*, 
				CONCAT({ALIAS}.DoctorFirstName, '') AS {ENTITY}LookupCaption,DepartmentName,GenderName, 
				'' AS _Other

FROM			{PREFIX}{NAME} AS {ALIAS}
	/*LEFT JOIN		X AS Y ON Y.YID = {ALIAS}.YID*/
	LEFT JOIN hms_department AS DP ON DP.DepartmentID={ALIAS}.DepartmentID
	LEFT JOIN sphp_gender AS GD ON GD.GenderID={ALIAS}.GenderID
		
