<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Model.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#data').DataTable();
        });
    </script>
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
        <div class="container mt-5" >
        <table id="data" class="display" style="width:100%">
        <thead>
            <tr>
                <th>CustomerID</th>
                <th>CompanyName</th>
                <th>ContactName</th>
                <th>ContactTitle</th>
                <th>Address</th>
                <th>City</th>
                <th>Region</th>
                <th>PostalCode</th>
                <th>Country</th>
                <th>Phone</th>
                <th>Fax</th>
            </tr>
        </thead>
        <tbody>
        <?php
            require_once("./db_customers.php"); 
            $sql = "SELECT * FROM customers";
            $result = $db->query($sql);
            while ($row = $result->fetch_assoc()) :
        ?>
            <tr>
                <td><?php echo $row["CustomerID"];?></td>
                <td><?php echo $row["CompanyName"];?></td>
                <td><?php echo $row["ContactName"];?></td>
                <td><?php echo $row["ContactTitle"];?></td>
                <td><?php echo $row["Address"];?></td>
                <td><?php echo $row["City"];?></td>
                <td><?php echo $row["Region"];?></td>
                <td><?php echo $row["PostalCode"];?></td>
                <td><?php echo $row["Country"];?></td>
                <td><?php echo $row["Phone"];?></td>
                <td><?php echo $row["Fax"];?></td>
            </tr>
            <?php endwhile;?>
        </tbody>
        <tfoot>
            <tr>
                <th>CustomerID</th>
                <th>CompanyName</th>
                <th>ContactName</th>
                <th>ContactTitle</th>
                <th>Address</th>
                <th>City</th>
                <th>Region</th>
                <th>PostalCode</th>
                <th>Country</th>
                <th>Phone</th>
                <th>Fax</th>
            </tr>
        </tfoot>
        </table>
        
        </div>
    </section>
</body>