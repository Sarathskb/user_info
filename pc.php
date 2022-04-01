<?php

;
require('memory.php');

require('UserInfo.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET USER IP</title>
    <style>
        body{
            background-color: aqua;
        }
        table, th, td {
         border: 1px solid;
         border-color: chartreuse;
         background-color: antiquewhite;
         word-spacing: 25px;
         text-align: center;
        }
        td:hover {background-color: #ddd;}
        th{
            text-transform: uppercase;
        }
    </style>

</head>
<body>
<center><h1>Getting User Info</h1>
  <table>
      <thead>
          <th> user IP</th>
          <th>device</th>
          <th>os</th>
          <th>browser</th>
          <th>device name</th>
          <th>Memory</th>
          <th>storage</th>
      </thead>
          <tbody>
              <tr>
                 <td><?= UserInfo::get_ip();?></td>
                 <td><?= UserInfo::get_device();?></td>
                 <td><?= UserInfo::get_os();?></td>
                 <td><?= UserInfo::get_browser();?></td>
                 <td><?echo gethostname();?></td> 
                 <td><?echo convert(memory_get_usage());?></td>
                 <td><?= memory_get_usage();?></td>
                 </tr>
             </tbody>
         </thead>
    </table>
</center>

</body>
</html>