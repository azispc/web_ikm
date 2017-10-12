<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/


class User 
{
	public $user_active = 0;
	private $clean_email;
	public $status = false;
	private $clean_password;
	private $idktp;
	private $username;
	private $namalengkap;
	/*private $displayname;*/
	private $sex;
	private $blood;
	private $birthplace;
	private $birthday;
	private $rt;
	private $rw;
	private $alamat;
	private $nikah;
	private $agama;
	private $pekerjaan;
	private $penghasilan;
	private $miskin;
	public $sql_failure = false;
	public $mail_failure = false;
	public $email_taken = false;
	public $username_taken = false;
	/*public $displayname_taken = false;*/
	public $activation_token = 0;
	public $success = NULL;
	
	function __construct($idktp,$user,$lengkap,$sex,$blood,$birthplace,$birthday,$rt,$rw,$alamat,$nikah,$agama,$pekerjaan,$penghasilan,$miskin,$pass)
	{
		//Used for display only
		/*$this->displayname = $display;*/
		
		//Sanitize
		/*$this->clean_email = sanitize($email);*/
		$this->clean_password = trim($pass);
		$this->idktp = sanitize($idktp);
		$this->username = sanitize($user);
		$this->namalengkap = sanitize($lengkap);
		$this->sex = sanitize($sex);
		$this->blood = sanitize($blood);
		$this->birthplace = sanitize($birthplace);
		$this->birthday = sanitize($birthday);
		$this->rt = sanitize($rt);
		$this->rw = sanitize($rw);
		$this->alamat = sanitize($alamat);
		$this->nikah = sanitize($nikah);
		$this->agama = sanitize($agama);
		$this->pekerjaan = sanitize($pekerjaan);
		$this->penghasilan = sanitize($penghasilan);
		$this->miskin = sanitize($miskin);
		
		if(usernameExists($this->username))
		{
			$this->username_taken = true;
		}
		/*else if(displayNameExists($this->displayname))
		{
			$this->displayname_taken = true;
		}*/
		/*else if(emailExists($this->clean_email))
		{
			$this->email_taken = true;
		}*/
		else
		{
			//No problems have been found.
			$this->status = true;
		}
	}
	
	public function userCakeAddUser()
	{
		global $mysqli,$websiteUrl,$db_table_prefix;
		
		//Prevent this function being called if there were construction errors
		if($this->status)
		{
			//Construct a secure hash for the plain text password
			$secure_pass = generateHash($this->clean_password);
			
			//Construct a unique activation token
			$this->activation_token = generateActivationToken();
			
			//Do we need to send out an activation email?
			
		
				//Instant account activation
				$this->user_active = 1;
				$this->success = lang("ACCOUNT_REGISTRATION_COMPLETE_TYPE1");
	
		
			
			if(!$this->mail_failure)
			{
				//Insert the user into the database providing no errors have been found.
				$stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."users (
					id_ktp,
					user_name,
					nama_lengkap,
					password,
					jenis_kelamin,
					golongan_darah,
					tempat_lahir,
					tanggal_lahir,
					rt,
					rw,
					alamat,
					status_nikah,
					agama,
					pekerjaan,
					penghasilan,
					status_miskin,
					activation_token,
					last_activation_request,
					lost_password_request, 
					active,
					title,
					sign_up_stamp,
					last_sign_in_stamp
					)
					VALUES (
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					?,
					'".time()."',
					'0',
					?,
					'New Member',
					'".time()."',
					'0'
					)");
				
				$stmt->bind_param("sssssssssssssssssi", $this->idktp,$this->username, $this->namalengkap, $secure_pass, $this->sex, $this->blood,$this->birthplace,$this->birthday,$this->rt,$this->rw, $this->alamat,$this->nikah,$this->agama,$this->pekerjaan,$this->penghasilan,$this->miskin,$this->activation_token, $this->user_active);
				$stmt->execute();
				$inserted_id = $mysqli->insert_id;
				$stmt->close();
				
				//Insert default permission into matches table
				$stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."user_permission_matches  (
					user_id,
					permission_id
					)
					VALUES (
					?,
					'1'
					)");
				$stmt->bind_param("s", $inserted_id);
				$stmt->execute();
				$stmt->close();
			}
		}
	}
}

?>