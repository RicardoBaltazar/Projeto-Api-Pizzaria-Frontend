<?php
require_once './Class/SelectAll.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Pizzaria</title>
</head>

<body>
    <div class="page-home">
        <header>
            <nav>
                <h1>PIZZARIA</h1>
                <div>
                    <form action="validation.php" method="POST">
                        <input type="text" name="search" placeholder="Pesquisse por um sabor">
                        <button name="action">Pesquisar</button>
                    </form>
                    <a href="">Lista de pedidos</a>
                </div>
            </nav>
        </header>

        <main>
            <section>
                <?php
                $select = new SelectAll;
                $select->selectAllValue10();
                ?>
            </section>

            <section>
                <?php
                $select = new SelectAll;
                $select->selectAllValue20();
                ?>
            </section>
        </main>
    </div>
</body>

</html>