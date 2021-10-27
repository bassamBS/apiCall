<h1>Les villes</h1>

<form action="index.php" method="get">
    <?php
    if(!empty($aDepartments)):
    ?>
    <select name="dpt">
        <option value="0">Veuillez choisir un département</option>
    <?php
    foreach($aDepartments as $oDepartment):
    ?>
        <option value="<?php echo $oDepartment->code; ?>" <?php if($oDepartment->code == $_GET['dpt']) echo "selected"; ?>><?php echo $oDepartment->nom; ?></option>
    <?php
    endforeach;
    ?>
    </select>
    <?php
    endif;
    ?>
    <input type="hidden" name="action" value="city"/>
    <input type="submit" value="valider"/>
</form>

<?php


if(!empty($aCities)):
?>
<table>
    <tr>
        <th>Désignation</th>
        
    </tr>
    <?php
    foreach($aCities as $oCity):
    ?>
    <tr>
        <td><?php echo $oCity->nom; ?></td>
    </tr>
    <?php
    endforeach;
    ?>
</table>
<?php
else:
?>
<p>Aucune ville</p>
<?php
endif;