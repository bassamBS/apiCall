<h1>Les villes</h1>

<form action="index.php" method="get">
    
    <input type="submit" value="valider"/>


    <?php
    if(!empty($aRegions)):
    ?>
    <select name="region">
        <option value="0">Veuillez choisir une région</option>
        <?php
        foreach($aRegions as $oRegion):
        ?>
            <option value="<?php echo $oRegion->code; ?>" 
                <?php if($oRegion->code == $_GET['region']) echo "selected"; ?>><?php echo $oRegion->nom; ?></option>
        <?php
        endforeach;
        ?>
    </select>
    <?php
    endif;

    if(!empty($_GET['region'])):
    ?>
    <select name="dpt">
        <option value="0">Veuillez choisir un département</option>
        <?php
        foreach($aDepartments as $oDepartment):
        ?>
            <option value="<?php echo $oDepartment->code; ?>" 
                <?php if($oDepartment->code == $_GET['dpt']) echo "selected"; ?>><?php echo $oDepartment->nom; ?></option>
        <?php
        endforeach;
        ?>
    </select>
    <?php
    endif;

    if(!empty($_GET['dpt'])):
    ?>
        <?php
        foreach($aCities as $oCity):
        ?>
            <p><?php echo $oCity->nom ?></p>
        <?php
        endforeach;
        ?>
    </select>
    <?php
    endif;
    ?>


    <input type="hidden" name="action" value="region"/>
</form>
