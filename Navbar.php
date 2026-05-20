<?php 
$current_page = basename($_SERVER['PHP_SELF']); 
?>
<nav class="navbar navbar-expand-lg navbar-custom mb-5">
    <div class="container">
        <a class="navbar-brand" href="index.php">📚 SI-PERPUS</a>
        <button class="navbar-toggler text-white border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'Member.php' || $current_page == 'FormMember.php') ? 'active' : '' ?>" href="Member.php">Data Member</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'Buku.php' || $current_page == 'FormBuku.php') ? 'active' : '' ?>" href="Buku.php">Data Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'Peminjaman.php' || $current_page == 'FormPeminjaman.php') ? 'active' : '' ?>" href="Peminjaman.php">Peminjaman</a>
                </li>
            </ul>
        </div>
    </div>
</nav>