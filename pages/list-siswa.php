<div class="page">
    <div class="flex justify-between align-middle items-center">
        <h2 class="text-2xl font-extrabold mb-4 text-black">List Siswa</h2>

        <?php
        // untuk memanggil file database
        include('function/database.php');
        // variabel untuk query select pada tabel siswa
        $queryDataSiswa = mysqli_query($koneksi, "SELECT * FROM siswa");
        // variabel untuk menghitung jumlah data pada tabel siswa
        $jumlahDataSiswa = mysqli_num_rows($queryDataSiswa)
        ?>

        <h2 class="text-2xl font-extrabold mb-4 text-black">Jumlah data siswa: <?= $jumlahDataSiswa ?></h2>
    </div>
    <div class="flex justify-between flex-wrap py-3">
        <div class="flex justify-start">
            <p class="text-base text-black font-bold">Daftar list siswa</p>
        </div>
        <div class="flex justify-end">
            <a href="index.php?page=tambah-siswa" class="btn-sm btn btn-primary text-white font-bold">Tambah Siswa
            </a>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="table table-md bg-gradient-to-r from-amber-200 to-yellow-500">
            <!-- head -->
            <thead class="text-center text-black">
                <tr class="lg:text-lg md:text-lg sm:text-sm font-bold">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="text-center text-black">

                <?php
                // untuk memanggil file database
                include('function/database.php');
                // variabel untuk nomor awal
                $no = 1;
                // variabel untuk mysqli query select
                $queryDataSiswa = mysqli_query($koneksi, "SELECT * FROM siswa");
                // buat ngeloop data yang sudah di select berdasarkan id
                while ($dataSiswa = mysqli_fetch_array($queryDataSiswa)) {
                ?>
                    <tr class="lg:text-lg md:text-lg sm:text-sm text-sm text-center">
                        <td class="font-extrabold">
                            <?= $no++ ?>
                        </td>
                        <td class="min-w-[200px] text-center">
                            <div class="flex items-center justify-center gap-3">
                                <div>
                                    <div class="font-bold text-lg"><?= $dataSiswa['nama'] ?></div>
                                    <div class="text-sm badge badge-primary text-white font-bold">
                                        <?= $dataSiswa['jenis_kelamin'] ?>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="min-w-[200px] text-center">
                            <b class="bg-black px-3 py-1 rounded-2xl text-white font-bold">
                                <?= $dataSiswa['alamat'] ?>
                            </b>
                        </td>
                        <td class="min-w-[200px] text-center">
                            <span class="bg-black px-3 py-1 rounded-2xl text-white font-bold">
                                <?= $dataSiswa['agama'] ?>
                            </span>
                        </td>
                        <td class="min-w-[300px] text-center">
                            <b class="min-w-[300px] bg-black px-3 py-1 rounded-2xl text-white font-bold">
                                <?= $dataSiswa['sekolah_asal'] ?>
                            </b>
                        </td>
                        <th class="min-w-[200px] text-center">
                            <div
                                class="flex justify-center items-center flex-wrap gap-4 lg:min-w-[150px] sm:min-w-[50px]">
                                <a href="function/deleteSiswa.php?id=<?= $dataSiswa['id']; ?>"
                                    class="btn btn-sm btn-error text-white font-bold min-w-[20px    ]">Hapus</a>
                                <a href="index.php?page=update-siswa&id=<?= $dataSiswa['id']; ?>"
                                    class="btn btn-sm btn-primary text-white font-bold">Edit</a>
                            </div>
                        </th>
                    </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
</div>
