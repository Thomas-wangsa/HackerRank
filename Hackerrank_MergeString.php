<!DOCTYPE html>
<html>
<head>
	<title> Traveloka Test Merge String Hackerrank </title>
	 
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container">
		<h4> Result : <span id="result"> </span> </h4>
	</div>

</body>

<script type="text/javascript">

	function hacker_rank_test() {
		// please change the value to see the result
		var a = "as";
		var b = "defaaa";
		merge_string(a,b);		
	}

	function merge_string(a,b) {
		var max = 0;
		if( a.length > b.length ) {
			max = a.length;
		} else {
			max = b.length;
		}
		var response = "";
		for(i=1;i<=max;i++) {
			for(i_a=1;i_a<=a.length;i_a++) {
				if(i == i_a) {
					response += a[i_a-1];
				} else {
					continue;
				}
			}
			for(i_b=1;i_b<=b.length;i_b++) {
				if(i == i_b) {
					response += b[i_b-1];
				} else {
					continue;
				}
			}
		}
		$('#result').html(response);
	}

	$(document).ready(function(){
	    hacker_rank_test();
	}); 
	
</script>
</html>


