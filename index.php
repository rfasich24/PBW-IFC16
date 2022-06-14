<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="Model.css" />
    <title>Document</title>
</head>

<body style="background-color: #ffa500">
    <nav class="navbar1 navbar navbar-light" style="background-color: #1f4690">
        <div class="container" style="padding-right: 1px">
            <h1 class="judul"><b>Northwind</b></h1>
            <div class="menu" style="color: white">
                <h5 style="display: inline; margin-right: 4em">
                    <button class="menu" href="#">Home</button>
                </h5>
                <h5 style="display: inline; margin-right: 4em">
                    <button class="menu" href="#">Order</button>
                </h5>
                <h5 style="display: inline">
                    <button class="menu" href="#">Employee</button>
                </h5>
            </div>
        </div>
    </nav>
    <section>
        <div class="container mt-5">
            <!--CARD-->
            <div class="row justify-content-center" id="data">

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


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        var page = 0;
        $(document).ready(function() {
            $("#more").click(function() {
                $(this).html("Loading...").attr("disabled", "disabled");
                $.get("db.php", function(response) {
                    $.each(response, function(key, value) {
                        $("#data").append(
                            "<div class='col-md-3 mb-4'>" +
                            "<div class='card'>" +
                            "<img src='https://static.wikia.nocookie.net/genshin-impact/images/a/ad/Item_Tofu.png/revision/latest?cb=20220521075420&path-prefix=id' alt='Gambar"+value.ProductName+"' />" +
                            "<div class='container'>" +
                            "<div class='card-body'>" +
                            "<div class='row'>" +
                            "<div class='col-9 ms-0'>" +
                            "<h4 class='card-title'> <a class='title' href='details.php?id=" + value.ProductID + "'>"+value.ProductName+ "</a></h4></div>" +
                            "<div class='col-8 ms-0'>" +
                            "<h6 class='card-title'>Stock : "+value.UnitsInStock+ "</h6></div>" +
                            "<div class='col-8 ms-0'>" +
                            "<h6 class='card-title'>Price : "+value.UnitPrice+ "</h6>" +
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