
<link rel="stylesheet" href="sidebar.css">
<div class="sidenav">
    <nav>
        <ul>
            <li class="logo"><span>Aplikasi Kasir &nbsp;</span>
                <p id="safeTimerDisplay"></p>
            </li>
            <li><a href="index.php" class="navLink"> Dashboard</a></li>
            <li><a href="daftar.php" class="navLink"> Daftar</a></li>
            <li><a href="tambahDaftar.php" class="navLink"> Tambah daftar</a></li>
            <li><a href="" class="navLink"> </a></li>
            <li><a href="" class="navLink"> Siswa</a></li>
            <li><a href="" class="navLink"> Ujian</a></li>
            <li><a href="" class="navLink"> Bank Soal</a></li>
            <li><a href="" class="navLink"> Sesi Ujian</a></li>
            <li><a href="" class="navLink"> Laporan Nilai</a></li>
        </ul>
    </nav>
</div>
<script>

</script>

<style>
    /* Styling Sidebar */
    .sidenav {
        background: linear-gradient(135deg, #131e29, #131e29, #131e29);
        color: white;
        height: 100%;
        width: 100px;
        /* Wider sidebar for better spacing */
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
        /* Subtle shadow effect */
        transition: width 0.3s ease;
        /* Smooth width transition */
    }

    .sidenav:hover {
        width: 250px;
        /* Expand sidebar on hover */
    }

    /* Logo styling */
    .logo {
        display: flex;
        align-items: center;
        padding: 20px;
        border-bottom: 1px solid #34495e;
        /* Subtle border */
    }

    .logo img {
        width: 30px;
        /* Adjust logo size */
        margin-right: 10px;
    }

    .logo span {
        font-size: 18px;
        font-weight: bold;
    }

    /* Navigation Links */
    .sidenav nav ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        flex: 1;
    }

    .sidenav nav ul li {
        margin-bottom: 5px;
    }

    .navLink {
        text-decoration: none;
        color: white;
        display: flex;
        align-items: center;
        padding: 15px;
        border-radius: 4px;
        transition: background 0.3s ease, padding-left 0.3s ease;
    }

    .navLink img {
        margin-right: 15px;
        /* Space between icon and text */
        width: 24px;
        /* Adjust icon size */
    }

    .navLink:hover {
        background-color: #34495e;
        /* Slightly lighter background on hover */
        padding-left: 25px;
        /* Add space on hover */
    }

    /* Styling tombol Logout */
    .button {
        padding: 10px 20px;
        /* Consistent padding */
        border: none;
        border-radius: 4px;
        background: linear-gradient(45deg, #000000, #000000);
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s ease, transform 0.3s ease;
        /* Smooth transitions */
        margin: 20px;
        /* Margin for spacing */
    }

    .button:hover {
        background: linear-gradient(135deg, #909b9a, #909397);
        transform: scale(1.05);
        /* Slightly enlarge on hover */
    }

    .button:active {
        background: #a93226;
        /* Even darker red when clicked */
        transform: scale(0.95);
        /* Slightly shrink on click */
    }

    .warna {
        color: aliceblue;
    }
</style>