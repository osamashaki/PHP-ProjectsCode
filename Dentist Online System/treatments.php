<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome..</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #F07166}
.style5 {
	color: #F07100;
	font-size: 130%;
	font-weight: bold;
}
.style6 {color: #FFFFFF}
.style7 {color: #556C9A}
-->
</style>
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
    <td width="20%"><div align="center" class="style7"><a href="index.php">HOME PAGE </a></div></td>
	  <td width="20%"><div align="center"><a href="treatments.php">TREATMENTS</a><a href="treatments.php" class="style7"></a></div></td>
	    <td width="20%"><div align="center"><a href="register.php">REGISTER</a></div></td>
		  <td width="21%"><div align="center" class="style7"><a href="aboutus.php">ABOUT US</a></div></td>
		    <td width="19%"><div align="center" class="style7"><a href="contactus.php">CONTACT US</a></div></td>
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
    <ul>
      <li><a href="index.php">HOME PAGE </a></li>
      <li><a href="treatments.php">TREATMENTS</a></li>
      <li><a href="register.php">REGISTER</a></li>
      <li><a href="aboutus.php">ABOUT</a> US</li>
      <li><a href="contactus.php">CONTACT US</a></li>
    </ul>
    </p>
    <hr color="#FF9900"/>
    </p>
	
	 <? if (isset($_POST['login']))
	 { 	
	 	error_reporting(0);
		include("connected.php");
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(empty($username) || empty($password)) 
		{
			
			echo "<center>Username / Password are required fields!<br/><br/>";
			echo "<a href='index.php'>Back</a></center>"; 
		} 
		else 
		{
			
			$sql="SELECT COUNT(*) AS total FROM patient WHERE email='$username' and password='$password' ";	
			$result=mysql_query($sql);
			$row = mysql_fetch_array($result);
			$count = $row['total'];
			if ($count==0) 
			{
				
				echo "<center>Invalid Username / Password!<br/><br/>";
				echo "<a href='index.php'>Back</a></center>"; 
			} 
			else 
			{
				# get user details and store in session and redirect to user home page.
				session_start();
				
				$data = mysql_fetch_array(mysql_query("SELECT id,name FROM patient WHERE email='$username' AND password='$password'"));
				$_SESSION["userid"] = $data[0];
				$_SESSION["name"] = $data[1];
				$_SESSION["logged"] = "YES";
				$pid= $data[0];
				$loggeduser =  $data[1]; echo "Welcome  "  .$loggeduser. "<br/><br/>"; 
				
				
				echo "<a href='profile.php?id=$pid'>My Profile</a><br/><br/>";
				
				echo "<a href=logout.php>Logout</a>";
 
			
			}	
		}
}
else
{
?>
	
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<table width="100%" border="1" style="border-style:dotted">
      <tr>
        <td colspan="2"><span class="style5">LogIn: </span></td>
      </tr>
      <tr>
        <td colspan="2"><strong>Please enter Username and Password: </strong></td>
      </tr>
      <tr>
        <td width="27%"><div align="left"><strong>Email:</strong></div></td>
        <td><input name="username" type="text" id="username" /></td>
      </tr>
      <tr>
        <td><div align="left"><strong>Password:</strong></div></td>
        <td><input name="password" type="password" id="password" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input name="login" type="submit" id="login" style="background-color:#6CA5C2" value="Login" /></td>
      </tr>
      <tr>
        <td colspan="2"><a href="#"><strong>Forget Password </strong></a></td>
      </tr>
    </table>
	</form>
<?
}
?> 
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>

  <div id="content">
    <h1>Our Treatments  </h1>
    
    <p>At Our Dental Clinic we provide the following treatments:</p>
    <table width="100%" height="300" border="0">
      <tr>
        <td  align="justify"><p align="justify"><strong>ROOT CANAL THERAPY (RCT)</strong><br />
          The technical name for root canal therapy is endodontics,&nbsp;<em>endo</em>&nbsp;meaning  the inside of something while&nbsp;<em>odont</em>&nbsp;is Greek for tooth. All  dentists receive basic training in endodontics and can competently perform root  canal therapy after several years of experience.<br />
  <br />
          RCT is necessary when the inside of the tooth known as the pulp starts to decay  due to several causes, namely deep decay, repeated dental procedures on the  tooth, or a crack or chip in the tooth. Sometimes, an injury to a tooth may  cause pulp damage even if the tooth has no visible chips or cracks. If pulp  inflammation or infection is left untreated, it can cause pain or lead to an  abscess. (<a href="http://www.aae.org/patients/patientfacts.htm">http://www.aae.org/patients/patientfacts.htm</a>).<br />
  <br />
          Basically, the treatment involves the removal of the infected pulp via an  opening in the crown and filling the cavity with &ldquo;gutta percha&rdquo; a rubber-like  material. Of course, the entire operation is done with anesthetics, so you do  not feel any pain.&nbsp; RCT is cheaper than extraction in the long run since  the latter may involve further treatment.... &ldquo;An extracted tooth must be  replaced with a bridge or implant to restore chewing function and prevent  adjacent teeth from shifting. These procedures tend to cost more than  endodontic treatment and appropriate restoration. With root canal treatment you  save your natural teeth and money.&rdquo; (<a href="http://www.aae.org/patients/patientfacts.htm">http://www.aae.org/patients/patientfacts.htm</a>). However the dentist will advise you on  whether your teeth can still be saved via root canal treatment and appropriate  restoration.<br />
  <strong><br />
    BRACES (ORTHODONTICS)</strong><br />
          Why do dentists prescribe braces to some patients? Braces  are the dentist&rsquo;s tools to correct a variety of misaligned teeth, technically  known as malocclusions.&nbsp; When your teeth are not properly aligned in a  regular curvature in your mouth your trained dentist can recommend you a set of  braces that try to gradually move the teeth so that they are better aligned.  Before this is done the specialist will have to take X-ray images of your set  of teeth and determine whether there is any need for one or more tooth to be  extracted. This has to be done if some teeth overlap. The process of  orthodontic treatment takes between 18 and 30 months. Once corrected, you will  have a beautiful set of teeth that can give you that perfect smile.&nbsp; The  best time to correct misalignment of your teeth is after age twelve, although  it is still possible at a much later age.&nbsp; Consult your dentist if you are  contemplating to wear braces to improve your look and perfect your smile.&nbsp;  For more information see<a href="http://www.braces.org/knowmore/length/">http://www.braces.org/knowmore/length/</a> <br />
  <strong><br />
    FISSURE SEALANTS</strong><br />
          A fissure is a crack that is associated with the chewing  surface of molars. If left untreated, fissures tend to cause tooth decay as  bacteria find fissures ideal place to breed. Normally, the toothbrush bristle  is too large to clear food residues that reside in the cracks (fissures).  &nbsp;The remedy dentists will use is &ldquo;fissure sealants&rdquo; &ndash; a chemical that  seals the cracks and make them &ldquo;germ-proof&rdquo;. This is because no more plaque and  food will be able to find their way into the cracks. Plaque is a yellowish  sticky paste that accumulates on teeth. &ldquo;As long as the sealant remains intact,  the tooth surface will be protected from decay. Sealants hold up well under the  force of normal chewing and usually last several years before a reapplication  is needed. During your regular dental visits, your dentist will check the  condition of the sealants and reapply them when necessary.&rdquo; (<a href="http://drali.enana.com/kids/sealent.htm">http://drali.enana.com/kids/sealent.htm</a>).</p>
          <p align="justify"><strong>CROWNING</strong><br />
            Crowns are recommended when too much tooth structure has  been lost to decay or a tooth has fractured due to trauma, such as motor  vehicle accidents or physical abuse. The dentist will determine whether the  tooth needs to be root treated before the crown can be placed. If the fracture  is so severe that the nerves are exposed, the tooth can only be saved by root  canal treatment prior to crowning work. Crowning involves partial filling and  then shaving or trimming the filled tooth so that it can be capped or crowned.</p>
          <p align="justify"><strong>BRIDGES</strong><br />
            When one or more teeth are missing a gap(s) is created. A  bridge is a structure used to fill this gap. &ldquo;A bridge is made up of two&nbsp;<a href="http://www.webmd.com/content/article/66/79592.htm">crowns</a>&nbsp;for the teeth on either side of the gap  &ndash;&nbsp; these two anchoring teeth are called abutment teeth &ndash; and a false  tooth/teeth in between. These false teeth are called pontics and can be made  from gold, alloys, porcelain or a combination of these materials. Dental  bridges are supported by natural teeth or implants.&rdquo; (See this link for further  details: http://www.webmd.com/content/article/66/79611.htm). The benefits of a  bridge are:</p>
          <ul>
            <li><span dir="ltr"> </span>Prevent remaining teeth from drifting out of position</li>
            <li><span dir="ltr"> </span>Distribute the forces in your bite properly by replacing  missing teeth</li>
            <li><span dir="ltr"> </span>Restore your smile</li>
            <li><span dir="ltr"> </span>Maintain the shape of your face</li>
            <li><span dir="ltr"> </span>Restore your ability to properly chew and speak</li>
          </ul>
          <p align="justify"><strong>GUM DISEASE AND TREATMENT</strong><br />
            According to Wikepedia,&nbsp;&nbsp;<em>Periodontics</em>&nbsp;is  the study of&nbsp;<em>clinical</em>&nbsp;aspects of the supporting structures of  the teeth (i.e the<a href="http://en.wikipedia.org/wiki/Periodontium" title="Periodontium">periodontium</a>), which includes the&nbsp;<a href="http://en.wikipedia.org/wiki/Gingiva" title="Gingiva">gingiva</a>&nbsp;(gums),&nbsp;<a href="http://en.wikipedia.org/wiki/Alveolar_bone" title="Alveolar bone">alveolar bone</a>&nbsp;(jaw), root&nbsp;<a href="http://en.wikipedia.org/wiki/Cementum" title="Cementum">cementum</a>, and the&nbsp;<a href="http://en.wikipedia.org/wiki/Periodontal_ligament" title="Periodontal ligament">periodontal  ligament</a>.  The word comes from the&nbsp;<a href="http://en.wikipedia.org/wiki/Greek_language" title="Greek language">Greek</a>&nbsp;words&nbsp;<em>peri</em>&nbsp;meaning  around and&nbsp;<em>odons</em>&nbsp;meaning&nbsp;<a href="http://en.wikipedia.org/wiki/Tooth" title="Tooth">tooth</a>. Literally taken, it means study of that  which is &quot;around the tooth&quot;.&nbsp;<a href="http://en.wikipedia.org/wiki/Periodontal_diseases" title="Periodontal diseases">Periodontal  diseases</a>&nbsp;take  on many different forms, but is usually a result of&nbsp;<a href="http://en.wikipedia.org/wiki/Bacterial" title="Bacterial">bacterial</a>&nbsp;<a href="http://en.wikipedia.org/wiki/Infection" title="Infection">infection</a>of the&nbsp;<a href="http://en.wikipedia.org/wiki/Gums" title="Gums">gums</a>. Left untreated, it often leads to tooth loss and  alveolar bone loss.<br />
  <br />
            Gum disease is caused by poor oral hygiene, i.e. failure to brush teeth  regularly and cleaning between the teeth with dental floss or tooth picks. Both  these acts can prevent gum disease.&nbsp; The first sign of periodontal disease  is bleeding gums and the last sign is the loss of teeth.&nbsp; The disease is  painless and many people simply ignore the bleeding (<a href="http://www.doctorspiller.com/Gum_Disease.htm">http://www.doctorspiller.com/Gum_Disease.htm</a>).&nbsp;<br />
  <br />
            Periodontal disease is characterized by swollen, red gums, bleeding gums,  receding gums, gum abscesses, teeth that begin to look longer and longer  (prompting the old saying &quot;long of tooth&quot;) and eventually, loose  teeth (Dr Spiller, 2000).&nbsp;Not much can be done when gum disease is at an  advanced stage. Normally the dentist will advvise the patient to have the  affected tooth extracted.<br />
  <strong><br />
    COSMETIC DENTISTRY</strong><br />
            Most people want to look their best. A nice smile is a  good start to looking good&mdash;but only if the teeth are pleasing to look at. Teeth  discoloration is a common cause of personal embarassment. Nowadays it is  possible to restore your discolored teeth by visiting the local dentist who  will make them white again.&nbsp; Young people, especially would-be brides, may  find this treatment to be very useful if they feel that their teeth would not  be able to give that perfect smile due to discoloration. There are three types  of teeth discolorations: surface stains (caused by tea, coffee and tobacco),  plaque, and stains that are actually part of the basic tooth structure (caused  by the antibiotic, tetracycline).&nbsp;&nbsp; The dentist uses a polishing  technique to restore discolored teeth back to the original white. The process  can produce results that can last several years.&nbsp;<br />
  <strong>SCALING</strong><br />
            Scaling is a procedure involving the removal of tartar  which is plaque that has hardened due to inadequate removal and calcification  from the&nbsp; saliva.&nbsp; The procedure is recommended to be done at regular  intervals depending on the condition of your gum.&nbsp; The interval will be  prescribed by the examining dentist, which ideally should be either three, six  or twelve months. Failure to do this will result in accumulation of calculus  (tartar) leading to many complications, namely red and puffy gum, bleeding gum,  bad breath (helitosis), gum recession.&nbsp; The latter leads to swelling and  puss, pain, loosening of the teeth and eventually loss of teeth.&nbsp; The  benefit of regular check-up is to to catch tooth decay at an early stage when  simpler and less costly treatment can be carried out.&nbsp; Most patients would  delay seeing the dentist until it becomes an emergency.&nbsp;&nbsp;<br />
  <strong>FILLING</strong><br />
        Regular check-ups will also enable the dentist to know  when your tooth needs a filling.&nbsp; When check-ups are&nbsp; done regularly,  your tooth may need only&nbsp; a simple filling. Old fillings may also be  checked as to whether they need to be replaced.&nbsp; Do report any symptoms  that you may be having such as pain, sensitivity from any filled or unfilled  tooth. If you prefer not to feel any sensation when the filling is being done, do  request the doctor to use anaesthetic. </p>
        <p>&nbsp;</p></td>
      </tr>
    </table>
    </div>
  <div id="footer"> 
    <div align="center">Dental Online System - All Rights Reserved &copy; 2015 DOS SYSTEM <br/>
    </div>
  </div>
</div>
</body>
</html>
