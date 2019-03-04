<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/css/style.css">
	<link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
	<!-- Javascript -->

	<script src="styles/js/sweat.js"></script>
</head>
<body>
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-info">
			<div class="panel-heading">
			  <h2>	Risk Test</h2>
			</div>

			<div class="panel-body">
				<form>
					<label for="age">Select your age?</label>
					<select id="age" class="form-control">
						<option select="selected" disabled> Select your age </option>
						<option value="0"> Less Than 40 </option>
						<option value="1"> Greater Than 40 </option>
					</select>
					<label for="gender">Select your Gender?</label>
					<select id="gender" class="form-control">
						<option select="selected" disabled> Select your Gender </option>
						<option value="1"> Male </option>
						<option value="0"> Female</option>
					</select>
					<label for="female">Are You Preagnant?</label>
					<select id="female" class="form-control">
						<option select="selected" disabled>Are you preagnant?  </option>
						<option value="1"> YES</option>
						<option value="0"> NO </option>
					</select>
					<label for="bp">Are You Suffering from BP?</label>s
					<select id="bp" class="form-control">
						<option select="selected" disabled> Suffering from Blood pressure  </option>
						<option value="1"> YES</option>
						<option value="0"> NO </option>
					</select>
					<label for="active">Are you physical active?</label>
					<select id="active" class="form-control">
						<option select="selected" disabled>Are you physical active?  </option>
						<option value="0"> YES</option>
						<option value="1"> NO </option>
					</select>
					<label for="weight">weight</label>

					<select id="weight" class="form-control">
						<option select="selected" disabled>Weight  </option>
						<option value="0"> Less Than 50</option>
						<option value="1"> Greater than 50 </option>
					</select> <br>

					<button type="button" class="btn btn-primary btn-block" onclick="test()">
						<span class="glyphicon glyphicon-send"></span>
					 </button>

				</form>
			</div>
		</div>
	</div>
</body>
</html>

<script>
	function test(){
		var age=parseInt(document.querySelector("#age").value);
		var gender=parseInt(document.querySelector("#gender").value);
		var female=parseInt(document.querySelector("#female").value);
		var bp=parseInt(document.querySelector("#bp").value);
		var active=parseInt(document.querySelector("#active").value);
	    var weight=parseInt(document.querySelector("#weight").value);

	    var result=age+gender+female+bp+active+weight;

	    if(result<4){
	    	swal("You are safe");
	    } else {
	    	swal("You are at risk");
	    }
	}
</script>