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
                border: 1px solid;
                background-color: #BAF0B5;
            }
            .mid{
                border: 1px solid;
                background-color: #EEF0B5;
            }
            .critical{
                border: 1px solid;
                background-color: #F0CBB5;
            }
            .blocer{
                border: 1px solid;
                background-color: #DF7C7C;
            }
            .table{    margin-top: 50px;}
        </style>
    </head>
    <body>
    <a class="btn btn-default" href="<?php echo base_url();?>">Home</a>
        <div calss="conteiner">
        <?php foreach ($results as $priority => $values):?>
            <?php $i=1;?>
            <table class="table <?php echo $class[$priority]  ?>">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>task</td>
                        <td>priority</td>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($values as $value):?>
                    <tr>
                        <td class="id"> <?php echo $i;$i++; ?> </td>
                        <td class="task"><a href="<?php echo $value['link']?>"> <?php echo $value['task']?></a> </td>
                        <td class="priority"> <?php echo $class[$priority]?> </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>

        <?php endforeach;?>
            <a class="btn btn-default" href="<?php echo $link_add ?>">add task</a>

        </div>
    </body>
</html>

    
    