<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="/save" method= "post"> 
        <fieldset>
        <hr>
        <label>Name:</label>
        <input type="hidden" name="id" value="<?= $pro['id'] ?? '' ?>">
        <input type="text" name="name" placeholder="name" value="<?= $_POST['name'] ?? $pro['name'] ?? '' ?>">
        <br>
        <label>Description:</label>
        <input type="text" name="description" placeholder="description" value="<?= $_POST['description'] ?? $pro['description'] ?? '' ?>">
        <br>
        <label>Category:</label>
        <input type="text" name="category" placeholder="category" value="<?= $_POST['category'] ?? $pro['category'] ?? '' ?>">
        <br>
        <label>Quantity:</label>
        <input type="text" name="quantity" placeholder="quantity" value="<?= $_POST['quantity'] ?? $pro['quantity'] ?? '' ?>">
        <br>
        <label>Price:</label>
        <input type="text" name="price" placeholder="price" value="<?= $_POST['price'] ?? $pro['price'] ?? '' ?>">
        <br><br>
        <input type="submit" value="Add/Update">
        <hr>
        </fieldset> 
    </form>

        <fieldset>
    <h1>Product Listing</h1>
    <table border='1'>
        <tr>
            <th>- Name -</th>
            <th>-Description-</th>
            <th>-Category-</th>
            <th>-Quantity-</th>
            <th>-Price-</th>
            <th>-Action-</th>
        </tr>

        <?php foreach($product as $pr): ?>
            <tr>
                <td><?= $pr['name'] ?></td>
                <td><?= $pr['description'] ?></td>
                <td><?= $pr['category'] ?></td>
                <td><?= $pr['quantity'] ?></td>
                <td><?= $pr['price'] ?></td>
                <td><a href="/delete/<?= $pr['id'] ?>">delete</a> || <a href="/edit/<?= $pr['id'] ?>">edit</a></td>
            </tr>
            </fieldset>
        <?php endforeach; ?>
    </table>
</body>
<style>
    label{
display:inline-block;
width:200px;
margin-right:-100px;
text-align:left;
margin-left:-10px;
margin-bottom:10px;
}
input{

}

fieldset{
border:none;
width:500px;
margin:0px auto;
}
</style>
</html>