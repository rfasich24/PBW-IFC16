<?php 

require_once('db.php');

class Northwind
{
    private $db;

    function __construct()
    {
        $this->db = new mysqli(HOST, USER, PASS,DB);
        if ($this->db->connect_error){
            http_response_code(500);
            die("Connection failed: {$this->db->connect_error}");
            echo "test";
        }
    }

    function __destruct()
    {
        // tutup koneksi ke db
        $this->db->close();
    }
    function read()
    {
        // memanggil database dimana tabel film itu berada dan hanya mengambil 12 data saja
        $begin = isset($_GET['begin']) ? $_GET['begin']: 0;
        $sql = "SELECT * FROM products ORDER BY ProductName asc limit {$begin},12";
        $result = $this->db -> query($sql);
        $data_json = [];
        while ($data = $result->fetch_assoc()){
            array_push($data_json, $data);
        }
        header("Content-Type: application/json");
        echo json_encode($data_json);

    }
    
    function create($data)
    {
        foreach ($data as $key => $value) {
            $value = is_array($value) ? trim(implode(',', $value)) : trim($value);
                $data[$key] = (strlen($value) > 0 ? $value : NULL);
        }
        // Tambah data produtcs baru
        $query = 'INSERT INTO products VALUES(NULL,?, ?, ?, ?, ?, ?, ?,0, ?)';
        $sql = $this->db->prepare($query);
        $sql->bind_param(
            'siisiiii',//sid
            $data['ProductName'],
            $data['SupplierID'],
            $data['CategoryID'],
            $data['QuantityPerUnit'],
            $data['UnitPrice'],
            $data['UnitsInStock'],
            $data['UnitsOnOrder'],
            $data['Discontinued']
        );
        try {
            $sql->execute();
        } catch (\Exception $e) {
            $sql->close();
            http_response_code(500);
            die($e->getMessage());
        }
        $sql->close();
    }
}
// Methode untuk membaca inputan user
$Northwind = new Northwind();
switch ($_GET['action']){
    case 'create':
        $Northwind->create($_POST);
        break;
    default:
        $Northwind->read();
        break;
    }