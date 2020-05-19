<!DOCTYPE html>
<html>
<head>
	<title>CATTY'S LAYOUT</title>
        <link rel="icon" href="favicon.png" type="image/png" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            
             div.container {
                width:98%; 
                margin-left:1%;
                padding-top:10%;
            }
            
            table#table1 {
                text-align:center; 
                margin-left:auto; 
                margin-right:auto; 
                width:80%;
            }

            body {text-align:center;}

            table {
                border-collapse: collapse;
                background: white;
                opacity: 2.0;
            }

            table, th, td {
                border: 1px solid black;
                padding: 20px;
            }
        </style>
</head>
<body>
    <header>
    	<div class="main">
    		<ul>
    			<li><a href='index.php'>Home</a></li>
    			<li><a href="animals.php">List</a></li>
    		</ul>
    	</div>
    	<div class="container">
    		
                <table  id="table1"  cellspacing="3" cellpadding="3">
                    <tr><td><h1>CATTY'S LAYOUT</h1></td></tr>
                    <tr><td><h3><a href='animals.php'>View Cat's List</a></h3></td></tr>
                </table>
    	</div>
    </header>
</body>
</html>