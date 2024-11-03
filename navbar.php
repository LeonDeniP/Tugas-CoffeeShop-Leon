<style>
        .navbar {
        display: flex;
        justify-content: space-around;
        background-color: #d8a96e;
        padding: 10px 0;
        position: sticky;
        font-family: 'Arial', sans-serif;
        width: 100%;
        margin-top: 30px; /* Menambahkan jarak di atas footer */
    }

    .navbar a {
        text-align: center;
        color: #333;
        text-decoration: none;
        font-size: 18px;
        font-weight: bold;
    }

    .navbar img {
        width: 60px;  
        height: auto;
        margin-bottom: 5px
    }

    .navbar p {
        margin-top: -5px;
        font-size: 18px;
        color: #333;  
    }
</style>

<footer>
<div class="navbar">
    <a href="Statistik.php" title="Chart">
        <img src="Gambar/chart.png" alt="chart">
        <p>Statistik</p>
    </a>
    <a href="Stok.php" title="Stok">
        <img src="Gambar/bag.svg" alt="Stok">
        <p>Stok</p>
    </a>
    <a href="Menu.php" title="Kasir">
        <img src="Gambar/paper.svg" alt="Kasir">
        <p>Kasir</p>
    </a>
</div>
</footer>