<?php

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/bootstrap/css/bootstrap.css">
        <style>
            .low {
                background-color: #BAF0B5;
            }
            .mid{
                background-color: #EEF0B5;
            }
            .critical{
                background-color: #F0CBB5;
            }
            .blocer{
                background-color: #DF7C7C;
            }
            .lable{
                margin-top: 30px;
            }
        </style>
    </head>
    <body>
        <a class="btn btn-default" href="<?php echo base_url();?>">Home</a>
        <div class="<?php echo $class[$result['priority']]?>" >
            <p class="lable"><strong>task</strong></p>
            <p class="task"><?php echo $result['task']; ?></p>
            <p class="lable"><strong>performance</strong></p>
            <p class="performance"><?php echo $result['performance']; ?></p>
            <p class="lable"><strong>deadline</strong></p>
            <p class="deadline"><?php echo $result['deadline']; ?></p>
        </div>
        <a class="btn btn-default" href="<?php echo site_url(array('task/task_id_edit',$result['task_id']))?>">edit task</a>
    </body>
</html>

    
    
