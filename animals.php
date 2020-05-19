<!DOCTYPE html>
<html>
    <head>
        <title>CATTY'S LAYOUT</title>.
        <link rel="icon" href="favicon.png" type="image/png" sizes="32x32">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style type="text/css">

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
                padding: 8px;
            }


            tr:nth-child(even) {background-color: #dae5f4;}
            tr:nth-child(odd) {background-color: #b8d1f3;}


        </style>
    </head>

    <?php
    ini_set('max_execution_time', 0);
    $urls = array();
    for ($i = 0; $i < 10; $i++)
    {
        $result = file_get_contents('https://api.thecatapi.com/v1/images/search');
        $res    = json_decode($result, true);
        $url    = $res[0]['url'];
        $id     = $res[0]['id'];
        $width  = $res[0]['width'];
        $height = $res[0]['height'];

        $urls[$i]['url']    = $url;
        $urls[$i]['id']     = $id;
        $urls[$i]['width']  = $width;
        $urls[$i]['height'] = $height;
    }
    ?>

    <body>
        <header>
            <div class="main">
                <ul>
                    <li><b><a href="index.php">Home</a></b></li>
                    <li><b><a href="animals.php">List</a></b></li>
                </ul>
            </div>
            <div class="container">
                <table  id="table1"  cellspacing="3" cellpadding="3">
                    <tr>
                        <th>SNO</th>
                        <th>NAME</th>
                        <th>WIDTH(PX)</th>
                        <th>HEIGHT(PX)</th>
                        <th>IMAGE</th>
                    </tr>
                    <?php
                    foreach ($urls as $key => $value)
                    {
                        ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $value['id']; ?></td>
                            <td><?php echo $value['width']; ?></td>
                            <td><?php echo $value['height']; ?> </td>
                            <td><a target="_blank" href="<?php echo $value['url']; ?>"><?php echo "Click Here"; ?></a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </header>
    </body>
</html>