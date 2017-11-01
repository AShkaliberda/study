<?php
const HOST = 'localhost';
const USER = 'root';
const PASSWORD = '';
const DBNAME = 'test';

$db = new PDO('mysql:host='. HOST .';dbname='. DBNAME, USER, PASSWORD);
