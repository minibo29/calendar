<?php
?>

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
<div>
  <form id="order" role="form" method="post" action="<?php echo base_url();?>task/all">
    <select name="order" form="order">
      <option value="default">по id</option>
      <option value="priority">приорітетнісь</option>
      <option value="time">по часу</option>
      <option value="task">по task</option>
    </select>
    <input type="submit" name="submit" id="submit" value="Submit" class="btn">
  </form>
</div>
<div calss="conteiner">
  <table class="table">
    <thead>
    <tr>
      <td>#</td>
      <td>task</td>
      <td>priority</td>
    </tr>
    </thead>
    <tbody>
      <?php foreach ($result as $value):?>
        <tr class="<?php echo $class[$value['priority']]  ?>">
          <td class="id"> <?php echo $i;$i++; ?> </td>
          <td class="task"><a href="<?php echo base_url()."task/task_id/".$value['task_id']?>"> <?php echo $value['task'];?></a> </td>
          <td class="priority"> <?php echo $class[$value['priority']];?> </td>
          <td class="date"> <?php echo date('j F Y', mktime(0, 0, 0, $value['month'], $value['day'], $value['year']))?> </td>
        </tr>
      <?php endforeach;?>
    </tbody>
  </table>
  <p><?php echo $links; ?></p>
</div>
</body>
</html>



