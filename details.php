<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Model.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Details</title>
</head>

<body style="background-color: #ffa500">
    <nav class="navbar1 navbar navbar-light" style="background-color: #1f4690">
        <div class="container" style="padding-right: 1px">
            <h1 class="judul"><b>Northwind</b></h1>
            <div class="menu" style="color: white">
                <h5 style="display: inline; margin-right: 4em">
                    <button class="menu"><a class="menu" href="index.php">Home</a></button>
                </h5>
                <h5 style="display: inline; margin-right: 4em">
                    <button class="menu"><a class="menu" href="customers.php">Customers</a></button>
                </h5>
                <h5 style="display: inline">
                    <button class="menu" href="#">About us</button>
                </h5>
            </div>
        </div>
    </nav>
    <section>
        <?php
        $id = $_GET['id'];
        require_once("./db_customers.php");
        $sql = "SELECT * FROM products INNER JOIN categories ON categories.CategoryID = products.CategoryID INNER JOIN suppliers ON suppliers.SupplierID = products.SupplierID WHERE products.ProductID='$id'";
        $result = $db -> query($sql);
        while ($row = $result->FETCH_ASSOC()):
        ?>
        <div class="container mt-4">
            <!-- <h1>TES</h1> -->
            <div class="col-md-12 mb-4">
                <div class="card">
                        <img src="https://static.wikia.nocookie.net/genshin-impact/images/a/ad/Item_Tofu.png/revision/latest?cb=20220521075420&path-prefix=id" alt="film1">
                    <div class="container">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9 ms-0"><h4 class="card-title" style="padding: 1px; margin: 1px;">Product Name: <?=$row["ProductName"]?></h4></div>
                                <div class="col-8 ms-0"><h6 class="card-title" style="padding: 1px; margin: 1px;">Stock: <?=$row["UnitsInStock"]?></h6></div>
                                <div class="col-8 ms-0"><h6 class="card-title">Price: <?=$row["UnitPrice"]?></h6></div>
                                <div class="col-8 ms-0"><h6 class="card-title">Category: <?=$row["CategoryName"]?></h6></div>
                                <div class="col-8 ms-0"><h6 class="card-title">Description: <?=$row["Description"]?></h6></div>
                                <div class="col-8 ms-0"><h6 class="card-title">Quantity Per-Unit: <?=$row["QuantityPerUnit"]?></h6></div>
                                <div class="col-8 ms-0"><h6 class="card-title">Unit On Order:  <?=$row["UnitsOnOrder"]?></h6></div>
                                <div class="col-8 ms-0"><h6 class="card-title">Discontinued: <?=$row["Discontinued"]?></h6></div>
                                <div class="col-8 ms-0"><h6 class="card-title">Supplier Name: <?=$row["CompanyName"]?></h6></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;?>
    </section>

</body>
</html>