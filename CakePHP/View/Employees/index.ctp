<h1>Employees</h1>
<p>
 <?php echo $this->Html->link('Dodaj',
 array('action' => 'add')); ?>
</p>

<table>
<tr>
 <th>Id</th>
 <th>Nazwisko</th>
 <th>Imie</th>
 <th>Etat</th>
 <th>Id szefa</th>
 <th>Zatrudniony</th>
 <th>Placa pod</th>
 <th>Placa dod</th>
 <th>Id zesp</th>
 <th></th>
</tr>
<?php foreach ($employees as $employee): ?>
 <tr>
 <td><?php echo $employee['Employee']['id']; ?></td>
 <td>
 <?php echo $this->Html->link($employee['Employee']['nazwisko'], array('action' => 'view', $employee['Employee']['id']));?>
 </td>
 <td>
 <?php echo $employee['Employee']['imie']; ?>
 </td>
 <td>
 <?php echo $employee['Employee']['etat']; ?>
 </td>
 <td>
 <?php echo $employee['Employee']['id_szefa']; ?>
 </td>
 <td>
 <?php echo $employee['Employee']['zatrudniony']; ?>
 </td>
 <td>
 <?php echo $employee['Employee']['placa_pod']; ?>
 </td>
 <td>
 <?php echo $employee['Employee']['placa_dod']; ?>
 </td>
 <td>
 <?php echo $employee['Employee']['id_zesp']; ?>
 </td>
 <td>
 <?php echo $this->Html->link('Usuń',
 array('action' => 'delete', $employee['Employee']['id']),
 null, 'Czy jesteś pewna(y)?')?>
 <?php echo $this->Html->link('Edytuj',
 array('action' => 'edit',  $employee['Employee']['id']));?>
 </td>
 </tr>
 <?php endforeach; ?>
</table>