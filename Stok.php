<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Stok Coffee Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .title {
            text-align: center;
            padding: 20px;
            font-size: 2em;
            font-weight: bold;
            color: #333;
            background-color: #ffffff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }

        .main {
            padding: 20px;
        }

        /* Mengatur grid menjadi 2 kolom di layar besar */
        .stock-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .stock-item {
            background-color: #ECECEC;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .item-name {
            font-weight: bold;
        }

        .stock-control {
            display: flex;
            align-items: center;
        }

        .stock-btn {
            background-color: #D7B899;
            color: #333;
            border: none;
            padding: 5px 10px;
            font-size: 18px;
            cursor: pointer;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .stock-btn:hover {
            background-color: #B38A6C;
        }

        .stock-amount {
            font-size: 18px;
        }
    </style>
</head>
<body>

    <!-- Judul Halaman -->
    <div class="title">
        Ketersediaan Stok
    </div>

    <div class="main container">
        <div class="stock-list">
            <?php
            $items = [
                ["name" => "Air Putih", "stock" => 40],
                ["name" => "Gula Pasir", "stock" => 40],
                ["name" => "Kopi Arabica", "stock" => 33],
                ["name" => "Gula Aren", "stock" => 33],
                ["name" => "Nasi", "stock" => 23],
                ["name" => "Susu", "stock" => 23],
                ["name" => "Donat", "stock" => 54],
                ["name" => "Ice Cream", "stock" => 54],
                ["name" => "Croissant", "stock" => 23],
                ["name" => "Nugget", "stock" => 23],
                ["name" => "Kentang", "stock" => 54],
                ["name" => "Sosis", "stock" => 54]
            ];

            foreach ($items as $index => $item) {
                echo '<div class="stock-item">';
                echo '<div class="item-name">' . $item["name"] . '</div>';
                echo '<div class="stock-control">';
                echo '<button class="stock-btn" onclick="increaseStock(' . $index . ')">+</button>';
                echo '<span id="stock-amount-' . $index . '" class="stock-amount">' . $item["stock"] . '</span>';
                echo '<button class="stock-btn" onclick="decreaseStock(' . $index . ')">-</button>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Script JavaScript untuk logika pesanan -->
    <script>
        function increaseStock(index) {
            const stockAmount = document.getElementById(`stock-amount-${index}`);
            let currentStock = parseInt(stockAmount.innerText);
            stockAmount.innerText = currentStock + 1;
        }

        function decreaseStock(index) {
            const stockAmount = document.getElementById(`stock-amount-${index}`);
            let currentStock = parseInt(stockAmount.innerText);
            if (currentStock > 0) {
                stockAmount.innerText = currentStock - 1;
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

<?php include "navbar.php"?>

</html>
