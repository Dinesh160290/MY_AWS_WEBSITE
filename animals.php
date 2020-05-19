<!DOCTYPE html>
<html>
<head>
	<title>DOGGY'S LAYOUT</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php
        ini_set('max_execution_time',0);
        $urls = array();
        for ($i = 0; $i < 10; $i++)
        {
            $result = file_get_contents('https://api.thecatapi.com/v1/images/search');
            $res    = json_decode($result, true);
            $url    = $res[0]['url'];
            $width  = $res[0]['width'];
            $height = $res[0]['height'];
            
            $urls[$i]['url'] = $url; 
            $urls[$i]['width'] = $width; 
            $urls[$i]['height'] = $height; 
        }   
?>

<body>
    <header>
    	<div class="main">
    		<ul>
    			<li><a href="http://localhost/MY_AWS_WEBSITE/animals.php">Home</a></li>
    			<li><a href="#">Services</a></li>
    			<li><a href="#">Gallery</a></li>
    			<li><a href="#">About us</a></li>
    		</ul>
    	</div>
    	<div>
    		<table border="1px solid grey">

             <tr>
                   <th>SNO</th>
                   <th>WIDTH</th>
                   <th>HEIGHT</th>
                   <th>IMAGE</th>
             </tr>


             <?php foreach($urls as $key => $value)  { ?>
            <tr>
                <td border="1px solid grey"><?php echo $key + 1; ?></td>
                <td border="1px solid grey"><?php echo $value['width']; ?></td>
                <td border="1px solid grey"><?php echo $value['height']; ?> </td>
                <td border="1px solid grey"><a target="_blank" href="<?php echo $value['url']; ?>"><?php echo "View Image ".($key + 1); ?></a></td>
            </tr>
             <?php  }  ?>
        </table>
    	</div>
    </header>
</body>
</html>