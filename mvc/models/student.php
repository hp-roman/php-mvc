<?php
class Student extends Database
{
    public function getStudent()
    {
        $qr = "SELECT * FROM sinhvien";
        return mysqli_query($this->conn, $qr);
    }
}
