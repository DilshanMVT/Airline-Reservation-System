<?php 
require_once('../class/FDetails.php');

$transactions = $transaction->getAllTransaction1();

// echo '<pre>';
// 	print_r($transactions);
// echo '</pre>';
?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">

<!-- Custom CSS -->
<link href="../assets/css/simple-sidebar.css" rel="stylesheet">
<link href="../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">



<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Online Ticketing</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">
        <a href="#">Flight Status
        <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
        </a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../index.php"><span class="glyphicon glyphicon-backward"></span> Back To Home</a></li>
    </ul>
  </div>
</nav>

<table id="myTable-trans" class="table table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
	    <tr>
	        <th><center>Flight Number</center></th>
            <th><center>Origin</center></th>
            <th><center>Destination</center></th>
	        <th><center>Depature Time</center></th>
	        <th><center>Arrival Time</center></th>
	        <th><center>Air Craft</center></th>
	        <th><center>Flight Time</center></th>
	    </tr>
	</thead>
    <tbody>
    	<?php foreach($transactions as $t): ?>
    		<tr>
    			
    			<td align="center"><?= $t['Route_name']; ?></td>
                <td align="left"><?= $t['origin_desc']; ?></td>
    			<td align="left"><?= $t['dest_destination']; ?></td>
    			<td align="center"><?= $t['d_time']; ?></td>
    			<td align="center"><?= $t['a_time']; ?></td>
    			<td align="left"><?= $t['model']; ?></td>
    			<td align="left"><?= $t['t_time']; ?></td>
    		</tr>
    	<?php endforeach; ?>
    </tbody>
</table>

<?php 
$transaction->Disconnect();
 ?>
<!-- for the datatable of employee -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable-trans').DataTable();
	});
</script>