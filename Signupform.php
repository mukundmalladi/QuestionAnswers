<?php
include 'menu.php';
?>
<div id='container' >
<div id= 'mainContent'>
<br>
&nbsp You are Here :<h2 style="margin-top: -26px; margin-left: 105px;">Signup form</h2>
<div id='leftcontent'>
<div class= 'recentquestions'>
<header>
<h1> Errors</h1>

</header>
<?php
SESSION_START();

if(isset($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0	)
{	
echo "<table cellpadding=\"5\" style=\" color: red;\">";
foreach($_SESSION['ERRMSG_ARR'] as $msg) 
{
echo "<tr>";
echo" <td>";
echo $msg;
echo "</td>";
echo "</tr>";
}
echo "</table>";
unset($_SESSION['ERRMSG_ARR']);

}

?>


</div>
</div>
<div id ='middlecontent'>
<div class= 'signupform'>
<header>
<h1> Sign Up To Begin</h1>

</header>
<div id ="signup" style="text-align:center;"><br><br><br><br>
<?Php
echo "<form name=\"Signup\" method=\"post\" action=\"Signup-exec.php\">
	<p><input name=\"FirstName\" type=\"text\" id=\"username\"  value=\"First Name\"  onfocus=\"if(this.value == 'First Name') {this.value = '';}\"
							onblur=\"if (this.value == '') {this.value = 'First Name';}\" /></br>The first name is your username to Login</p>
	<p><input name=\"LastName\" type=\"text\" id=\"LastName\"  value=\"Last Name\" onfocus=\"if(this.value == 'Last Name') {this.value = '';}\"
							onblur=\"if (this.value == '') {this.value = 'Last Name';}\" /><br/></p>
	<p><input name=\"email\" type=\"text\" id=\"email\"  value=\"Email\"  onfocus=\"if(this.value == 'Email') {this.value = '';}\"
							onblur=\"if (this.value == '') {this.value = 'Email';}\"/><br/></p>
	<p><input name=\"password\" type=\"text\" id=\"password\"  value=\"password\" onclick=\"this.value='';this.onclick='test'; setAttribute('type', 'password');\" onfocus=\"if (this.value == 'password') {this.value = ''; setAttribute('type', 'password');}\"   onblur=\"if (this.value == '') {this.value = 'password';setAttribute('type', 'text');}\" name=\password\"  /><br/></p>
							
	<p><input name=\"retypepassword\" type=\"text\" id=\"retypepassword\"  value=\"re-enter password\" onclick=\"this.value='';this.onclick='test'; setAttribute('type', 'password');\" onfocus=\"if (this.value == 're-enter password') {this.value = ''; setAttribute('type', 'password');}\"   onblur=\"if (this.value == '') {this.value = 're-enter password';setAttribute('type', 'text');}\" name=\password\"  /><br/></p>
							
	<p><input type=\"radio\"  name=\"Gender\" value=\"0\" />Male
     <input type=\"radio\" name=\"Gender\" value=\"1\" />Female <br/></p>
	 <tr> <th>DOB <td>
 <p> <select id=\"dob\" size=\"1\" name=\"edoby\" value=\"Year\">
   <option>Year</option>
   <option>1980</option>
   <option>1981</option>
   <option>1982</option>
   <option>1982</option>
   <option>1983</option>
   <option>1984</option>
   <option>1985</option>
   <option>1986</option>
   <option>1987</option>
   <option>1988</option>
   <option>1989</option>
   <option>1990</option>
   <option>1991</option>
   <option>1992</option>
   <option>1993</option>
   <option>1994</option>
   <option>1995</option>
   <option>1996</option>
   <option>1997</option>
   <option>1998</option>
   <option>1999</option>
   <option>2000</option>
   <option>2001</option>
   <option>2002</option>
   <option>2003</option>
   <option>2004</option>
   <option>2005</option>
   <option>2006</option>
   <option>2007</option>
   <option>2008</option>
   <option>2009</option>
   <option>2010</option>
</select>
  <select id=\"dob\" size=\"1\" name=\"edobm\" value=\"month\">  </th>
  <option>month</option>
   <option>1</option>
   <option>2</option>
   <option>3</option>
   <option>4</option>
   <option>5</option>
   <option>6</option>
   <option>7</option>
   <option>8</option>
   <option>9</option>
   <option>10</option>
   <option>11</option>
   <option>12</option>
</select>
<select id=\"dob\" size=\"1\" name=\"edobd\" value=\"day\">
   <option>date</option>
   <option>1</option>
   <option>2</option>
   <option>3</option>
   <option>4</option>
   <option>5</option>
   <option>6</option>
   <option>7</option>
   <option>8</option>
   <option>9</option>
   <option>10</option>
   <option>11</option>
   <option>12</option>
   <option>13</option>
   <option>14</option>
   <option>15</option>
   <option>16</option>
   <option>17</option>
   <option>18</option>
   <option>19</option>
   <option>20</option>
   <option>21</option>
   <option>22</option>
   <option>23</option>
   <option>24</option>
   <option>25</option>
   <option>26</option>
   <option>27</option>
   <option>28</option>
   <option>29</option>
   <option>30</option>
   <option>31</option>
</select> </td></tr></p>
<p class=\"formklein\"\"><b>All Fields are required</b></p>
<input type=\"image\" src=\"Signup.png\" alt=\"Submit Form\" />
	</form>	";	?>
	
</div>
</div>
</div>
<div id= 'rightcontent'>

</div>
</div>
</div>
<div id="container" style="visibility:hidden;">
	<div id="footer">
	  <p>Did not find the answer to the question you are looking for.Ask us a question we'll respond question</p>
	
	</div>
</div>
<div id="containerfooter">
<div id="mainfooter">
<ul class="menu" id="navfoot" style="padding-left: 0px;">
			<li style="padding-right: 0px; width: 100px;"><a href="home.php" onclick="direct('')" >Home</a></li>
			<li style = "width: 100px;"><a href="aboutus.php" onclick="direct('')">About us</a></li>
			<li style = ""><a href="entertainment.php" onclick="direct('')">Entertainment</a></li>
			<li style = "width: 112px;"><a href="education.php" onclick="direct('')">Education</a></li>	
			<li style = "margin-left: 0px; width: 100px;"><a href="food.php" onclick="direct('')">Food</a>
			<li style = "margin-left: 0px; width: 103px;height: 65px;"><a href="health.php" onclick="direct('')">Health</a>
			<li style = "height: 65px;"><a href="misc.php" onclick="direct('')">Miscellanious</a>
				</li>
			<li><a href="contact.php" onclick="direct('')">Contact Us</a></li>		
			<li style="border-right: 0px solid;"><a href="question.php" onclick="direct('')">Ask a Question</a></li>			
</ul>
		<br><br>
Wehaveanswers CopyRights Reserved @2014

</div>
</div>