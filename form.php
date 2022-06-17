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
    <title>CRUD Data</title>
</head>

<body style="background-color: #ffa500">
    <nav class="navbar1 navbar navbar-light" style="background-color: #1f4690">
        <div class="container" style="padding-right: 1px">
            <h1 class="judul"><b>CRUD Data</b></h1>
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
    <section class="konten">
        <div class="container mt-4">
        <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="ProductName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="ProductName" name="ProductName" aria-describedby="emailHelp" required="required">
                        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <label for="CategoryID" class="form-label">Category</label>
                    <select class="form-select" id="CategoryID" name="CategoryID" aria-label="Default select example">
                        <option value="" selected>-</option>
                    </select>
                    <div class="mt-3">
                        <label for="UnitPrice" class="form-label">Price</label>
                        <input type="number" class="form-control" id="UnitPrice" name="UnitPrice" min="0" value="0">
                    </div>
                    <div class="mt-3">
                        <label for="UnitsInStock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="UnitsInStock" name="UnitsInStock" min="0" value="0">
                    </div>
                    <div class="mt-3">
                        <label for="QuantityPerUnit" class="form-label">Quantity per Unit</label>
                        <input type="text" class="form-control" id="QuantityPerUnit" name="QuantityPerUnit">
                    </div>
                    <div class="mt-3">
                        <label for="inputUnit" class="form-label">Unit on order</label>
                        <input type="number" class="form-control" id="UnitsOnOrder" name="UnitsOnOrder" min="0" value="0">
                    </div>
                    <div class="mt-3">
                        Discontinued
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Discontinued" id="Discontinued" value="1" required="required" checked>
                            <label class="form-check-label" for="DiscontinuedTrue">
                            True
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Discontinued" id="Discontinued" value="0">
                            <label class="form-check-label" for="DiscontinuedFalse">
                            False
                        </label>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="SupplierID" class="form-label">Supplier</label>
                        <select class="form-select" id="SupplierID" name="SupplierID" aria-label="Default select example">
                        <option value="" selected>-</option>
                    </select>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" name="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>
    <script>
    $(document).ready(function() {
        console.log("halo");
        // untuk mengambil data language di language.php
        $.get("categories.php", function(response) {
            $.each(response, function(key, value) {
                $("#CategoryID").append("<option value='" + value.CategoryID + "'>" + value.CategoryName + "</option>");
            })
        });
        $.get("suppliers.php", function(response) {
            $.each(response, function(key, value) {
                $("#SupplierID").append("<option value='" + value.SupplierID + "'>" + value.CompanyName + "</option>");
            })
        });
        $("form").submit(function(event) {
            event.preventDefault();
            var data = $(this).serialize();
            $.post("products.php?action=create", data, function(response) {
                alert("Data Film Berhasil Ditambahkan")
                window.location.href = "index.php"
            })
        });
    });
</script>

</body>
</html>