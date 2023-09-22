<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>    
<h1> Product Management </h1>  
    <div class="records">
        <div class="recordcontainer">
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
                <input class=btn type="submit" value="Add/Update">
                <hr>
                </fieldset> 
            </form>
        </div>
    </div>
    <div class="records">
        <div class="recordcontainer">
            <fieldset>
            <h1>Product Listing</h1> <hr>
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
                <?php endforeach; ?>
                </fieldset>
            </table>
        </div>
    </div>
</main>
</body>
<style>

label{
display:inline-block;
width:200px;
margin-right:-100px;
text-align:left;
margin-left:100px;
margin-bottom:10px;
}
input{
    border-radius: 15px;
    padding: 3px;
    border-color: 1px solid aqua;
}

.btn:hover{
    background: #4de3c5;
    cursor: pointer;
}

.btn{
    margin-left:50%;
}

body{
    background: #181a1e;
}

h1, label, table, th, a{
    color: white;
}


hr{
    margin-top: 10px;
    border-top: 1px solid aqua;
}


fieldset{
border:none;
width:500px;
margin:0px auto;
}

main .records {
    margin-top: 2rem;
}
main .records .recordcontainer{
background: #202528;
display: flex;
align-items: center;
gap: 1rem;
margin-bottom: 0.7rem;
padding: 1.4rem var(--card-padding);
border-radius: var(--border-raduis-3);
box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
padding-top: 20px; 
}
:root{
    --card-border-radius: 2rem;
    --border-radius-1: 0.4rem;
    --border-raduis-2: 0.8rem;
    --border-raduis-3: 1.2rem;
    --card-padding: 1.8rem;
    --padding-1: 1.2rem;
    --box-shadow: 0 2rem 3rem var(--color-light);
}

</style>
</html>