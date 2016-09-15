<?php include_once("analyticstracking.php") ?>
<div style=" margin-bottom: 50px; margin-top: 50px; text-align: center; margin-left: 100px;background-color: #F5F6CE ; width: 800px;">
    <h3>Administration des annonces</h3>
    <!--<span class="label label-primary"><a href="#">Gestion des disciplines</a></span>-->
<div id="tab1" class="tab_content">
    <table class="tablesorter" cellspacing="0"> 
    <?php foreach ($disciplines_liste as $discipline): ?>
        <?php echo '<tr>'; ?>         
        <?php echo '<td>' . htmlentities($discipline->id) . '</td>'; ?> 
        <?php echo '<td>--' . htmlentities($discipline->nom) . '</td>'; ?> 
        <?php //echo '<td>'.htmlentities($club->ville).'</td>';?>
        <?php echo '</tr>'; ?> 
<?php endforeach; ?>
    </table>
</div>

</div>