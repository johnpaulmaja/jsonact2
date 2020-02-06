<?php
$json = file_get_contents("https://json-activity-vaflor.herokuapp.com/json-1.php");

$data = json_decode($json,true);
$list = $data['Monsters'];


?>

<h1>MONSTERS</h1>

<table border="1px">
    <tr class="head">
        <td>Monster</td>
        <td>Classification</td>
        <td>Immunity</td>
        <td>Tactics</td>
        <td>Occurence</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['Monster'];?></td>
        <td><?php echo $value['Classification'];?></td>
        <td><?php echo $value['Immunity'];?></td>
        <td><?php echo $value['Tactics'];?></td>
        <td><?php echo $value['Occurence'];?></td>
    </tr>
<?php
}
?>
</table>
