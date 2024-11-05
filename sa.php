<?php

            include 'xx.php';

            $sql = "SELECT * FROM registros";

            $result = $conn->query($sql);


?>



<!DOCTYPE <html>
<head>
	<title>Relátorio de acidentes</title>
	<link rel="stylesheet" href="estilo.css">
<head>
<body>	
	<table>
		<tr>
			<th>nome</th>
			<th>sexo</th>
			<th>idade</th>
			<th>local do acidente</th>
			<th>setor de trabalho</th>
			<th>data do acidente</th>
			<th>afastamento</th>
			<th>ação</th>
				
		</tr>
	</table>
			<?php while($row = $result->fetch_assoc()):?>
	<table>
		<tr>
			<td><?php echo $row['nome'];?></td>
			<td><?php echo $row['sexo'];?></td>
			<td><?php echo $row['idade'];?></td>
            <td><?php echo $row['local'];?></td>
            <td><?php echo $row['setor'];?></td>
			<td><?php $data = $row['data'];
			$dataformat = date('d/m/Y', strtotime($data));
			echo $dataformat;?></td>
			<td><?php echo $row['afastamento'];?></td>
			<?php $iddd = $row['id'];?>
				<td>
					<a href = "deletar.php?id= <?php echo $iddd?>">Excluir</a>
			</td>
	</tr>
					</table>		
					
				
			<?php endwhile; ?>                
		</ul>


</body>
</html>