<?php
@session_start();
include '../ConnectDB/DB.php';

$id = $_POST['id'];
//$id = "10";
?>

<select  name="country" class="country" style="width: 250px">
    <option value="-1" selected="selected"><?= $_SESSION["select_team"] ?></option>
    <?php
    $sql = " SELECT  *  FROM $database.team where league=$id order by id     ";
    $objQuery = mysql_query($sql);

    while ($objResult = mysql_fetch_array($objQuery)) {
        ?>
        <option value="<?= $objResult["id"] ?>"><?= $objResult["name"] ?></option>

    <?php } ?>
</select>

<?php
?>