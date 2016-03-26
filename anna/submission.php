<?php
include_once ("adb.php");

class submission extends adb{
	function submission(){}

	function makeSubmission($title, $exemption="null", $subjectCharacteristics, $specialClasses, $recruitment,
							$partcipnatInfo, $researchMethod, $dataSources, $procedureRisks, $procedureDetails, $confidentialityExtent, $dataStorage, $resultDissemination, $subjectInfo, 
							$confidentialityProtection, $participantConpensation, $participantBenefits){
	$strQuery="insert into submission set
						title ='$title',
						exemption ='$exemption',
						submissionDate = CURRENT_TIMESTAMP,
						subjectCharacteristics ='$subjectCharacteristics',
						specialClasses ='$specialClasses',
						recruitment = '$recruitment',
						partcipnatInfo ='$partcipnatInfo',
						researchMethod = '$researchMethod',
						dataSources ='$dataSources',
						procedureRisks ='$procedureRisks',
						procedureDetails ='$procedureDetails',
						confidentialityExtent ='$confidentialityExtent',
						dataStorage ='$dataStorage',
						resultDissemination ='$resultDissemination',
						subjectInfo = '$subjectInfo',
						confidentialityProtection = '$confidentialityProtection',
						participantConpensation = '$participantConpensation',
						participantBenefits = '$participantBenefits'";
	return $this->query($strQuery);
	}
}

?>