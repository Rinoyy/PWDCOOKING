<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Resep Lengkap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-container">
        <h2 class="form-title">Form Resep Lengkap</h2>
        <form action="{{ route("storeSep") }}" method="POST">
            @csrf
            <!-- ID Resep -->
            {{-- <div class="mb-3">
                <label for="idResep" class="form-label">ID Resep</label>
                <input type="number" class="form-control" id="idResep" name="id_resep">
            </div> --}}

            <!-- judul  -->
            <div class="mb-3">
                <label for="judul" class="form-label">judul 1</label>
                <input class="form-control" id="judul" name="judul" rows="3"></input>
            </div>
            <!-- Deskripsi 1 -->
            <div class="mb-3">
                <label for="deskripsi1" class="form-label">Deskripsi 1</label>
                <textarea class="form-control" id="deskripsi1" name="deskripsi_1" rows="3"></textarea>
            </div>

            <!-- Level (select option) -->
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <select class="form-control" id="level" name="id_level">
                    <option value="">Pilih Level</option>
                    <option value="1">Mudah</option>
                    <option value="2">Sedang</option>
                    <option value="3">Sulit</option>
                </select>
            </div>

            <!-- Waktu -->
            <div class="mb-3">
                <label for="waktu" class="form-label">Waktu</label>
                <input type="text" class="form-control" id="waktu" name="waktu">
            </div>

            <!-- Deskripsi 2 -->
            <div class="mb-3">
                <label for="deskripsi2" class="form-label">Deskripsi 2</label>
                <textarea class="form-control" id="deskripsi2" name="deskripsi_2" rows="3"></textarea>
            </div>

            <!-- Sub Judul -->
            <div class="mb-3">
                <label for="subJudul" class="form-label">Sub Judul</label>
                <textarea class="form-control" id="subJudul" name="sub_judul" rows="3"></textarea>
            </div>

            <!-- Deskripsi 3 -->
            <div class="mb-3">
                <label for="deskripsi3" class="form-label">Deskripsi 3</label>
                <textarea class="form-control" id="deskripsi3" name="deskripsi_3" rows="3"></textarea>
            </div>

            <!-- Isi 1 -->
            <div class="mb-3">
                <label for="isi1" class="form-label">Isi 1</label>
                <input class="form-control" id="isi1" name="isi_1[]" rows="3"></input>
                <span style="cursor: pointer; width: 100; background-color: green; padding: 5px; color: white;" id="plus">+</span>
                <span style="cursor: pointer; width: 100; background-color: red; padding: 5px; color: white;" id="minus">-</span>
            </div>
            <div id="additional-inputs"></div>
            
            <!-- Judul Bahan -->
            <div class="mb-3">
                <label for="judulBahan" class="form-label">Judul Bahan</label>
                <input type="text" class="form-control" id="judulBahan" name="judul_bahan">
            </div>

            <!-- Isi Bahan -->
            <div class="mb-3">
                <label for="isiBahan" class="form-label">Isi Bahan</label>
                <input class="form-control" id="isiBahan" name="isi_bahan[]" rows="3"></input>
                <span style="cursor: pointer; width: 100; background-color: green; padding: 5px; color: white;" id="plus_isi_bahan">+</span>
                <span style="cursor: pointer; width: 100; background-color: red; padding: 5px; color: white;" id="minus_isi_bahan">-</span>
            </div>
            <div id="isi_bahan_tampung"></div>


            <!-- Judul Cara -->
            <div class="mb-3">
                <label for="judulCara" class="form-label">Judul Cara</label>
                <input type="text" class="form-control" id="judulCara" name="judul_cara">
            </div>

            <!-- Isi Cara -->
            <div class="mb-3">
                <label for="isiCara" class="form-label">Isi Cara</label>
                <input class="form-control" id="isiCara" name="isi_cara" rows="3"></input>
            </div>

            <!-- Gambar -->
            <div class="mb-3">
                <label for="img" class="form-label">Gambar (URL)</label>
                <input type="file" class="form-control" id="img" name="img" placeholder="https://">
            </div>

            <!-- ID Kategori -->
            <div class="mb-3">
                <label for="idKategori" class="form-label">ID Kategori</label>
                <input type="number" class="form-control" id="idKategori" name="id_kategori">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</div>

<script src="{{ asset('js/create.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
