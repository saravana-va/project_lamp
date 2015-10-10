<DOCTYPE html>
<html lang=en>
<head>
    <script type="text/javascript" src="register.js"></script>
    <script type="text/javascript" src="chk.js"></script>
    <title>New Registration page</title>
    <meta name="login" content="details of login">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="register.css">
     
</head>
<body>
    <div class="main" >
        <form name="myForm" action = "stores.php" method="POST">
            <div align="center">            
                <h3 align="center"> Registration Form </h3>
                <table class= "main_table">
		            <tr>
                        <td>id</td>
                        <td> <input id="id" type="number" name="id" maxlength="30" placeholder="Id" 
                                    title="Enter Id" ></td>
                    </tr>

                    <tr>
                        <td>Member_id</td>
                        <td> <input id="id" type="number" name="Member_id" maxlength="30" placeholder="Member Id" 
                                    title="Enter Member Id" ></td>
                    </tr>
                    <tr>
                        <td>First Name </td>
                        <td> <input id="fn" type="text" name="first_name" maxlength="30" placeholder="First Name" 
                                    title="Enter First Name"  >
	                    <div class="style1" id ="errors first name"> </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Last Name </td>
                        <td> <input id="ln" type="text" name="last_name" maxlength="30"placeholder="Last Name" title="Enter Last Name" />
                        <div class="style1" id ="errors last name"> </div>
                    </tr>
                    <tr>
                        <td>Date Of Birth</td>
                        <td>
                            <select id="month" name="Month">
	                        <option value="na"> - Month - </option>
	                        <option value="01">January</option>
	                        <option value="02">Febuary</option>
	                        <option value="03">March</option>
	                        <option value="04">April</option>
	                        <option value="05">May</option>
	                        <option value="06">June</option>
	                        <option value="07">July</option>
	                        <option value="08">August</option>
	                        <option value="09">September</option>
	                        <option value="10">October</option>
	                        <option value="11">November</option>
	                        <option value="12">December</option>
                            </select>
                            <select id="day" name="Day">
  	                        <option value="na">- Day - </option>
	                        <option value="1">1</option>
	                        <option value="2">2</option>
	                        <option value="3">3</option>
	                        <option value="4">4</option>
	                        <option value="5">5</option>
	                        <option value="6">6</option>
	                        <option value="7">7</option>
	                        <option value="8">8</option>
	                        <option value="9">9</option>
	                        <option value="10">10</option>
	                        <option value="11">11</option>
	                        <option value="12">12</option>
	                        <option value="13">13</option>
	                        <option value="14">14</option>
	                        <option value="15">15</option>
	                        <option value="16">16</option>
	                        <option value="17">17</option>
	                        <option value="18">18</option>
	                        <option value="19">19</option>
	                        <option value="20">20</option>
	                        <option value="21">21</option>
	                        <option value="22">22</option>
	                        <option value="23">23</option>
	                        <option value="24">24</option>
	                        <option value="25">25</option>
	                        <option value="26">26</option>
	                        <option value="27">27</option>
	                        <option value="28">28</option>
	                        <option value="29">29</option>
	                        <option value="30">30</option>
	                        <option value="31">31</option>
                            </select>
                            <select id="year" name="DOBYear">
	                        <option value="na">- Year - </option>
                                <option value="1997">1997</option>
	                        <option value="1996">1996</option>
	                        <option value="1995">1995</option>
	                        <option value="1994">1994</option>
	                        <option value="1993">1993</option>
	                        <option value="1992">1992</option>
	                        <option value="1991">1991</option>
	                        <option value="1990">1990</option>
	                        <option value="1989">1989</option>
	                        <option value="1988">1988</option>
	                        <option value="1987">1987</option>
	                        <option value="1986">1986</option>
	                        <option value="1985">1985</option>
	                        <option value="1984">1984</option>
	                        <option value="1983">1983</option>
	                        <option value="1982">1982</option>
	                        <option value="1981">1981</option>
	                        <option value="1980">1980</option>
	                        <option value="1979">1979</option>
	                        <option value="1978">1978</option>
	                        <option value="1977">1977</option>
	                        <option value="1976">1976</option>
	                        <option value="1975">1975</option>
	                        <option value="1974">1974</option>
	                        <option value="1973">1973</option>
	                        <option value="1972">1972</option>
	                        <option value="1971">1971</option>
	                        <option value="1970">1970</option>
	                    </select><div class="style1" id ="errors dob"> </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <input id="radio1" type="radio" name="Gender" value="male">Male
                            <input id="radio2" type="radio" name="Gender" value="female">Female
                            <div class="style1" id ="errors radio"> </div>
                        </td> 
                    <tr>
                        <td>Email </td>
                        <td> <input id="eid" type="email" name="Email" maxlength="30"placeholder="Email" title="Enter Email" >
                        <div class="style1" id ="errors email"> </div></td>
                    </tr>
                    <tr>
                        <td>Password </td>
                        <td> <input id="password1"type="password" name="fn" minlength="6" maxlength="30"
                                placeholder="Password" title="Enter Password">
                        </td>
                    </tr>
                    <tr>
                        <td>Confirm Password </td>
                        <td> <input id="password2" type="password" name="Password" minlength="6" maxlength="30" 
                                     placeholder="Re-Enter Password"title="Re-Enter Password">
                        <div class="style1" id ="errors password1"> </div><td>
                    </tr>
                    <tr>
                        <td>Comment</td>
                        <td> <textarea maxlength="500" name ="Comment"></textarea>
                    </tr>
                    <tr>
                        <td><input id="checkbox1" type="checkbox" name="Subscribe" value="yes">Subscribe </td>
                        <td><input id="checkbox2" type="checkbox" name="Alert" value="yes">Activate alert
                        <div class="style1" id ="errors check"> </div></td>
                    </tr>
                    <tr>
                        <td><input type="reset" value="Reset"></td> 
			
                        <td><input type="submit" onclick="return functionName()" value="submit" name="Submit" ></td>
                        <td> <a href="web.html"> <input type="button" name="back" value="back">  </a></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</body>
</html> 
