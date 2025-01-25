<div class="page p-4">
    <div class="flex justify-between align-middle items-center">
        <h2 class="text-2xl font-extrabold mb-4 text-black">Tambah Siswa</h2>
        <a href="index.php?page=list-siswa" class="btn btn-sm btn-error text-white">Kembali</a>
    </div>
    <form action="function/tambahSiswa.php" method="post" enctype="multipart/form-data" class="space-y-4">
        <div class="my-4">
            <label class=" text-black font-medium">Nama</label>
            <div class="form-control">
                <input
                    type="text"
                    placeholder="Masukkan nama"
                    class="input input-bordered w-full"
                    name="nama" />
            </div>
        </div>
        <div class="my-4">
            <label class=" text-black font-medium">Alamat</label>
            <div class="form-control">
                <textarea class="textarea textarea-bordered w-full" placeholder="Masukkan alamat" name="alamat"></textarea>
                <!-- <input
                    type="text"
                    placeholder="Masukkan alamat"
                    class="input input-bordered text-white w-full"
                    name="alamat" /> -->
            </div>
        </div>
        <div class="my-4">
            <label class="form-control w-full   ">
                <div class="label">
                    <span class="text-black font-medium">Jenis Kelamin</span>
                </div>
                <select class="select select-bordered" name="jenis_kelamin">
                    <option disabled selected>Pilih Jenis Kelamin</option>
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
                    <option disabled selected>Pilih Agama</option>
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
            <label class=" text-black font-medium">Sekolah Asal</label>
            <div class="form-control">
                <input
                    type="text"
                    placeholder="Masukkan sekolah asal"
                    class="input input-bordered w-full"
                    name="sekolah_asal" />
            </div>
        </div>
        <div class="mt-4 flex justify-end flex-wrap gap-3">
            <button type="reset" class="btn btn-error text-white">Reset</button>
            <button type="submit" class="btn btn-primary text-white">Simpan</button>
        </div>
    </form>
</div>
