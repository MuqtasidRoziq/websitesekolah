<?php

class Database {
    private $host = DB_HOSTNAME;
    private $user = DB_USERNAME;
    private $pass = DB_PASSWORD;
    private $db_name = DB_DATABASE;
    private $port = DB_PORT;

    private $dbh; 
    private $stmt; 

    // Array dan String untuk menampung parameter bind MySQLi
    private $bindParams = []; 
    private $bindTypes = '';

    public function __construct() {
        // Mengaktifkan mode error yang ketat (mirip PDO Exception)
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        try {
            $this->dbh = new mysqli($this->host, $this->user, $this->pass, $this->db_name, $this->port);
            
            // Set charset agar aman dari bug karakter aneh
            $this->dbh->set_charset("utf8mb4");
        } catch (mysqli_sql_exception $e) {
            die("Koneksi Database Gagal: " . $e->getMessage());
        }
    }

    // Menyiapkan Query
    public function query($query) {
        $this->stmt = $this->dbh->prepare($query);
        // Reset parameter setiap kali query baru disiapkan
        $this->bindParams = [];
        $this->bindTypes = '';
    }

    // Memasukkan parameter (Tanpa nama, hanya nilainya saja secara berurutan)
    public function bind($value, $type = null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = 'i'; // Integer
                    break;
                case is_double($value):
                    $type = 'd'; // Double/Float
                    break;
                default:
                    $type = 's'; // String
            }
        }
        $this->bindTypes .= $type;
        $this->bindParams[] = $value;
    }

    // Eksekusi Query
    public function execute() {
        if (!empty($this->bindParams)) { // Jika ada parameter yang di-bind
            $this->stmt->bind_param($this->bindTypes, ...$this->bindParams);
        }
        $this->stmt->execute();
    }

    // Mengambil BANYAK data (Array Multidimensi)
    public function resultSet() {
        $this->execute();
        $result = $this->stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Mengambil SATU data (Array Asosiatif tunggal)
    public function single() {
        $this->execute();
        $result = $this->stmt->get_result();
        return $result->fetch_assoc();
    }

    // Menghitung baris yang terpengaruh (INSERT, UPDATE, DELETE)
    public function rowCount() {
        return $this->stmt->affected_rows;
    }
}
?>