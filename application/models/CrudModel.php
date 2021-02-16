<?php 
if(!defined("BASEPATH"))  exit("No Direct Script Access Allowed");

/**
 * 
 */
class CrudModel extends CI_model
{
	
	function FetchAllUsers(){
		$all_usersData = $this->db->get('users')->result_array();
		//print_r($all_usersData);
		return $all_usersData;

	}

	function AddNewUsers($data){
		 $this->db->insert('users',$data);  

	}

	function GetEditUserData($id){
		$this->db->where('id',$id);
		return $userDataForUpdate = $this->db->get('users')->row_array();

	}

	function UpdateUser($id,$UpdateUserdata){
		$this->db->where('id',$id); //Id in parameter
         	$this->db->update('users',$UpdateUserdata); //Data array

	}


	function DeleteUser($id){
		$this->db->where('id',$id);
        $this->db->delete('users');
	}
}

?>