<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kasir Coffee Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Judul Halaman */
    .title {
        text-align: center;
        padding: 20px;
        font-size: 2em;
        font-weight: bold;
        color: #333;
        background-color: #ffffff;
        width: 100%;
        margin-left: -150px;
    }
    
    /* Global Styles */
    body {
        display: flex;
        flex-direction: column;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
    }
    /* Container untuk seluruh menu */
    .menu-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        justify-content: center;
        margin: 0 auto;
        padding-top: 20px;
        max-width: 800px;
        margin-left: 125px;
    }
    
    /* Responsif untuk layar kecil (tampil satu kolom) */
    @media (max-width: 768px) {
        .menu-container {
            grid-template-columns: 1fr;
        }
    }

    /* Setiap item menu */
    .menu-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 15px;
        background-color: #D9D9D9;
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 150px; /* Tinggi konsisten untuk semua menu */
    }

    /* Hover effect untuk menu item */
    .menu-item:hover {
        transform: translateY(-5px);
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
    }

    /* Gambar menu */
    .menu-item img {
        width: 90px;
        height: 90px;
        border-radius: 8px;
        object-fit: cover;
        flex-shrink: 0;
    }

    /* Informasi menu */
    .menu-info {
        flex: 1;
        padding-left: 15px;
        color: #000000;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    /* Nama menu */
    .menu-info h2 {
        font-size: 1.2em;
        margin: 0;
        font-weight: bold;
        color: #000000;
    }

    /* Deskripsi menu */
    .menu-info p {
        margin: 5px 0;
        font-size: 0.85em;
        color: #000000;
    }

    /* Harga menu */
    .menu-info .price {
        font-size: 1.2em;
        font-weight: bold;
        color: #000000;
        margin-top: auto; /* Membuat harga berada di bagian bawah */
    }

    /* Tombol tambah */
    .add-btn {
        font-size: 1.5em;
        color: #000000;
        background-color: transparent;
        border: none;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .add-btn:hover {
        color: #000000;
    }

    /* Sidebar untuk daftar pesanan */
    .sidebar {
        position: fixed;
        right: 0;
        top: 0;
        height: 100vh;
        width: 300px;
        background-color: #D2C1B0;
        padding: 20px;
        border-left: 1px solid #ddd;
        border-radius: 8px 0 0 8px;
        box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
        overflow-y: auto;
    }

    /* Judul sidebar */
    .sidebar h2 {
        font-size: 24px;
        margin-bottom: 15px;
        font-weight: bold;
        color: #000000;
        text-align: center;
    }

    /* Order Item Styling */
    .order-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px 0;
        border-bottom: 1px solid #000000;
        margin-bottom: 10px;
    }

    /* Tombol hapus item */
    .remove-btn {
        background: none;
        border: none;
        color: #000000;
        font-size: 20px;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .remove-btn:hover {
        color: #000000;
    }

    /* Total Harga */
    .total-price {
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        margin-top: 20px;
        padding: 10px 0;
        background-color: #e0e0e0;
        border-radius: 8px;
    }

    /* Tombol bayar */
    #payButton {
        width: 100%;
        font-size: 18px;
        margin-top: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px 0;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #payButton:hover {
        background-color: #218838;
    }
    </style>
</head>
<body>

    <!-- Judul Halaman -->
    <div class="title">
        Ketersediaan Menu
    </div>

    <!-- Kontainer Menu -->
    <div class="menu-container">
        <!-- Menu Items -->
        <div class="menu-item">
            <img src="Gambar/NasgorSosis.png" alt="Nasi Goreng Sosis">
            <div class="menu-info">
                <h2>Nasi Goreng Nugget</h2>
                <p>• Nasi<br>• Sosis</p>
                <p class="price">15.000</p>
            </div>
            <button class="add-btn" onclick="addToOrder('Nasi Goreng Sosis', 15000)">+</button>
        </div>

        <div class="menu-item">
            <img src="Gambar/KopiGulaAren.png" alt="Kopi Gula Aren">
            <div class="menu-info">
                <h2>Kopi Gula Aren</h2>
                <p>• Air<br>• Kopi Arabika<br>• Gula Aren<br>• Susu</p>
                <p class="price">20.000</p>
            </div>
            <button class="add-btn" onclick="addToOrder('Kopi Gula Aren', 20000)">+</button>
        </div>

        <div class="menu-item">
            <img src="Gambar/NasgorNugget.png" alt="Nasi Goreng Nugget">
            <div class="menu-info">
                <h2>Nasi Goreng Nugget</h2>
                <p>• Nasi<br>• Nugget</p>
                <p class="price">15.000</p>
            </div>
            <button class="add-btn" onclick="addToOrder('Nasi Goreng Nugget', 15000)">+</button>
        </div>

        <div class="menu-item">
            <img src="Gambar/Affogato.png" alt="Affogato">
            <div class="menu-info">
                <h2>Affogato</h2>
                <p>• Air<br>• Kopi Arabika<br>• Gula Pasir<br>• Ice Cream</p>
                <p class="price">30.000</p>
            </div>
            <button class="add-btn" onclick="addToOrder('Affogato', 30000)">+</button>
        </div>

        <div class="menu-item">
            <img src="Gambar/Platter1.png" alt="Platter 1">
            <div class="menu-info">
                <h2>Platter 1</h2>
                <p>• Kentang<br>• Sosis<br>• Nugget</p>
                <p class="price">20.000</p>
            </div>
            <button class="add-btn" onclick="addToOrder('Platter 1', 20000)">+</button>
        </div>

        <div class="menu-item">
            <img src="Gambar/Espresso.png" alt="Espresso">
            <div class="menu-info">
                <h2>Espresso</h2>
                <p>• Air<br>• Kopi Arabika</p>
                <p class="price">15.000</p>
            </div>
            <button class="add-btn" onclick="addToOrder('Espresso', 15000)">+</button>
        </div>

        <div class="menu-item">
            <img src="Gambar/Platter2.png" alt="Platter 2">
            <div class="menu-info">
                <h2>Platter 2</h2>
                <p>• Donat<br>• Croissant<br>• Kopi Gula Aren</p>
                <p class="price">30.000</p>
            </div>
            <button class="add-btn" onclick="addToOrder('Platter 2', 30000)">+</button>
        </div>

        <div class="menu-item">
            <img src="Gambar/Macchiato.png" alt="Macchiato">
            <div class="menu-info">
                <h2>Macchiato</h2>
                <p>• Double Espresso<br>• Susu</p>
                <p class="price">25.000</p>
            </div>
            <button class="add-btn" onclick="addToOrder('Macchiato', 25000)">+</button>
        </div>
    </div>

    <!-- Sidebar untuk daftar pesanan -->
    <div class="sidebar">
        <h2>Daftar Pesanan</h2>
        <ul id="orderList" class="list-unstyled"></ul>
        <div class="total-price">
            Total Harga: Rp <span id="totalPrice">0</span>
        </div>
        <button id="payButton" class="btn btn-success mt-4" onclick="pay()">
            Bayar
        </button>
    </div>

    <!-- Script JavaScript untuk logika pesanan -->
    <script>
        let totalPrice = 0;

        function addToOrder(itemName, itemPrice) {
            const orderList = document.getElementById("orderList");

            const listItem = document.createElement("li");
            listItem.classList.add("order-item");
            listItem.innerHTML = `${itemName} - Rp ${itemPrice.toLocaleString()} 
                                  <button class="remove-btn" onclick="removeFromOrder(this, ${itemPrice})">&times;</button>`;
            orderList.appendChild(listItem);

            totalPrice += itemPrice;
            updateTotalPrice();
        }

        function removeFromOrder(button, itemPrice) {
            const listItem = button.parentElement;
            listItem.remove();
            totalPrice -= itemPrice;
            updateTotalPrice();
        }

        function updateTotalPrice() {
            document.getElementById("totalPrice").textContent = totalPrice.toLocaleString();
        }

        function pay() {
            if (totalPrice > 0) {
                alert(`Total Harga yang harus dibayar: Rp ${totalPrice.toLocaleString()}`);
                resetOrder();
            } else {
                alert("Tidak ada pesanan untuk dibayar.");
            }
        }

        function resetOrder() {
            document.getElementById("orderList").innerHTML = '';
            totalPrice = 0;
            updateTotalPrice();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

<?php include "navbar.php"?>

</html>
