<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Fetch The Newsletter Data </title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-2">
</div>
        <div class="col-md-8">
<form type="GET" id="myForm">
     <div class="form-group">
<label for="Article Title">Article Title</label>
<input type="text" class="form-control" id="name" placeholder="paste the title..." />
</div>

<div class="form-group">
<label for="Article link">Article link</label>
<input type="text" class="form-control" id="link" placeholder="paste your link here..." >
</div>

<div class="form-group">
<label for="Article Image">Article Image</label>
<input type="text" class="form-control" id="image" placeholder="paste your image here..." >
</div>

<div class="form-group">
<label for="left">left</label>
<input type="radio"  name="radioName" value="left">
</div>

<div class="form-group">
<label for="Right">Right</label>
<input type="radio"  name="radioName" value="right">
</div>

<submit type="submit"   id="submit" class="btn btn-small" >Submit<br>
</form>
</div>
<div class="col-md-2">
</div>
</div>
</div>
 
  <div id="result"></div>

</body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script type="text/javascript">

$('#submit').click(function (){
    console.log("clicked");
    var articlename = $('#name').val();
    console.log(articlename);
    var imagelink = $('#link').val();

    var link = $('#link').val();
    console.log(link);
var section = $('input[name=radioName]:checked', '#myForm').val();
console.log(section);

//organize the data properly
			var form_data = 
			  'articlename='+articlename+
			  '&section='+section+
			  '&link='+link+
			  '&imagelink='+imagelink;

    $.ajax({
        url: 'getdata.php',
        type: "GET",
        data: form_data,   
        success: function(data) {
           $('#result').html(data);
        },
        error: function() {
           alert("An error occurred.");
        }
    });

})
</script>

</html>