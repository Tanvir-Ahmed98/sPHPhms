SELECT			{ALIAS}.*, 
				CONCAT({ALIAS}.DoctorFirstName, '') AS {ENTITY}LookupCaption,DepartmentName, 
				'' AS _Other

FROM			{PREFIX}{NAME} AS {ALIAS}
	/*LEFT JOIN		X AS Y ON Y.YID = {ALIAS}.YID*/
		LEFT JOIN hms_department AS DP ON DP.DepartmentID={ALIAS}.DepartmentID
