<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Description</td>
            <?php foreach ($list as $product): ?>
            <tr>
                <td><?=$product['id']?></td>
                <td><?=$product['name']?></td>
                <td><?=$product['description']?></td>
            </tr>
            <?php endforeach; ?>
        </tr>
    </table>
</body>
</html>
