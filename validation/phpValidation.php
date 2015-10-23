<?php
class User {
    protected $data;
    protected $member_id;
    protected $name;
    protected $last_name;
    protected $month;
    protected $day;
    protected $year;
    protected $gender;
    protected $email;
    protected $password;
    protected $confirm_password;
    protected $comment ;
    protected $subscribe;
    protected $alert ;
    public $error = array();
    public function __construct($data) {
        $this->member_id = $data['Member_id'];
        $this->name = $data['first_name'];
        $this->last_name = $data['last_name'];
        $this->month = $data['Month'];
        $this->day = $data['Day'];
        $this->year = $data['DOBYear'];
        $this->gender =$data['Gender'];
        $this->email = $data['Email'];
        $this->password = $data['Password'];
        $this->confirm_password = $data['confirm_password'];
        $this->comment = $data['Comment'];
        $this->subscribe = $data['Subscribe'];
        $this->alert = $data['Alert'];
        $error[Flag] = false;
        $obj = new dbConnect();
    }
    public function validate() {
            //server side validation.
            if(empty($this->member_id)){
                $error[] = "please enter a Memeber Id";
                $error[Flag] = true;
            }
            if(empty($this->name)) {
                $error[] = "please enter name";
                $error[Flag] = true;

            }
            if (ctype_digit($this->name)) {
                $error[] = "please enter valid name";
                $error[Flag] = true;
                echo "hai";
            } 
            if(empty($this->last_name)) {
                $error[] = "please enter Last name";
                $error[Flag] = true;
            } 
            if (ctype_digit($this->last_name)) {
                $error[] = "please enter valid last name";
                $error[Flag] = true;
            } 
            if(empty($this->month)) {
                $error[] = "please enter month";
                $error[Flag] = true;
            } 
            if(empty($this->day)) {
                $errorMessage[] = "please enter Day";
                $error[Flag] = true;
            } 
            if(empty($this->year)) {
                $error[] = "please enter year";
                $error[Flag] = true;
            }
            if(empty($this->gender)) {
                $error[] = "please enter gender";
                $error[Flag] = true;
            }
            if(empty($this->email)) {
                $error[] = "please enter email";
                $error[Flag] = true;
            }
            else {
                if(preg_match("/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/",email)) {
                    $error[] = "please enter the valid email";
                    $error[Flag] = true;
                }
            }
            if(empty($this->password)) {
                $error[] = "please enter password";
                $error[Flag] = true;
            } 
            if(empty($this->confirm_password)) {
                $error[] = "please enter Confirm password";
                $error[flag] = true;
            }
            if(!($this->password==$this->confirm_password )) {
                $error[]= "Password does not match";
                $error[Flag] = true;
            }    
            else {
                if(!($this->password==NULL)&&!($this->password==NULL)) {

                    if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $this->confirm_password)){
                        $error[] = "enter password in standard format";
                        $error[Flag] = true;
                    }
                }
            }          
    return $error;
    }
    //connecting to database.
    public function addUser() {
        $insert_data = "INSERT INTO member_detail(member_id,first_name,last_name,date_of_birth,genter,email,password,comment,subscribe,activate_alert) VALUES("$this->member_id","$this->name","$this->last_name","$this->year"-"$this->month"-"$this->day","$this->gender","$this->email","$this->password","$this->comment","$this->subscribe","$this->alert");";
        $result = mysqli_query($link,$insert_data); 
	    if($result) {
	        echo("<br>Input data is succeed");
	    } 
	    else{
            echo("<br>Input data is fail");
	    }
        mysqli_close($link);
    }
}
?>

