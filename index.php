<?php
    include "src/controller/login.php";
    include "src/controller/middleware.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Adnan_RPL</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/42eebd283f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
    <div class="flex">
        <div class="bg-[#F7F7F9] h-screen w-75 p-5 py-6">
            <div class="flex items-center gap-3 px-2">
                <i class="fas fa-user-friends"></i>
                <h1 class="font-semibold text-2xl">Siswa</h1>
            </div>

            <ul class="flex flex-col gap-5 mt-13">
                <li class="px-2 py-1 rounded-md bg-black text-white"><i class="fas fa-th-large"></i> Beranda</li>
                <li class="px-2 py-1 rounded-md"><i class="fas fa-info-circle"></i> Informasi</li>
                <li class="px-2 py-1 rounded-md"><i class="fas fa-phone-square"></i> Pesan</li>
                <li class="px-2 py-1 rounded-md"><i class="fas fa-question-circle"></i> Help</li>
            </ul>
        </div>
        <!-- disisi samping -->
        <div class="shadow-2xs px-8 pt-6 w-full">
            <div class="flex justify-between items-center">
                <h1 class="font-semibold text-2xl">Beranda</h1>
            
                <div class="relative">
                    <button type="button" id="dropdownBtn" class="rounded-full relative focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden cursor-pointer">
                        <img src="./src/img/profile.jpeg" class="w-8 h-8 rounded-full" alt="profile">
                    </button>

                    <div id="dropdown" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-[#F7F7F9] py-1 shadow-sm ring-1 ring-black/5 hidden transform opacity-0 scale-95 transition ease-out duration-100 flex-col">
                        <a class="rounded-md px-3 py-2 text-sm font-medium text-gray-700"><?= $_SESSION['username'] ?></a>
                        <a class="rounded-md px-3 py-2 text-sm font-medium text-gray-700">Setting</a>
                        <a href="./src/controller/logout.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-700">Log out</a>
                    </div>
                </div>

            </div>

            <!-- dibagian bawah -->
            <div>
                <div class="flex gap-6 mt-10">
                    <div class="bg-[#F7F7F9] w-60 p-5 rounded-md">
                        <h3 class="font-medium text-md">Saldo</h3>
                        <h1 class="font-semibold text-4xl mt-8">Rp 520.000</h1>
                        <button class="font-semibold text-white bg-[#41E2BA] px-3 py-1 rounded-md mt-6 w-full">Riwayat saldo</button>
                    </div>
                    <div class="bg-[#F7F7F9] p-5 rounded-md w-max">
                        <h3 class="font-medium text-md">Kehadiran</h3>
                        <div class="flex gap-5">
                            <div class="bg-white flex flex-col items-center rounded-md w-28 h-30 mt-3">
                                <div class="bg-[#41E2BA]/10 w-8 h-8 flex items-center justify-center text-center rounded mt-3">
                                    <i class="fas fa-check text-[#41E2BA]"></i>
                                </div>
                                <h3 class="font-medium text-lg mt-2 text-gray-700">Hadir</h3>
                                <h2 class="font-semibold text-2xl text-[#41E2BA]">88</h2>
                            </div>
                            <div class="bg-white flex flex-col items-center rounded-md w-28 h-30 mt-3">
                                <div class="bg-yellow-300/10 w-8 h-8 flex items-center justify-center text-center rounded mt-3">
                                    <i class="fas fa-exclamation-triangle text-yellow-300"></i>
                                </div>
                                <h3 class="font-medium text-lg mt-2 text-gray-700">Izin</h3>
                                <h2 class="font-semibold text-2xl text-yellow-300">20</h2>
                            </div>
                            <div class="bg-white flex flex-col items-center rounded-md w-28 h-30 mt-3">
                                <div class="bg-red-400/10 w-8 h-8 flex items-center justify-center text-center rounded mt-3">
                                    <i class="fas fa-sign-out-alt text-red-400"></i>
                                </div>
                                <h3 class="font-medium text-lg mt-2 text-gray-700">Alpa</h3>
                                <h2 class="font-semibold text-2xl text-red-400">7</h2>
                            </div>
                            <div class="bg-white flex flex-col items-center rounded-md w-28 h-30 mt-3">
                                <div class="bg-gray-600/10 w-8 h-8 flex items-center justify-center text-center rounded mt-3">
                                    <i class="fas fa-book text-gray-600"></i>
                                </div>
                                <h3 class="font-medium text-lg mt-2 text-gray-700">Tugas</h3>
                                <h2 class="font-semibold text-2xl text-gray-600">82</h2>
                            </div>
                            <div class="bg-white flex flex-col items-center rounded-md w-28 h-30 mt-3">
                                <div class="bg-red-500/10 w-8 h-8 flex items-center justify-center text-center rounded mt-3">
                                    <i class="fas fa-ban text-red-500"></i>
                                </div>
                                <h3 class="font-medium text-lg mt-2 text-gray-700">Point</h3>
                                <h2 class="font-semibold text-2xl text-red-500">0</h2>
                            </div>
                        </div>
                    </div>
                    <div class="bg-[#F7F7F9] w-78 rounded-md p-5">
                        <h3 class="font-medium text-md">Ekstrakurikuler</h3>
                        <ul class="flex flex-col gap-2 mt-3">
                            <li class="bg-white rounded-md px-2 py-1 font-medium text-gray-600">Japan Club</li>
                            <li class="bg-white rounded-md px-2 py-1 font-medium text-gray-600">English Club</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex mt-5 gap-8">
                <div class="bg-[#F7F7F9] w-98 h-60 rounded-md p-5">
                    <div class="flex justify-between">
                        <h1 class="font-medium">Jadwal Pelajaran</h1>
                        <h2 class="font-medium text-gray-700">Senin, 02-06-2025</h2>
                    </div>
                    <div class="h-full w-full">

                        <div class="flex flex-col mt-3 gap-2">
                            <h1 class="bg-white rounded-md p-1 px-3 capitalize font-medium text-gray-800">PPKN</h1>
                            <h1 class="bg-white rounded-md p-1 px-3 capitalize font-medium text-gray-800">Matematika</h1>
                            <h1 class="bg-white rounded-md p-1 px-3 capitalize font-medium text-gray-800">Bahasa inggris</h1>
                            <h1 class="bg-white rounded-md p-1 px-3 capitalize font-medium text-gray-800">Desain grafis</h1>
                        </div>

                        <!-- jika tidak ada -->
                        <!-- <h1 class="flex justify-center items-center h-full font-semibold text-lg text-gray-800">Tidak ada jadwal</h1> -->
                    </div>
                </div>

                <div class="bg-[#F7F7F9] w-105 h-60 rounded-md p-5">
                    <h1 class="capitalize font-medium mb-2">Nilai Rata-rata mapel</h1>

                    <canvas id="nilaiChart" height="130"></canvas>
                </div>

                <div class="bg-[#F7F7F9] w-101 h-60 rounded-md p-5">
                    <h1 class="capitalize font-medium mb-2">info dan berita</h1>
                    <div class="flex flex-col gap-2">
                        <div class="bg-white text-black w-full h-20 rounded-t-md flex">
                            <img src="./src/img/upacara.jpg" alt="berita" class="w-20 h-full rounded-tl-md">
                            <div class="p-1">
                                <h1 class="font-medium text-lg text-gray-800">Upacara hari lahir pancasila</h1>
                                <p class="text-xs text-gray-800">Hari lahir pancasila jatuh pada hari minggu tanggal 1 juni 2025, dan akan...</p>
                            </div>
                        </div>
                        <div class="bg-white text-black w-full h-20 rounded-b-md flex">
                            <img src="./src/img/pembagian.jpg" alt="berita" class="w-20 h-full rounded-bl-md">
                            <div class="p-1">
                                <h1 class="font-medium text-lg text-gray-800">Persiapan pembagian rapot</h1>
                                <p class="text-xs text-gray-800">Pembagian rapot akan diselenggarakan sekitar bulan ini, jadi jika siswa belu...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- notip -->
    <div class="absolute bottom-5 right-5 <?php echo ($_SESSION['notip'] ? 'block' : 'hidden'); $_SESSION['notip'] = false ?>" id="notip">
        <div class="bg-[#F7F7F9] w-70 h-13 rounded-md shadow-md p-1 px-2 flex items-center text-center justify-between">
            <div class="flex items-center text-center">
                <i class="far fa-check-circle text-green-500 text-xl mr-2"></i>
                <h5 class="font-medium text-sm">Login berhasil!!!</h5>
            </div>
            <button class="cursor-pointer" id="exitNotip"><i class="fas fa-times text-gray-600" id="btn"></i></button>
        </div>
    </div>

    <script src="src/main.js"></script>
    <script src="src/diagram.js"></script>
</body>
</html>