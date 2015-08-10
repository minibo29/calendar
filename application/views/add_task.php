
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
    </head>
    <body>
    <a class="btn btn-default" href="<?php echo base_url();?>">Home</a>
        <form id="add-task" class="form-signin" role="form" action="<?php echo base_url()?>task/add/<?php echo $day['day'].'/'.$day['month'].'/'.$day['year']?>" method="POST">
            <div class=".col-md-6">
                <h2>Форма</h2>
                <table>
                    <tr>
                        <td><h4>Задача</h4></td>
                        <td><input type="text" name="task" class="form-control" placeholder="Задача"value="<?php echo set_value('task'); ?>" /> <?=  form_error('task')?></td>
                    </tr>
                    <tr>
                        <td><h4>План виконання</h4></td>
                        <td><textarea name="performance" class="form-control" placeholder="План виконання" /><?php echo set_value('performance'); ?> </textarea><?=  form_error('performance')?></td>
                    </tr>
                    <tr>
                        <td><h4>Термін виконання</h4></td>
                        <td><input type="text" name="deadline" class="form-control" placeholder="Термін виконання" value="<?php echo set_value('deadline'); ?>" /> <?=  form_error('deadline')?></td>
                    </tr>
                    <tr>
                        <td><h4>Пріоритет</h4></td>
                        <td>
                            <select name="priority" form="add-task">
                                <option value="1">низька</option>
                                <option value="2">середня</option>
                                <option value="3">critically</option>
                                <option value="4">blocker</option>
                            </select>
                        </td>
                    </tr>										
                </table>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn">
            </div>
        </form>
    </body>
</html>

    
    