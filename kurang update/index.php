<?php
require('form_tambah.html')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Model.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Project Akhir - Northwind</title>
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
                    <button class="menu"><a class="menu" href="about_us.html">About us</a></button>
                </h5>
            </div>
        </div>
    </nav>
    <section class="konten">
        <div class="container mt-4">
            <table>
                <tr>
                    <td>
                        <button style="background: none; border: none;" class="bi" data-bs-toggle="modal" data-bs-target="#create"><svg xmlns="http://www.w3.org/2000/svg" width="60" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg></a></button>
                    </td>
                    <td>
                        <div class="search">
                            <div class="input-group">
                                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                <button type="button" class="btn btn-outline-primary">search</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <!--CARD-->
            <div class="row justify-content-center mt-4" id="data">

            </div>
            <!--Isi Film dan tombol lebih banyak-->
            <div class="col-lg-12 ">
                <div class="row mx-auto" id="isi">
                </div>
                <div class="row mx-auto mb-3">
                    <div class="col-12 d-grid">
                        <button type="button" class="btn btn-primary" id="more"> Lebih Banyak </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        var page = 0;
        $(document).ready(function() {
            $("#more").click(function() {
                $(this).html("Loading...").attr("disabled", "disabled");
                $.get("products.php?action=read&begin=" + page, function(response) {
                    $.each(response, function(key, value) {
                        $("#data").append(
                            "<div class='col-md-3 mb-4'>" +
                            "<div class='card'>" +
                            "<img src='https://static.wikia.nocookie.net/genshin-impact/images/a/ad/Item_Tofu.png/revision/latest?cb=20220521075420&path-prefix=id' alt='Gambar" + value.ProductName + "' />" +
                            "<div class='container'>" +
                            "<div class='card-body'>" + "<a href='form.php?action=detail&ProductID=" + value.ProductID + "<div class='col-12 me-2'>" + "<button class='btn btn-warning'>" + "<i class='bi bi-pencil-square'></i></button>" +
                            "<a href='products.php?action=delete&ProductID=" + value.ProductID + "<div class='col-1 ms-1'><button class='btn btn-danger' style='margin-left: 1em;'>" + "<i class='bi bi-trash'></i></button>" +
                            "<div class='row mt-2'>" + "</div>" + "<a href='details.php?id=" + value.ProductID + "'" +
                            "<div class='col-14 ms-0'>" +
                            "<h4 class='card-title'>" + value.ProductName +
                            "<div class='col-8 ms-0'>" +
                            "<h6 class='card-info mt-2'>Stock : " + value.UnitsInStock + "</h6></div>" +
                            "<div class='col-8 ms-0'>" +
                            "<h6 class='card-info'>Price : " + value.UnitPrice + "</h6>" +
                            "</div></div></div></div></div></div>"
                        );
                    });
                    page += 12;
                    $("#more").html("Lebih Banyak").removeAttr("disabled")
                });
            }).trigger('click');
        });
    </script>
</body>

</html>