<?php
$json = file_get_contents("https://maja-act-2.herokuapp.com/json-1.php");

$data = json_decode($json,true);
$list = $data['Books'];


?>

<h1>BOOKS</h1>

<table border="1px">
    <tr class="head">
        <td>Title</td>
        <td>Author</td>
        <td>Description</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><?php echo $value['Title'];?></td>
        <td><?php echo $value['Author'];?></td>
        <td><?php echo $value['Description'];?></td>
    </tr>
<?php
}
?>
</table>
