<div class="page p-4">
    <div class="flex justify-between align-middle items-center">
        <h2 class="text-lg font-extrabold mb-4 text-white bg-warning px-2 py-1 rounded-3xl">Update Siswa</h2>
        <a href="index.php?page=list-siswa" class="btn btn-sm btn-error text-white">Kembali</a>
    </div>
    <form action="function/updateSiswa.php" method="post" enctype="multipart/form-data" class="space-y-4">

        <?php
        // untuk memanggil file database
        include('function/database.php');
        // variabel untuk nomor awal
        $no = 1;
        // variabel untuk mengambil id
        $id = $_GET['id'];
        // variabel untuk mysqli query select
        $queryDataSiswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
        // buat ngeloop data yang sudah di select berdasarkan id
        while ($dataSiswa = mysqli_fetch_array($queryDataSiswa)) {
        ?>

            <div class="my-4">
                <label class=" text-black font-medium">Nama</label>
                <div class="form-control">
                    <input type="text" class="input input-bordered w-full" name="id"
                        value="<?= $dataSiswa['id'] ?>" hidden />
                    <input type="text" placeholder="Masukkan nama" class="input input-bordered  w-full"
                        name="nama" value="<?= $dataSiswa['nama'] ?>" />
                </div>
            </div>
            <div class="my-4">
                <label class=" text-black font-medium">Alamat</label>
                <div class="form-control">
                    <textarea class="textarea textarea-bordered  w-full" placeholder="Masukkan alamat" name="alamat"><?= $dataSiswa['alamat'] ?></textarea>
                    <!-- <input type="text" placeholder="Masukkan alamat" class="input input-bordered  w-full"
                        name="alamat" value="<?= $dataSiswa['alamat'] ?>" /> -->
                </div>
            </div>
            <div class="my-4">
                <label class="form-control w-full   ">
                    <div class="label">
                        <span class="text-black font-medium">Jenis Kelamin</span>
                    </div>
                    <select class="select select-bordered " name="jenis_kelamin">
                        <option disabled>Pilih Jenis Kelamin</option>
                        <option selected hidden value="<?= $dataSiswa['jenis_kelamin'] ?>">
                            <?= $dataSiswa['jenis_kelamin'] ?>
                        </option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </label>
            </div>
            <div class="my-4">
                <label class="form-control w-full">
                    <div class="label">
                        <span class="text-black font-medium">Agama</span>
                    </div>
                    <select class="select select-bordered " name="agama">
                        <option disabled>Pilih Agama</option>
                        <option value="<?= $dataSiswa['agama'] ?>" hidden selected>
                            <?= $dataSiswa['agama'] ?>
                        </option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Islam">Islam</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                    </select>
                </label>
            </div>
            <div class="my-4">
                <label class="text-black font-medium">Sekolah Asal</label>
                <div class="form-control">
                    <input type="text" placeholder="Masukkan sekolah asal" class="input input-bordered w-full" name="sekolah_asal" value="<?= $dataSiswa['sekolah_asal'] ?>" />
                </div>
            </div>

        <?php } ?>

        <div class="mt-4 flex justify-end flex-wrap gap-3">
            <button type="reset" class="hover:scale-90 transition-all btn btn-error text-white">Reset</button>
            <button type="submit" class="hover:scale-90 transition-all btn btn-primary text-white">Simpan</button>
        </div>
    </form>
</div>
