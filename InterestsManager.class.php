<?php
class InterestsManager {

	// InterestsManager.class.php
	
	private $connection;
	private $user_id;
	
	// kui tekitan new, siis käivitatakse see funktsioon
	function __construct($mysqli, $user_id_from_session){
		
		// selle klassi muutuja
		$this->connection = $mysqli;
		$this->user_id = $user_id_from_session;
		
		echo "Huvialade haldus käivitatud, kasutaja=".$this->user_id;
		
	}
	
} ?>