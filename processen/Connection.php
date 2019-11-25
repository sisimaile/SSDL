<?php


class Connection
{
    public function DB(){
        return new PDO("mysql:host=localhost\SQLEXPRESS; dbname=SSDL", "sa", "StaplesICT");
    }

}