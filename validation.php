<?php

if(isset($_POST['action'])){
    if(!empty($_POST['search'])){
        $search = $_POST['search'];
        
        echo $search;
    }
}