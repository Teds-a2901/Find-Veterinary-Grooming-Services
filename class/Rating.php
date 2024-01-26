<?php
class Rating{
	private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "vetgroom_services_db";    
	private $users = 'users';
	private $itemTable = 'vet_and_groom_services';	
    private $itemRatingTable = 'rate_feedbacks';
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error($this->dbConnect));
		}
		$data= array();
		while ($row = mysqli_fetch_array($result)) {
			$data[]=$row;            
		}
		return $data;
	}
	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}	
	public function userLogin($usersName, $usersPwd){
		$sqlQuery = "
			SELECT * 
			FROM ".$this->users." 
			WHERE username='".$usersName."' AND password='".$usersPwd."'";
        return  $this->getData($sqlQuery);
	}		
	public function getItemList(){
		$sqlQuery = "
			SELECT * FROM ".$this->itemTable;
		return  $this->getData($sqlQuery);	
	}
	public function getItem($itemId){
		$sqlQuery = "
			SELECT * FROM ".$this->itemTable."
			WHERE vet_and_groom_ID ='".$itemId."'";
		return  $this->getData($sqlQuery);	
	}
	public function getItemRating($itemId){
		$sqlQuery = "
			SELECT r.rate_feedback_ID, r.vet_and_groom_ID, r.users_Id, u.usersName, u.image, r.ratingNumber, r.title, r.comments, r.created, r.modified, r.vet_and_groom_Name
			FROM ".$this->itemRatingTable." as r
			LEFT JOIN ".$this->users." as u ON (r.users_Id = u.usersId)
			WHERE r.vet_and_groom_ID = '".$itemId."'ORDER BY r.modified DESC";
		return  $this->getData($sqlQuery);		
	}
	public function getRatingAverage($itemId){
		$itemRating = $this->getItemRating($itemId);
		$ratingNumber = 0;
		$count = 0;		
		foreach($itemRating as $itemRatingDetails){
			$ratingNumber+= $itemRatingDetails['ratingNumber'];
			$count += 1;			
		}
		$average = 0;
		if($ratingNumber && $count) {
			$average = $ratingNumber/$count;
		}
		return $average;	
	}
	public function saveRating($POST, $userID){		
		$insertRating = "INSERT INTO ".$this->itemRatingTable." (vet_and_groom_ID, users_Id, ratingNumber, title, comments, created, modified, vet_and_groom_Name) VALUES ('".$POST['vetgroomid']."', '".$userID."', '".$POST['rating']."', '".$POST['title']."', '".$POST["comment"]."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."', '".$POST['vetgroomname']."')";
		mysqli_query($this->dbConnect, $insertRating);	
	}
}
?>