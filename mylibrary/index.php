<title>library</title>
<style>
<?php include 'assets/css/index.css'?>
</style>
<?php include 'layout/head.php';?>
<?php include 'layout/header.php';?>
  
<div class="heading">
<h1><i><u>La Bibliothèque</u></i></h1>
<a class="add-btn" href="form.php">ADD New Book</a>
</div>
<div class="rightcontent" >
<div class="container">
	<div class="row">
	
		<div class="col-sm-4">
		    <div class= "image1">
		          <img src="assets/images/lib1.jpg" style="margin-left:30px", "height: 400px","width: 300px;">
			</div>	  
		</div>
		<div class="col-sm-8">
		     <div class="right1">
			        <h2>BOOK: 'The History of Tom Jones, a Foundling'</h2>
			        <h3>AUTHOR: 'Tom Jones'</h3>
			        <p>ABOUT: The History of Tom Jones, a Foundling, often known simply as Tom Jones, is a comic novel by English playwright and novelist Henry Fielding. It is a Bildungsroman and a picaresque novel. It was first published on 28 February 1749 in London and is among the earliest English works to be classified as a novel.</p>	
	            <div class="link">
	                  <a href="tom.php">Book details...</a>
	            </div>
			 </div>	
	    </div>
    </div>	
</div>
</div>
	
<div class="leftcontent">	
<div class="container">
	
	<div class="row">
	<div class="col-sm-8">
	    <div class="left1">
			<h2>BOOK: 'Pride and Prejudice'</h2>
			<h3>AUTHOR: 'Jane Austen'</h3>
			<p>ABOUT: Pride and Prejudice is a romantic novel of manners written by Jane Austen in 1813. The novel follows the character development of Elizabeth Bennet, the dynamic protagonist of the book who learns about the repercussions of hasty judgments and comes to appreciate the difference between superficial goodness and actual goodness.</p>
			
	        <div class="link">
	           <a href="pride.php">Book details...</a>
	        </div>
	     </div>
	</div> 
		 <div class="col-sm-4">
		     <div class="image">
		        <img src="assets/images/lib2.jpg" >
		     </div>	
		</div>
		
     </div>	
</div>
</div>

<div class="rightcontent">
<div class="container">
	<div class="row">
	
		<div class="col-sm-4">
		    <div class= image1>
		          <img src="assets/images/lib3.jpg" style="margin-left:30px", "height: 400px","width: 300px;">
			</div>	  
		</div>
		<div class="col-sm-8">
		     <div class="right1">
			        <h2>BOOK: 'David Copperfield'</h2>
			        <h3>AUTHOR: 'Charles Dickens'</h3>
			        <p>ABOUT: The novel features the character David Copperfield, and is written in the first person, as a description of his life until middle age, with his own adventures and the numerous friends and enemies he meets along his way. It is his journey of change and growth from infancy to maturity, as people enter and leave his life and he passes through the stages of his development. </p>
					<div class="link">
	                  <a href="david.php">Book details...</a>
	            </div>
			 </div>	
	    </div>
    </div>	
</div>
</div>

<div class="leftcontent">	
<div class="container">
	
	<div class="row">
	<div class="col-sm-8">
	    <div class="left1">
			<h2>BOOK: 'Titanic'</h2>
			<h3>AUTHOR: 'James Cameron'</h3>
			<p>ABOUT: Titanic is a 1997 American epic romance and disaster film directed, written, co-produced, and co-edited by James Cameron. Incorporating both historical and fictionalized aspects, it is based on accounts of the sinking of the RMS Titanic, and stars Leonardo DiCaprio and Kate Winslet as members of different social classes who fall in love aboard the ship during its ill-fated maiden voyage.</p>			
	        <div class="link">
	           <a href="titanic.php">Book details...</a>
	        </div>
	     </div>
	</div> 
		 <div class="col-sm-4">
		     <div class="image">
		        <img src="assets/images/lib4.jpg" >
		     </div>	
		</div>
		
     </div>	
</div>
</div>

<div class="rightcontent">
<div class="container">
	<div class="row">
	
		<div class="col-sm-4">
		    <div class= image1>
		          <img src="assets/images/lib5.jpg" style="margin-left:30px", "height: 400px","width: 300px;">
			</div>	  
		</div>
		<div class="col-sm-8">
		     <div class="right1">
			        <h2>BOOK: 'Little Red Riding Hood'</h2>
			        <h3>AUTHOR: 'Charles Perrault'</h3>
			        <p>ABOUT: Little Red Riding Hood" is a European fairy tale about a young girl and a Big Bad Wolf.[1] Its origins can be traced back to the 10th century to several European folk tales, including one from Italy called The False Grandmother. The best known version was written by Charles Perrault. </p>
					<div class="link">
	                  <a href="red.php">Book details...</a>
	            </div>
			 </div>	
	    </div>
    </div>	
</div>
</div>





	
<script>
$('#play').on('click', function(e) {
	e.preventDefault();
	$("#player")[0].src += "?autoplay=1";
	$('#player').show();
	$('#video-cover').hide();
	$('#play').hide();
})
</script>