<?php
include('./ConnectDB/DB.php');

$id = $_POST['id'];
//$id = "10";
?>

<select id="country" class="country" name="country" >
  
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