<?php
/**
*@author Anna Addei
*This script is the submission class that defines the makeSubmission function to make an IRB submission
*/

include_once ("../adb.php");

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
	function makeSubmission($id, $title, $exemption="null", $subjectCharacteristics, $specialClasses, $recruitment,
							$partcipnatInfo, $researchMethod, $dataSources, $procedureRisks, $procedureDetails, $confidentialityExtent, $dataStorage, $resultDissemination, $subjectInfo, 
							$confidentialityProtection, $participantConpensation, $participantBenefits){
	$strQuery="insert into submission set
						UsserID = $id,
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

	function getSubmissionId(){
		$strQuery="Select submissionID from submission order by submissionID desc limit 1";

		return $this->query($strQuery);
	}

	function updateSubjects($id,$subjectCharacteristics, $specialClasses, $recruitment,
							$partcipnatInfo, $researchMethod, $dataSources){
	$strQuery="update submission set
						subjectCharacteristics ='$subjectCharacteristics',
						specialClasses ='$specialClasses',
						recruitment = '$recruitment',
						partcipnatInfo ='$partcipnatInfo',
						researchMethod = '$researchMethod',
						dataSources ='$dataSources'
						where submissionID = $id ";

	return $this->query($strQuery);
	}

	function updateRisk($id,$procedureRisks,$procedureDetails){
	$strQuery="update submission set
						procedureRisks ='$procedureRisks',
						procedureDetails = '$procedureDetails'
						where submissionID = $id ";

	return $this->query($strQuery);
	}

	function updateConfidentiality($id,$dataStorage, $confidentialityExtent, $resultDissemination,
							$subjectInfo, $confidentialityProtection){
	$strQuery="update submission set
						dataStorage ='$dataStorage',
						confidentialityExtent ='$confidentialityExtent',
						resultDissemination ='$resultDissemination',
						subjectInfo ='$subjectInfo',
						confidentialityProtection ='$confidentialityProtection'
						where submissionID = $id ";

	return $this->query($strQuery);
	}

	function updateBenefits($id,$participantBenefits, $participantConpensation){
	$strQuery="update submission set
						participantBenefits ='$participantBenefits',
						participantConpensation ='$participantConpensation'
						where submissionID = $id ";

	return $this->query($strQuery);
	}

	function updateExemption($sid, $title, $exemption){
	$strQuery="update submission set
						exemption ='$exemption',
						title ='$title'
						where submissionID = $sid ";

	return $this->query($strQuery);
	}

	function submit($id,$participantBenefits, $participantConpensation){
	$strQuery="update submission set
						participantBenefits ='$participantBenefits',
						participantConpensation ='$participantConpensation',
						submitted = 1
						where submissionID = $id ";

	return $this->query($strQuery);
	}

	function getDashboardInfo($id)
	{
		$strQuery = "select title, submissionDate, submitted from submission where UsserID = id";

		return $this->query($strQuery);
	}


?>