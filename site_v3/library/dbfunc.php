<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Tony Petrotte
CSC-155-201F_2021SP -->
<?php

function db_getpass($pdo, $usr){
	$stmt = $pdo->prepare("SELECT pswrd FROM fruitsiteUsers WHERE username= ?");
	$stmt->execute([$usr]);
	$p_cryp = $stmt->fetchColumn();
	return $p_cryp;
}

function db_checkUsr($pdo, $usr){
	if (!strlen($usr)==0){
		$stmt = $pdo->prepare("SELECT COUNT(*) FROM fruitsiteUsers WHERE username= ?");
		$stmt->execute([$usr]);
		$c = $stmt->fetchALL(PDO::FETCH_COLUMN);
		$num_rows=$c[0];

		if ($num_rows == 0) {
			return 0;
		}elseif ($num_rows > 1) {
			return 2;
		}else {
			return 1;
		}
	}else{
		return 2;
	}
}

function db_setUsr($pdo, $usr, $pswrd, $email, $groupnum){
	$c = db_checkUsr($pdo, $usr);
	if ($c==0){
		$stmt = $pdo->prepare("INSERT INTO fruitsiteUsers SET username= ?, pswrd=?, email=?, usergroup=?");
		$stmt->execute(array($usr, $pswrd, $email, $groupnum));

	} elseif($c==1){
		echo "Username is already in use";
	} elseif($c==2){
		echo "Something is wrong";
	}

}

?>
