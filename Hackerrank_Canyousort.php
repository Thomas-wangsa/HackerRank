<!DOCTYPE html>
<html>
<head>
	<title> HackerRank Test Can You Sort ? </title>
	 
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
		var array = [5,4,9,22,22,44,44,44]; 
		can_you_sort(array);		
	}

	function can_you_sort(param) {
		
		var map = param.reduce(function(prev, cur) {
			  prev[cur] = (prev[cur] || 0) + 1;
			  return prev;
		}, {});

		console.log(map);

		var new_array = [];
		var max = 0;
		var min = 9999;
		$.each(map , function(key,val){
			if(val >= max) { max = val;}
			if(min >= val) { min = val;}
		})

		for(i=1;i<=max;i++) {
			$.each(map , function(key,val){
				for(j=1;j<=i;j++) {
					if(val==i) {
						new_array[val] += key;
					}
				}
			})
		}

		response = "";
		$.each(new_array , function(key,val){
			if(key == "0") {
			} else {
				array_string = val.replace(undefined,"");
				var res = array_string.split("");

				$.each(res.reverse() , function(key_res,val_res){
				response += val_res;
				})				
			}
		})

		$('#result').html(response);
		
	}


	$(document).ready(function(){
	    hacker_rank_test();
	}); 
	
</script>
</html>