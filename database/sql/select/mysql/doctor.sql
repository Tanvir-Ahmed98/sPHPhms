SELECT			{ALIAS}.*, 
				CONCAT({ALIAS}.DoctorID, '') AS {ENTITY}LookupCaption,DepartmentName,GenderName,UserSignInName,UserEmail, 
				'' AS _Other

FROM			{PREFIX}{NAME} AS {ALIAS}
	/*LEFT JOIN		X AS Y ON Y.YID = {ALIAS}.YID*/
	LEFT JOIN hms_department AS DP ON DP.DepartmentID={ALIAS}.DepartmentID
	LEFT JOIN sphp_gender AS GD ON GD.GenderID={ALIAS}.GenderID
	LEFT JOIN sphp_user AS U ON U.UserID={ALIAS}.UserID
		
