<?php 
    function pdo_get_connection(){
        $dburl = "mysql:host=localhost; dbname=demoxshop; charset=utf8";
        $username = "root";
        $password = "";
        try {  
        $conn = new PDO($dburl, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        }

        catch (PDOException $e) { 
        die("Lỗi : " . $e->getMessage());
        }
    }

    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
        }
        catch (PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

    // Truy vấn nhiều dữ liệu
    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(),1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows = $stmt ->fetchAll();
            return $rows;
        }
        catch (PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

    //Truy vấn 1 dữ liệu 
    function pdo_query_one($sql){
        $sql_args = array_slice(func_get_args(),1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows = $stmt ->fetch(PDO::FETCH_ASSOC);
            return $rows;
        }
        catch (PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

?>
