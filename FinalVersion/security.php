<!DOCTYPE html>
<html>
<title>IoT in Agriculture</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
  height: 100%;
  line-height: 1.8;
}
.grey-background{
  background-color: #76987B; 
}
.pr_column {
  float: left;
  width: 33.33%;
  padding: 5px;
}
/* Clearfix (clear floats) */
.pr_row::after {
  content: "";
  clear: both;
  display: table;
}
/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("Images/landing.jpg");
  min-height: 100%;
}
.w3-bar .w3-button {
  padding: 16px;
}
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}
.w3-col :hover .image {
  opacity: 0.3;
}
.w3-col :hover .middle {
  opacity: 1;
}
#details
{
	text-align: justify;
	margin:8%;
}
#button
{
	margin-top: -20%;
	margin-left: 94%;
	padding: 0.5% 1.5% 0.5% 1.5%;
	border: 1px solid black;
	border-radius: 12px;
	font-size: 120%;
	color: white;
	background-color: black;
}
#submit
{
	padding: 0.5% 1.5% 0.5% 1.5%;
	border: 2px solid black;
	border-radius: 12px;
	font-size: 120%;
	color: white;
	background-color: black;	
}
.text
{
	border: 2px solid black;
	border-radius: 8px;
}
#ex1
{
	border: 2px solid black;
}
</style>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
	<a href="#home" class="w3-bar-item w3-button w3-wide"><img class="w3-image w3-round-large" src="Images/logo.jpeg" alt="LOGO" width="100" height="80"></a>
	<!-- Right-sided navbar links -->
	<div class="w3-right w3-hide-small">
	  <a href="experts.php" class="w3-bar-item w3-button" id="experts"><i class="fa fa-edit"></i> EXPERTS</a>
	  <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-info-circle"></i> ABOUT</a>
	  <a href="#iot" class="w3-bar-item w3-button"><i class="fa fa-cogs"></i> IoT</a>
	  <a href="#products" class="w3-bar-item w3-button"><i class="fa fa-th"></i> PRODUCTS</a>
	  <a href="#dept" class="w3-bar-item w3-button"><i class="fa fa-building"></i> DEPARTMENTS</a>
	  <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
	  <a href="#faq" class="w3-bar-item w3-button"><i class="fa fa-comment"></i> FAQs</a>
	  <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
	  <a href="login.html" class="w3-bar-item w3-button" id="log"><i class="fa fa-key"></i> LOG IN</a> 
	</div>
	<!-- Hide right-floated links on small screens and replace them with a menu icon -->

	<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
	  <i class="fa fa-bars"></i>
	</a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#iot" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-cogs"></i>IoT</a>
  <a href="#products" onclick="w3_close()" class="w3-bar-item w3-button">PRODUCTS</a>
  <a href="#dept" onclick="w3_close()" class="w3-bar-item w3-button">DEPARTMENTS</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <a href="login.html" onclick="w3_close()" class="w3-bar-item w3-button">LOG IN</a>
</nav>

<!-- product life cycles and complete details about the products in technical-->
<!-- Individual FAQs section in each department -->

<!-- Main div containing the content -->
<div id="details">
	<center><h1> Security </h1></center> <a href="#ex1" rel="modal:open"><input type="button" name="Edit" value="Edit" id="button"></a>
	<h2 id="parampara" class="headings">What is Corporate Security?</h2> 
	<p> Corporate security identifies and effectively mitigates or manages, at an early stage, any developments that may threaten the resilience and continued survival of a corporation. It is a corporate function that oversees and manages the close coordination of all functions within the company that are concerned with security, continuity and safety.<br>

Globalisation has changed the structure and pace of corporate life; the saturation of traditional markets is taking companies to more risky places; the shift towards a knowledge economy is eroding the importance of ‘place’ in the business world; new business practices such as offshoring challenge companies to manage at a distance; and new forms of accountability, such as corporate governance and corporate social responsibility, put added pressure on companies to match their words with deeds, wherever they are operating.<br>
</p>
<br>
<h2 id="pratishtha" class="headings">Core Elements </h2>
<p>Core elements of Corporate Security are: <br>
	<ul>
		<li>Personal security</li>
		<li>Physical security</li>
		<li>Information security</li>
		<li>Corporate Governance</li>
		<li>Compliance and ethics programs</li>
		<li>Crime prevention and detection</li>
		<li>Fraud Deterrence</li>
		<li>Investigations</li>
		<li>Risk Management</li>
		<li>Business Continuity Planning</li>
		<li>Crisis Management</li>
		<li>Environment, safety and health</li>
	</ul>
<br></p>
<br>
<h2 id="anushaasan" class="headings">Roles </h2>
<p> The <b>Chief Security Officer (CSO)</b> is the corporation's top executive who is responsible for security. The CSO serves as the business leader responsible for the development, implementation and management of the organization’s corporate security vision, strategy and programs. They direct staff in identifying, developing, implementing and maintaining security processes across the organization to reduce risks, respond to incidents, and limit exposure to liability in all areas of financial, physical, and personal risk; establish appropriate standards and risk controls associated with intellectual property; and direct the establishment and implementation of policies and procedures related to data security.<br>

For many years corporate security has been dominated by a ‘defensive’ approach, focused on protection and loss prevention. The head of security was seen as little more than the ‘guard at the gate’, someone whose actions invariably stopped people doing their jobs instead of enabling the business to function more effectively. Typically, heads of security came from a narrow talent pool, namely police, armed forces or intelligence.<br>
</p>
<br>

<!-- Main div ends -->
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
	<i class="fa fa-facebook-official w3-hover-opacity"></i>
	<i class="fa fa-instagram w3-hover-opacity"></i>
	<i class="fa fa-snapchat w3-hover-opacity"></i>
	<i class="fa fa-pinterest-p w3-hover-opacity"></i>
	<i class="fa fa-twitter w3-hover-opacity"></i>
	<i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>

 <div id="ex1" class="modal">
  <h3>Choose your heading</h3>
  	<select id = "addheading" class ="text"></select><br><br>
	<textarea id="addtext" class="text" rows="4" cols="50"></textarea><br><br>
	<input type="button" name="Submit" value="Submit" id="submit"><br><br>
   <a href="#" rel="modal:close"><span id="success"></span>Close</a>
</div>
<script type="text/javascript">
	var select = $("#addheading");
	$(".headings").each(function () {
		var option = document.createElement("option");
		console.log($(this).attr('id'));
		option.setAttribute("value",$(this).attr('id'));
		option.innerHTML = $(this).html();
		select.append(option);
	});
	$("#submit").on("click",function () {
		//alert("clicked");
		var text = $("#addtext").val();
		var selected = $("#addheading").children("option:selected").val();
		//alert(selected);
		console.log(selected);
		var paratext = $("#"+selected).next();
		paratext.html(paratext.html() + text);
		$("#addtext").val('');
		$("#success").html("Text Added Successfully! Please ");
		return false;
	});
</script>

</footer>
</body>
</html>
