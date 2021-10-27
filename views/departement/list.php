<h1>Les départements</h1>

<?php
if(!empty($aDepartments)):
?>
<table>
    <tr>
        <th>Code</th>
        
   
        <th>Désignation</th>
        
    </tr>
    <?php
    foreach($aDepartments as $oDepartment):
    ?>
    <tr>
        <td><?php echo $oDepartment->code; ?></td>
        <td><?php echo $oDepartment->nom; ?></td>
    </tr>
    <?php
    endforeach;
    ?>
</table>
<?php
else:
?>
<p>Aucune département</p>
<?php
endif;