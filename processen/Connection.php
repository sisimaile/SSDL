<?php


class Connection
{
    public function DB(){
        return new PDO("mysql:host=localhost; dbname=ssdl", "root", "");
    }

}