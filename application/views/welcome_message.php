<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
		table{
			text-align: center;
		}
		.ff{
			background-color: #FF5907;
		}
		.today a{color: red;}

	</style>
</head>
<body>
<div id="container">
    <table border=1>
				<thead>
						<tr>
							<td> <a href="<?php echo$link['prev'];?>">< </a></td>
							<td colspan="5"><?php echo$title;?></td>
							<td><a href="<?php echo$link['next'];?>"> > </a></td>
						</tr>
						<tr>
							<td>Пн</td>
							<td>Вт</td>
							<td>Ср</td>
							<td>Чт</td>
							<td>Пт</td>
							<td>Сб</td>
							<td>Нд</td>
						</tr>
				</thead>
				<tbody>
        <?php for($i = 0; $i < count($week); $i++):?>
            <tr>
                <?php for($j = 0; $j < 7; $j++):?>
                    <?php if(!empty($week[$i][$j])): ?>
                        <?php if($j == 5 || $j == 6):?> 
                            <?php echo $week[$i][$j]?>
                        <?php else: ?> 
                            <?php echo $week[$i][$j]?> 
                        <?php endif;?>
                    <?php else: ?>
                      <td>&nbsp;</td>
                    <?php endif;?>
                <?php endfor;?>
            </tr>
        <?php endfor;?>
				</tbody>
    </table>

		<a class="btn btn-default" href="<?php echo base_url()?>task/all">всі задачі</a>
</div>

</body>
</html>