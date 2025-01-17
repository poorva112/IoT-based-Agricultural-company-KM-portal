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
	<center><h1> Design </h1></center> <a href="#ex1" rel="modal:open"><input type="button" name="Edit" value="Edit" id="button"></a>
	<h2 id="parampara" class="headings">What role does design play within our organisation? </h2> 
	<p> Designers often wonder or whine about how their work is not recognized, accepted or even respected in their organization. What many designers don’t realize is how they or their designs are treated has to do with how the discipline of design is viewed within their organization. In this article I will frequently reference Design Management methodology in organizations that have in-house design teams, however most of the topics we will cover today can also apply to consultancies working with businesses that buy design services.<br>

There are many levels of how Design is viewed or integrated within an organization. This is what I like to call “The Design Functionality Axis” as illustrated above. The Axis stretches from a low level Supplier relationship at the base of the triangle to a Strategic Design Leadership relationship.<br>
In the next few paragraphs, I hope to explain in detail what it means for a company to operate at these different Design functional levels, what designers working at these levels can expect and some hints on what can be done to push the value of design in your organization up this axis.<br>
</p>
<br>
<h3 id="pratishtha" class="headings">A Supplier Relationship</h3>
<p> This is the lowest relationship denominator and is no coincidence that it is at the bottom of the pyramid. In a Supplier relationship, design and designers are often put in an execution role. In other words, a design is treated a means to an end. It is often seen as being done “off the corner of the table” and in a few hours. Often very styling in nature, the majority of consulting and freelance work often operates at this level. With in-house designers, it is no different. Here a designer mostly works alone, does almost everything remotely creative, and has a hard time trying to convince his/her boss the value of design. Ironically such companies know that they need design, but do not have any enabling factors to take it past the superficial. Furthermore they make the mistake of hiring the cheapest designer or service they can find, often including designers fresh out of school.<br></p>
<br>
<h3 id="anushaasan" class="headings">A Supporting Role </h3>
<p> It gets a little better here. Designers are seen as very tactical in nature. In other words, Design is seen as useful in articulating a required need. Here designers are found as part of and doing the bidding of established departments like R&D, Engineering or even Marketing. While much better than a supplier, a designer in a supporting role still suffers from working with down stream information, and have very little influence in the brief requirements. What is worst, is that designers will have to deal with departmental politics of diverging objectives, an awful design decision-making process, and many opportunities to rework designs due to changing requirements.<br>
</p>
<br>
<h3 id="pratishtha1" class="headings">In a Functional Position</h3>
<p> Often, strong designers with a great track record, or who have been in a company for a long time, will often evolve their contribution into a functional role. Here a young organization starts to mature in regard to their view of Design. Such functional roles are evident with a creation or the existence of a Design Department. Now on par with the other functional departments like R&D or Engineering, Design in a Functional role starts to really provide value to a company by having equal say in solutions. Even though you are now closer to the decision maker, you will still need to negotiate different environments to get things done, and have to live with recommendations as you may still have little say in decisions made.<br></p>
<br>
<h3 id="anushaasan1" class="headings">A Partnership </h3>
<p> This is probably one of the best places a designer can be in. In a partnership arrangement, a designer gets to be part of the decision-making process, as well as influence the business strategy of a company. With close partnerships, a designer has a lot of trust within an organization and his word has a lot of weight. It takes a designer with quite a lot of skill to be successful in this role as he has to frame complex design problems into a language the business can understand. It is not only about strategy, but designers in this situation, have not only established trust through good communication, but able to deliver the goods by seeing it through to the end. Here the design partnership will often have a strong team of designers that support its success.<br>
</p>
<br>
<h3 id="anushaasan2" class="headings">Strong Design Leadership </h3>
<p> Finally we end this post with the future of the function of Design within an organization, Design Leadership. With a strong partnership in place, the logical next step is for design to own the competence of design within an organization. Here the role of design is naturally very strategic, where design plays a part in high-level business discussions, or even the main driver leading key initiatives. Design does this by identifying potential opportunities and articulates solutions that are vital for a successful brand or business. It takes an organization with a very mature and strong understanding of the value of design to accept Design in a leadership role. Design has now gone beyond form, as it resides in the DNA of a company and integral to its daily operations.<br>
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
