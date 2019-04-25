<?php
function get_indian_state($data){
	static $stateReturn;
	switch($data){
		case "AP":
			$stateReturn = "Andra Pradesh";
			break;
		case "AR":
			$stateReturn = "Arunachal Pradesh";
			break;
		case "AS":
			$stateReturn = "Assam";
			break;
		case "BR":
			$stateReturn = "Bihar";
			break;
		case "CT":
			$stateReturn = "Chhattisgarh";
			break;
		case "GA":
			$stateReturn = "Goa";
			break;
		case "GJ":
			$stateReturn = "Gujarat";
			break;
		case "HR":
			$stateReturn = "Haryana";
			break;
		case "HP":
			$stateReturn = "Himachal Pradesh";
			break;
		case "JK":
			$stateReturn = "Jammu and Kashmir";
			break;
		case "JH":
			$stateReturn = "Jharkhand";
			break;
		case "KA":
			$stateReturn = "Karnataka";
			break;
		case "KL":
			$stateReturn = "Kerala";
			break;
		case "MP":
			$stateReturn = "Madhya Pradesh";
			break;
		case "MH":
			$stateReturn = "Maharashtra";
			break;
		case "MN":
			$stateReturn = "Manipur";
			break;
		case "ML":
			$stateReturn = "Meghalaya";
			break;
		case "MZ":
			$stateReturn = "Mizoram";
			break;
		case "NL":
			$stateReturn = "Nagaland";
			break;
		case "OR":
			$stateReturn = "Orissa";
			break;
		case "PB":
			$stateReturn = "Punjab";
			break;
		case "RJ":
			$stateReturn = "Rajasthan";
			break;
		case "SK":
			$stateReturn = "Sikkim";
			break;
		case "TN":
			$stateReturn = "Tamil Nadu";
			break;
		case "TG":
			$stateReturn = "Telengana State";
			break;
		case "TR":
			$stateReturn = "Tripura";
			break;
		case "UT":
			$stateReturn = "Uttaranchal";
			break;
		case "UP":
			$stateReturn = "Uttar Pradesh";
			break;
		case "WB":
			$stateReturn = "West Bengal";
			break;
		case "AN":
			$stateReturn = "Andaman and Nicobar Islands";
			break;
		case "CH":
			$stateReturn = "Chandigarh";
			break;
		case "DN":
			$stateReturn = "Dadar and Nagar Haveli";
			break;
		case "DD":
			$stateReturn = "Daman and Diu";
			break;	
		case "DL":
			$stateReturn = "Delhi";
			break;
		case "LD":
			$stateReturn = "Lakshadeep";
			break;
		case "PY":
			$stateReturn = "Pondicherry (Puducherry)";
			break;
	}
return $stateReturn;
}
?>
