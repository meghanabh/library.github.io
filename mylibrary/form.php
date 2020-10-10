
<?php include_once 'layout/head.php';?>
<title> Form </title>
			<style>
<?php include_once 'assets/css/form.css';?>
</style>


<form action="link.php" method="post">
<div class="myform">
<a class="back-btn" href="index.php">Go Back&nbsp;&nbsp; &#x2B05;</a>
<div class="container">
<div class="form1">
<h2>Book Details form:</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="name" class="form-control" id="exampleInputname" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Author Name</label>
    <input type="name" class="form-control" id="exampleInputname">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="name" class="form-control" id="exampleInputname" style="height: 150px" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Picture</label>
    <input type="file" class="form-control" id="exampleInputname" style="height:45px">
  </div>
  <button type="submit" class="btn btn-primary">Submit </button>
</div>
</div> 
</div>
</form>