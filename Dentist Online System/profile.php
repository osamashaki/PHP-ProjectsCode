<?
session_start();
include("connected.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome..</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #F07166}
.style7 {color: #FF0000}
.style8 {color: #556C9A}
-->
</style>
<script language="JavaScript" src="calendar_us.js"></script>
	<link rel="stylesheet" href="calendar.css">
</head>
<body>
<div id="container">
  <div id="banner">
    <h1>&nbsp;</h1>
    <h1>&nbsp;</h1>
    <h1 class="style3">&nbsp;</h1>
  </div>
  <table width="100%" border="0" align="center" bgcolor="#FCE4D1">
    <tr>
      <td width="20%"><div align="center" class="style8"><a href="index.php">HOME PAGE </a></div></td>
      <td width="20%"><div align="center"><a href="treatments.php">TREATMENTS</a><a href="treatments.php" class="style8"></a></div></td>
      <td width="20%"><div align="center"><a href="register.php">REGISTER</a></div></td>
      <td width="21%"><div align="center" class="style8"><a href="aboutus.php">ABOUT US</a></div></td>
      <td width="19%"><div align="center" class="style8"><a href="contactus.php">CONTACT US</a></div></td>
    </tr>
  </table>  
  <div class="intro">
    <h2> We care </h2>
    <div class="scroll">
      <p><img src="img/ser-banner3.jpg" alt="star" /> Make Your Smile Beautiful. </p>
    </div>
  </div>
  <div class="separator"></div>
  <div class="intro2">
    <h2> about </h2>
    <div class="scroll">
      <p><img src="img/star.gif" alt="star" />  <em>Selamat Datang</em>&nbsp;to Our Dental Clinic website!</p>
    </div>
  </div>
  <div class="separator"></div>
  <div class="intro3">
    <h2> your smile </h2>
    <div class="scroll">
      <p><img src="img/rght.jpg" alt="star" />  </p>
    </div>
  </div>
  <div style="clear:both;"></div>
  <div id="sidebar">
    <h1> Links </h1>
    <p>
      <?
		echo "Welcome  "  .$_SESSION["name"]. "<br/><br/>";
		$pid= $_GET["id"];
    ?>
    </p>
    <table width="70%" align="center" cellspacing="2">
    <tr><td align="left"> <a href="profile.php?id=<? echo $pid; ?>"><strong>My Profile</strong></a></td> </tr>
    <tr><td align="left"><a href="apptmnt.php?id=<? echo $pid; ?>"><strong>My Appointments</strong></a></td> </tr>
    <tr><td align="left"><a href="trtment.php?id=<? echo $pid; ?>"><strong>My Treatments</strong></a></td> </tr>
    <tr><td align="left"><a href="payment.php?id=<? echo $pid; ?>"><strong>My Payments</strong></a></td> </tr>
    <tr><td align="left"><a href="pmsgs.php?id=<? echo $pid; ?>"><strong>My Messages</strong></a></td> </tr>
    <tr><td align="left"><a href="logout.php">Log out</a></td> </tr>
    </table>
  </div>
  <div id="content">
    <?
		$pid = $_GET["id"];
		$data = mysql_fetch_array(mysql_query("SELECT name,gender,mobile,email,dob,country FROM patient WHERE id = '$pid' "));
		$name = $data[0];
		$gender = $data[1];
		$mobile = $data[2];
		$email = $data[3];
		$dob = $data[4];
		$country = $data[5];
	
	if(isset($_POST['update']))
	{
		
		$name = $_REQUEST["name"];
		$gender = $_POST['gender'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$dob = $_POST['timestamp'];
		$country = $_POST['country'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		
		if($password != $repassword)
		{	
			echo "<center><h3>Password and Confirm password do not match!</h3>";
			echo "<a href='javascript:history.back();'>Back</a></center>";
		}
		else
		{
				
				//$sqlUpdate = "UPDATE patient SET name='$name', password='$password' WHERE id='$pid'";	
				$sqlUpdate = "UPDATE patient SET name='$name',gender='$gender',mobile='$mobile',email='$email',dob='$dob',country='$country', 	              password='$password' WHERE id='$pid'";		
				mysql_query($sqlUpdate); 
				echo "<center><h3>Account updated successfully.</h3></center>";
				$where = "profile.php?id=$pid"; 
				echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"2;URL=$where\">"; 
				//echo "<a href='profile.php?id=$pid'>My Profile</a><br/><br/>";
		}
	}
	else
	{
	?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $pid;?>" method="post" name="form1">
    <table width="500" border="0" cellpadding="0" cellspacing="2">
      <tr>
        <td height="30" colspan="2"><h1>My Profile:</h1></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
     
      <tr>
        <td width="25%" class="form_label_right"><span class="style7">*</span> Your Name: </td>
        <td width="75%"><input name="name" type="text" id="name" value="<? echo $name;?>" size="40" /></td>
      </tr>
      <tr>
        <td class="form_label_right"><span class="style7">*</span> Mobile:</td>
        <td><input name="mobile" type="text" id="mobile" size="40" value="<? echo $mobile;?>"/></td>
      </tr>
      <tr>
        <td class="form_label_right"><span class="style7">*</span> Your E-mail: </td>
        <td><input name="email" type="text" id="email" size="40" value="<? echo $email;?>"/></td>
      </tr>
      <tr>
        <td class="form_label_right"><span class="style7">*</span> Password: </td>
        <td><input name="password" type="password" id="password" size="20" /></td>
      </tr>
      <tr>
        <td class="form_label_right"><span class="style7">*</span> Confirm Password: </td>
        <td><input name="repassword" type="password" id="repassword" size="20" /></td>
      </tr>
      <tr>
        <td class="form_label_right">Gender: </td>
        <td><table width="34%" border="0" cellspacing="1" cellpadding="1">
            <tr>
              <td width="22%"><input name="gender" type="radio" value="Male" checked="checked" /></td>
              <td width="78%" class="form_label_left">Male</td>
            </tr>
            <tr>
              <td><input name="gender" type="radio" value="Female"/></td>
              <td class="form_label_left">Female</td>
            </tr>
        </table></td>
      </tr>

      <tr>
        <td class="form_label_right">Date of birth: </td>
        <td><input name="timestamp" type="text" size="9" value="<? echo $dob;?>" />
            <script language="JavaScript">
			new tcal ({
				// form name
				'formname': 'form1',
				// input name
				'controlname': 'timestamp'
			});

			</script>	
        (mm/dd/yyyy)</td>
      </tr>
      <tr>
        <td> Country: </td>
        <td><select name="country" size="1">
			  <option value="<? echo $country;?>"><? echo $country;?></option>
            <option value="Afghanistan">Afghanistan</option>
          <option value="&Atilde;&hellip;land Islands">&Atilde;&hellip;land Islands</option>
          <option value="Albania">Albania</option>
          <option value="Algeria">Algeria</option>
          <option value="American Samoa">American Samoa</option>
          <option value="Andorra">Andorra</option>
          <option value="Angola">Angola</option>
          <option value="Anguilla">Anguilla</option>
          <option value="Antarctica">Antarctica</option>
          <option value="Antigua and Barbuda">Antigua and Barbuda</option>
          <option value="Argentina">Argentina</option>
          <option value="Armenia">Armenia</option>
          <option value="Aruba">Aruba</option>
          <option value="Australia">Australia</option>
          <option value="Austria">Austria</option>
          <option value="Azerbaijan">Azerbaijan</option>
          <option value="Bahamas">Bahamas</option>
          <option value="Bahrain">Bahrain</option>
          <option value="Bangladesh">Bangladesh</option>
          <option value="Barbados">Barbados</option>
          <option value="Belarus">Belarus</option>
          <option value="Belgium">Belgium</option>
          <option value="Belize">Belize</option>
          <option value="Benin">Benin</option>
          <option value="Bermuda">Bermuda</option>
          <option value="Bhutan">Bhutan</option>
          <option value="Bolivia">Bolivia</option>
          <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
          <option value="Botswana">Botswana</option>
          <option value="Bouvet Island">Bouvet Island</option>
          <option value="Brazil">Brazil</option>
          <option value="British Indian Ocean territory">British Indian Ocean territory</option>
          <option value="Brunei Darussalam">Brunei Darussalam</option>
          <option value="Bulgaria">Bulgaria</option>
          <option value="Burkina Faso">Burkina Faso</option>
          <option value="Burundi">Burundi</option>
          <option value="Cambodia">Cambodia</option>
          <option value="Cameroon">Cameroon</option>
          <option value="Canada">Canada</option>
          <option value="Cape Verde">Cape Verde</option>
          <option value="Cayman Islands">Cayman Islands</option>
          <option value="Central African Republic">Central African Republic</option>
          <option value="Chad">Chad</option>
          <option value="Chile">Chile</option>
          <option value="China">China</option>
          <option value="Christmas Island">Christmas Island</option>
          <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
          <option value="Colombia">Colombia</option>
          <option value="Comoros">Comoros</option>
          <option value="Congo">Congo</option>
          <option value="Congo, Democratic Republic">Congo, Democratic Republic</option>
          <option value="Cook Islands">Cook Islands</option>
          <option value="Costa Rica">Costa Rica</option>
          <option value="C&Atilde;&acute;te d'Ivoire (Ivory Coast)">C&Atilde;&acute;te d'Ivoire (Ivory Coast)</option>
          <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
          <option value="Cuba">Cuba</option>
          <option value="Cyprus">Cyprus</option>
          <option value="Czech Republic">Czech Republic</option>
          <option value="Denmark">Denmark</option>
          <option value="Djibouti">Djibouti</option>
          <option value="Dominica">Dominica</option>
          <option value="Dominican Republic">Dominican Republic</option>
          <option value="East Timor">East Timor</option>
          <option value="Ecuador">Ecuador</option>
          <option value="Egypt">Egypt</option>
          <option value="El Salvador">El Salvador</option>
          <option value="Equatorial Guinea">Equatorial Guinea</option>
          <option value="Eritrea">Eritrea</option>
          <option value="Estonia">Estonia</option>
          <option value="Ethiopia">Ethiopia</option>
          <option value="Falkland Islands">Falkland Islands</option>
          <option value="Faroe Islands">Faroe Islands</option>
          <option value="Fiji">Fiji</option>
          <option value="Finland">Finland</option>
          <option value="France">France</option>
          <option value="French Guiana">French Guiana</option>
          <option value="French Polynesia">French Polynesia</option>
          <option value="French Southern Territories">French Southern Territories</option>
          <option value="Gabon">Gabon</option>
          <option value="Gambia">Gambia</option>
          <option value="Georgia">Georgia</option>
          <option value="Germany">Germany</option>
          <option value="Ghana">Ghana</option>
          <option value="Gibraltar">Gibraltar</option>
          <option value="Greece">Greece</option>
          <option value="Greenland">Greenland</option>
          <option value="Grenada">Grenada</option>
          <option value="Guadeloupe">Guadeloupe</option>
          <option value="Guam">Guam</option>
          <option value="Guatemala">Guatemala</option>
          <option value="Guinea">Guinea</option>
          <option value="Guinea-Bissau">Guinea-Bissau</option>
          <option value="Guyana">Guyana</option>
          <option value="Haiti">Haiti</option>
          <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
          <option value="Honduras">Honduras</option>
          <option value="Hong Kong">Hong Kong</option>
          <option value="Hungary">Hungary</option>
          <option value="Iceland">Iceland</option>
          <option value="India">India</option>
          <option value="Indonesia">Indonesia</option>
          <!-- copyright Felgall Pty Ltd -->
          <option value="Iran">Iran</option>
          <option value="Iraq">Iraq</option>
          <option value="Ireland">Ireland</option>
          <option value="Italy">Italy</option>
          <option value="Jamaica">Jamaica</option>
          <option value="Japan">Japan</option>
          <option value="Jordan">Jordan</option>
          <option value="Kazakhstan">Kazakhstan</option>
          <option value="Kenya">Kenya</option>
          <option value="Kiribati">Kiribati</option>
          <option value="Korea (north)">Korea (north)</option>
          <option value="Korea (south)">Korea (south)</option>
          <option value="Kuwait">Kuwait</option>
          <option value="Kyrgyzstan">Kyrgyzstan</option>
          <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
          <option value="Latvia">Latvia</option>
          <option value="Lebanon">Lebanon</option>
          <option value="Lesotho">Lesotho</option>
          <option value="Liberia">Liberia</option>
          <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
          <option value="Liechtenstein">Liechtenstein</option>
          <option value="Lithuania">Lithuania</option>
          <option value="Luxembourg">Luxembourg</option>
          <option value="Macao">Macao</option>
          <option value="Macedonia, Former Yugoslav Republic Of">Macedonia, Former Yugoslav Republic Of</option>
          <option value="Madagascar">Madagascar</option>
          <option value="Malawi">Malawi</option>
          <option value="Malaysia">Malaysia</option>
          <option value="Maldives">Maldives</option>
          <option value="Mali">Mali</option>
          <option value="Malta">Malta</option>
          <option value="Marshall Islands">Marshall Islands</option>
          <option value="Martinique">Martinique</option>
          <option value="Mauritania">Mauritania</option>
          <option value="Mauritius">Mauritius</option>
          <option value="Mayotte">Mayotte</option>
          <option value="Mexico">Mexico</option>
          <option value="Micronesia">Micronesia</option>
          <option value="Moldova">Moldova</option>
          <option value="Monaco">Monaco</option>
          <option value="Mongolia">Mongolia</option>
          <option value="Montenegro">Montenegro</option>
          <option value="Montserrat">Montserrat</option>
          <option value="Morocco">Morocco</option>
          <option value="Mozambique">Mozambique</option>
          <option value="Myanmar">Myanmar</option>
          <option value="Namibia">Namibia</option>
          <option value="Nauru">Nauru</option>
          <option value="Nepal">Nepal</option>
          <option value="Netherlands">Netherlands</option>
          <option value="Netherlands Antilles">Netherlands Antilles</option>
          <option value="New Caledonia">New Caledonia</option>
          <option value="New Zealand">New Zealand</option>
          <option value="Nicaragua">Nicaragua</option>
          <option value="Niger">Niger</option>
          <option value="Nigeria">Nigeria</option>
          <option value="Niue">Niue</option>
          <option value="Norfolk Island">Norfolk Island</option>
          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
          <option value="Norway">Norway</option>
          <option value="Oman">Oman</option>
          <option value="Pakistan">Pakistan</option>
          <option value="Palau">Palau</option>
          <option value="Palestinian Territories">Palestinian Territories</option>
          <option value="Panama">Panama</option>
          <option value="Papua New Guinea">Papua New Guinea</option>
          <option value="Paraguay">Paraguay</option>
          <option value="Peru">Peru</option>
          <option value="Philippines">Philippines</option>
          <option value="Pitcairn">Pitcairn</option>
          <option value="Poland">Poland</option>
          <option value="Portugal">Portugal</option>
          <option value="Puerto Rico">Puerto Rico</option>
          <option value="Qatar">Qatar</option>
          <option value="R&Atilde;&copy;union">R&Atilde;&copy;union</option>
          <option value="Romania">Romania</option>
          <option value="Russian Federation">Russian Federation</option>
          <option value="Rwanda">Rwanda</option>
          <option value="Saint Helena">Saint Helena</option>
          <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
          <option value="Saint Lucia">Saint Lucia</option>
          <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
          <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
          <option value="Samoa">Samoa</option>
          <option value="San Marino">San Marino</option>
          <option value="Sao Tome and Principe">Sao Tome and Principe</option>
          <!-- copyright Felgall Pty Ltd -->
          <option value="Saudi Arabia" selected="selected">Saudi Arabia</option>
          <option value="Senegal">Senegal</option>
          <option value="Serbia">Serbia</option>
          <option value="Seychelles">Seychelles</option>
          <option value="Sierra Leone">Sierra Leone</option>
          <option value="Singapore">Singapore</option>
          <option value="Slovakia">Slovakia</option>
          <option value="Slovenia">Slovenia</option>
          <option value="Solomon Islands">Solomon Islands</option>
          <option value="Somalia">Somalia</option>
          <option value="South Africa">South Africa</option>
          <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
          <option value="Spain">Spain</option>
          <option value="Sri Lanka">Sri Lanka</option>
          <option value="Sudan">Sudan</option>
          <option value="Suriname">Suriname</option>
          <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
          <option value="Swaziland">Swaziland</option>
          <option value="Sweden">Sweden</option>
          <option value="Switzerland">Switzerland</option>
          <option value="Syria">Syria</option>
          <option value="Taiwan">Taiwan</option>
          <option value="Tajikistan">Tajikistan</option>
          <option value="Tanzania">Tanzania</option>
          <option value="Thailand">Thailand</option>
          <option value="Togo">Togo</option>
          <option value="Tokelau">Tokelau</option>
          <option value="Tonga">Tonga</option>
          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
          <option value="Tunisia">Tunisia</option>
          <option value="Turkey">Turkey</option>
          <option value="Turkmenistan">Turkmenistan</option>
          <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
          <option value="Tuvalu">Tuvalu</option>
          <option value="Uganda">Uganda</option>
          <option value="Ukraine">Ukraine</option>
          <option value="United Arab Emirates">United Arab Emirates</option>
          <option value="United Kingdom">United Kingdom</option>
          <option  value="United States of America">United States of America</option>
          <option value="Uruguay">Uruguay</option>
          <option value="Uzbekistan">Uzbekistan</option>
          <option value="Vanuatu">Vanuatu</option>
          <option value="Vatican City">Vatican City</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Vietnam">Vietnam</option>
          <option value="Virgin Islands (British)">Virgin Islands (British)</option>
          <option value="Virgin Islands (US)">Virgin Islands (US)</option>
          <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
          <option value="Western Sahara">Western Sahara</option>
          <option value="Yemen">Yemen</option>
          <option value="Zaire">Zaire</option>
          <option value="Zambia">Zambia</option>
          <option value="Zimbabwe">Zimbabwe</option>
        </select>        </td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name="update" type="submit" id="update" value="Update Profile" /></td>
      </tr>
    </table>
	</form>
	<?
	}
	?>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
  <div id="footer"> 
    <div align="center">Dental Online System - All Rights Reserved &copy; 2015 DOS SYSTEM <br/>
    </div>
  </div>
</div>
</body>
</html>
