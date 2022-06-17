<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Model.css">
    <title>About</title>
</head>
<body style="background-color: #FFA500;">
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
                    <button class="menu"><a class="menu" href="about_us.html">About us</a></button>
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
        <div class="container mt-5" >
            <div class="row justify-content-center" id="data">
                <div class="col-md-8 mb-5">
                    <div class="card">
                        <img class="orang" style="box-shadow: 0 10px 10px 0px rgba(0,0,0,0.2);" src="https://static.wikia.nocookie.net/genshin-impact/images/a/ad/Item_Tofu.png/revision/latest?cb=20220521075420&path-prefix=id" alt="film1">
                        <div class="container">
                            <div class="card-body">
                                <div class="row" >
                                <div class="col-12 ms-0"><h1 class="card-title" style="margin-bottom: 10px;">Product Name: <?=$row["ProductName"]?></h1></div>
                                <div class="col-8 ms-0"><h6 class="card-info">Stock: <?=$row["UnitsInStock"]?></h6></div>
                                <div class="col-8 ms-0"><h6 class="card-info">Price: <?=$row["UnitPrice"]?></h6></div>
                                <div class="col-8 ms-0"><h6 class="card-info">Category: <?=$row["CategoryName"]?></h6></div>
                                <div class="col-12 ms-0"><h6 class="card-info">Category Description: <?=$row["Description"]?></h6></div>
                                <div class="col-8 ms-0"><h6 class="card-info">Quantity Per-Unit: <?=$row["QuantityPerUnit"]?></h6></div>
                                <div class="col-8 ms-0"><h6 class="card-info">Unit On Order:  <?=$row["UnitsOnOrder"]?></h6></div>
                                <div class="col-8 ms-0"><h6 class="card-info">Discontinued: <?=$row["Discontinued"]?></h6></div>
                                <div class="col-8 ms-0"><h6 class="card-info">Supplier Name: <?=$row["CompanyName"]?></h6></div>
                                </div>
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