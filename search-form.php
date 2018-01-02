<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Fetch The Newsletter Data </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</head>
<body>
    <center>
<div class="container">
    <div class="row">
<form type="GET" id="myForm">
<input type="text"  id="name" placeholder="paste the title..." /><br>
<input type="text" id="link" placeholder="paste your link here..." ><br>
<input type="radio" name="radioName" value="left">left<br>
<input type="radio" name="radioName" value="right">right<br>

<submit type="submit" id="submit" >Submit<br>
</form>
      
</div>
</div>

  <div id="result"></div>
</center>
</body>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script type="text/javascript">

$('#submit').click(function (){
    console.log("clicked");
    var articlename = $('#name').val();
    console.log(articlename);

    var link = $('#link').val();
    console.log(link);
var section = $('input[name=radioName]:checked', '#myForm').val();
console.log(section);

//organize the data properly
			var form_data = 
			  'articlename='+articlename+
			  '&section='+section+
			  '&link='+link;

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