
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <title>Ajax Calculator</title>
    </head>
    <body>
    	<div class="calc">
    		
    		<textarea id="display" class="calc-display" readonly ></textarea>
    		
    		<table>
			    <tr>
			        <td><input id="cls" value="C" type="button" class="btn"></td>
			        <td><input id="div" value="/" type="button" class="btn"></td>
			        <td><input id="mul" value="*" type="button" class="btn"></td>
			        <td><input id="sub" value="-" type="button" class="btn"></td>
			    </tr>
			    <tr>
			    	<td><input value="7" type="button" class="btn"></td>
			        <td><input value="8" type="button" class="btn"></td>
			        <td><input value="9" type="button" class="btn"></td>
			        <td rowspan="2"><input id="plus" value="+" type="button" class="btn" style="height: 158px;"></td>
			    </tr>
			    <tr>
			    	<td><input value="4" type="button" class="btn"></td>
			        <td><input value="5" type="button" class="btn"></td>
			        <td><input value="6" type="button" class="btn"></td>
			        
			    </tr>
			    <tr>
			    	<td><input value="1" type="button" class="btn"></td>
			        <td><input value="2" type="button" class="btn"></td>
			        <td><input value="3" type="button" class="btn"></td>
			        <td rowspan="2"><input id="eql" value="=" type="button" class="eql" style="height: 158px; background-color: orange;"></td>
			    </tr>
			    <tr>
			        <td colspan="2"><input value="0" type="button" class="btn" style="width: 158px;"></td>
			        <td><input id="dot" value="." type="button" class="btn"></td>
			    </tr>
			</table>
    	</div>
    </body>
</html>
<script src="jquery/jquery.js" ></script>
<script src="jquery/main.js"></script>
