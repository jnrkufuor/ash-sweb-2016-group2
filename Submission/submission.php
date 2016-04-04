<?php
/**
*@author Anna Addei
*This script is the submission class that defines the makeSubmission function to make an IRB submission
*/

include_once ("..\adb.php");

class submission extends adb{
	/**
	*Constructor
	*/
	function submission(){}

	/**
	*Adds a new submisson
	*@param string title title of research project
	*@param string exemption resons for exemption if requested
	*@param string subjectCharacteristics characteristics of research subjects
	*@param string specialClasses special cases if applicable
	*@param string recruitment how subjects will be recruited
	*@param string partcipnatInfo how applicants are informed ofresearch procedures
	*@param string researchMethod methods adopted for research
	*@param string dataSources sources of research data
	*@param string procedureRisks risks for participants
	*@param string procedureDetails details of research procedure
	*@param string confidentialityExtent how participant confedentiality is protected
	*@param string dataStorage how data will be stored
	*@param string resultDissemination how results will be disseminated
	*@param string subjectInfo how subjecrts will be informed about results
	*@param string confidentialityProtection how confedentiality will be protected during dissemination
	*@param string participantConpensation compensation of participants
	*@param string participantBenefits benefits available to participants
	*/
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

	function getSubmissions(){
		$strQuery="select submissionID, submissionDate, title, FIRSTNAME, LASTNAME, CO_RESEARCHER from submission, irb_user where UsserID = USER_ID";
		return $this->query($strQuery);
	}

	function getSubmissionByCode($id){
		$strQuery="select title,
						exemption,
						submissionDate,
						subjectCharacteristics,
						specialClasses,
						recruitment,
						partcipnatInfo,
						researchMethod,
						dataSources,
						procedureRisks,
						procedureDetails,
						confidentialityExtent,
						dataStorage,
						resultDissemination,
						subjectInfo,
						confidentialityProtection,
						participantConpensation,
						participantBenefits,
						FIRSTNAME,
						LASTNAME,
						CO_RESEARCHER from submission, irb_user where submissionID = $id && UsserID = USER_ID";
		return $this->query($strQuery);
	}
}

?>