<?php
$servername = "localhost";
$username = "root";
$password = "080198";
$dbname = "tes";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }


$query = mysqli_query($connection,"SELECT products.id, products.name AS name, product_categories.name AS kategori FROM products LEFT JOIN product_categories ON products.category_id=product_categories.id");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style type="text/css">
		.body{
			background-color: #09f;
		}
	</style>
</head>
<body class="body">

    <table class="table">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>category</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data["name"];?></td>
            <td><?php echo $data["kategori"];?></td>
        </tr>
        <?php  } ?>
        <?php } ?>
    </table>
</body>
</html>