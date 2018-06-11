<h1>Show Rows</h1>
<table>
	<tr>
<td>ID</td> <td>Name</td> <td>Age</td> 
	</tr>
     <?php 
		foreach ($records as $row){
		echo '<tr>' ;
		echo '<td>'.$row->id.'</td>';
		echo '<td>'.$row->name.'</td>';
		echo '<td>'.$row->age.'</td>';
		echo '</tr>';
		}
	?>
</table>
