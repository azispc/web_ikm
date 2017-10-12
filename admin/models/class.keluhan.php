<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/


class Keluhan 
{
	public $user_active = 0;
	private $clean_email;
	public $status = false;
	private $clean_password;
	private $id_pelapor;
	private $user_pelapor;
	private $judul_keluhan;
	private $isi_keluhan;
	private $nomor_hp;
	private $tanggal_keluhan;
	public $sql_failure = false;
	public $mail_failure = false;
	public $email_taken = false;
	public $username_taken = false;
	/*public $displayname_taken = false;*/
	public $activation_token = 0;
	public $success = NULL;
	
	function __construct($id_pelapor,$user_pelapor,$judul_keluhan,$isi_keluhan,$nomor_hp,$tanggal_keluhan)
	{
		$this->id_pelapor = sanitize($id_pelapor);
		$this->user_pelapor = sanitize($user_pelapor);
		$this->judul_keluhan = sanitize($judul_keluhan);
		$this->isi_keluhan = sanitize($isi_keluhan);
		$this->nomor_hp = sanitize($nomor_hp);
		
			//No problems have been found.
			$this->status = true;
		
	}
	
	public function AddKeluhan()
	{
		global $mysqli,$websiteUrl,$db_table_prefix;
		
		//Prevent this function being called if there were construction errors
		if($this->status)
		{
			//Construct a secure hash for the plain text password
			$this->activation_token = generateActivationToken();
			
			//Do we need to send out an activation email?
			
		
				//Instant account activation
				$this->user_active = 1;
				$this->success = lang("ACCOUNT_REGISTRATION_COMPLETE_TYPE1");
	
		
			
			if(!$this->mail_failure)
			{
				//Insert the user into the database providing no errors have been found.
				$stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."keluhan (
					id_pelapor,
					user_pelapor,
					judul_keluhan,
					nomor_hp,
					isi_keluhan,
					tanggal_keluhan
					)
					VALUES (
					?,
					?,
					?,
					?,
					?,
					CURRENT_TIMESTAMP
					)");
				
				$stmt->bind_param("issis", $this->id_pelapor, $this->user_pelapor, $this->judul_keluhan, $this->nomor_hp, $this->isi_keluhan);
				$stmt->execute();
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