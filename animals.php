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

<html>
    <head></head>
<body style="background:skyblue;">
	<h1>Image</h1>
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
</body>
	<!-- <img src="<?php echo $url; ?>" width="<?php echo $width; ?>" height="<?php echo $height;  ?>"/> -->
</html>