<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Verbos alemanes</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<style type="text/css">
			@import "DataTables-1.9.4/media/css/demo_page.css";
			@import "DataTables-1.9.4/media/css/demo_table.css";
		</style>
		<script type="text/javascript" src="DataTables-1.9.4\media\js\jquery.js"></script>
		<script type="text/javascript" src="DataTables-1.9.4\media\js\jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$("#verbos").dataTable({
					"aaSorting": [[ 0, "asc" ]],
				} );
			} );
		</script>
	</head>
	<body id="dt_example">
		<div id="container">
			<h1>Verbos alemanes</h1>
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="verbos">
				<thead>
					<tr>
						<th>Infinitivo</th>
						<th>Significado</th>
						<th>¿Separable?</th>
						<th>Participio</th>
					</tr>
				</thead>
				<tbody>
					 <?php
					 /*mysql.hostinger.es*/
						$idConn = mysql_connect('54.154.59.88:3306','usuarioprueba','123456');
						mysql_select_db('prueba',$idConn);
						$query = 'SELECT * FROM prueba.verbos';
						$res = mysql_query($query, $idConn) or die(mysql_error());
						$verbos = array();
						while($row = mysql_fetch_row($res)){
							echo '<tr>
									<td>'.$row[0].'</td>
									<td>'.$row[1].'</td>
									<td>'.$row[2].'</td>
									<td>'.$row[3].'</td>
								  </tr>';
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>
