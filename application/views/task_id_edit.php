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
    </head>
    <body>
    <a class="btn btn-default" href="<?php echo base_url();?>">Home</a>
        <form id="add-task" class="form-signin" role="form" action="<?php echo base_url().'task/task_id_edit/'.$task_id ?>" method="POST">
            <div class=".col-md-6">
                <h2>Форма</h2>
                <table>
                    <tr>
                        <td><h4>Задача</h4></td>
                        <td><input type="text" name="task" class="form-control" placeholder="Задача" <?php if(!empty($task)){echo "value='$task'";} ?>/></td>
                    </tr>
                    <tr>
                        <td><h4>План виконання</h4></td>
                        <td><textarea name="performance" class="form-control" placeholder="План виконання"  /><?php if(!empty($performance)){echo $performance;} ?></textarea></td>
                    </tr>
                    <tr>
                        <td><h4>Термін виконання</h4></td>
                        <td><input type="text" name="deadline" class="form-control" placeholder="Термін виконання" <?php if(!empty($deadline)){echo "value='$deadline'";} ?> /></td>
                    </tr>
                    <tr>
                        <td><h4>Пріоритет</h4></td>
                        <td>
                            <select name="priority" form="add-task">
                                <option value="1" <?php if($priority === 1){echo 'selected="selected"';} ?>selected="selected">низька</option>
                                <option value="2" <?php if($priority === 2){echo 'selected="selected"';} ?>>середня</option>
                                <option value="3" <?php if($priority === 3){echo 'selected="selected"';} ?>>critically</option>
                                <option value="4" <?php if($priority === 4){echo 'selected="selected"';} ?>>blocker</option>
                            </select>
                        </td>
                    </tr>										
                </table>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn">
            </div>
        </form>
    </body>
</html>

    
    