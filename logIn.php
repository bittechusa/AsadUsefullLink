<html>

	<head>
		<title> 
			Welcome to BitTech USA
	    </title>
		<script>
		function verifyform()
		{
			var name=document.getElementById("fname").value;
			if(name="")
			{
				
				alert("OOPS Name not entered");
			}
			
			
		}
		
		</script>
		
	</head>
	<body>
		<!-- Print by Html -->
		Welcome to Bit Tech	<br>
		
		<!-- Print by Java Script -->
		
		<script>document.write("Welcome to Bit Tech by java script")</script>
		
		<!-- Print by Java Script by php --><br>
		
		
		<form>
		<table align="center">
			<tr>
				<th colspan=2> Student Information </th>
			</tr>
			<tr>
				<td> Full Name </td>
				<td> <input type="text"  id="fname"> </td>
			</tr>
			<tr>
				<td> Email </td>
				<td> <input type="text"  id="email"> </td>
			</tr>
			<tr>
				<th colspan=2> <input type="submit"" value="Submit" onclick="verifyform()"> </th>
			</tr>	
		</table>
		</form>
	</body>
	


</html>