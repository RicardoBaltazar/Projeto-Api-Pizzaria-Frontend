<?php

require_once 'Connect.php';
Class SelectAll {
    public function selectAllValue10(){
        try{
            $selectAll = DatabaseConnect::connect()->prepare('SELECT * FROM tb_pizzas');
            $selectAll->execute();
            $executeSelectAll = $selectAll->fetchAll(PDO::FETCH_ASSOC);

            if($executeSelectAll){
                foreach($executeSelectAll as $value){
                    if($value['value'] == 10){
                        echo "<div>";
                            echo "<img src='img/".$value['file']."' alt='pizza'>";
                            echo " <p>".$value['pizza_flavor']."</p>";
                            echo "<span>".$value['value']."$</span>";
                        echo "</div>";
                    }
                }
            }
        } catch (PDOException $error) {
            echo 'Erro com banco de dados '.$error ->getMessage();
            exit();
        } catch(Exception $error) {
            echo 'Erro generico '.$error ->getMessage();
            exit();
        }
    }

    public function selectAllValue20(){
        try{
            $selectAll = DatabaseConnect::connect()->prepare('SELECT * FROM tb_pizzas');
            $selectAll->execute();
            $executeSelectAll = $selectAll->fetchAll(PDO::FETCH_ASSOC);

            if($executeSelectAll){
                foreach($executeSelectAll as $value){
                    if($value['value'] == 20){
                        echo "<div>";
                            echo "<img src='img/".$value['file']."' alt='pizza'>";
                            echo " <p>".$value['pizza_flavor']."</p>";
                            echo "<span>".$value['value']."$</span>";
                        echo "</div>";
                    }
                }
            }
        } catch (PDOException $error) {
            echo 'Erro com banco de dados '.$error ->getMessage();
            exit();
        } catch(Exception $error) {
            echo 'Erro generico '.$error ->getMessage();
            exit();
        }
    }
}