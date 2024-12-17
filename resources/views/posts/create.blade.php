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
            <!-- deksripsi 1 -->
            <div class="mb-3">
                <label for="deksripsi1" class="form-label">deksripsi 1</label>
                <textarea class="form-control" id="deksripsi" name="deksripsi" rows="3"></textarea>
            </div>

            <!-- Level (select option) -->
            <div class="mb-3">
                <label for="Level" class="form-label">Level</label>
                <select class="form-control" id="Level" name="Level">
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

           
        

            <!-- Sub Judul -->
            <div class="mb-3">
                <label for="Sub_judul" class="form-label">Sub Judul</label>
                <textarea class="form-control" id="Sub_judul" name="Sub_judul" rows="3"></textarea>
            </div>

          

           
            <div class="mb-3">
                <label for="isi_bahan_bahan" class="form-label">Isi 1</label>
                <input class="form-control" id="isi_bahan_bahan" name="isi_bahan_bahan[]" rows="3" />
                <span style="cursor: pointer; width: 100px; background-color: green; padding: 5px; color: white;" id="plus">+</span>
                <span style="cursor: pointer; width: 100px; background-color: red; padding: 5px; color: white;" id="minus">-</span>
            </div>
            <div id="additional-inputs"></div>
            
            <div class="mb-3">
                <label for="cara_membuat" class="form-label">Isi Bahan</label>
                <input class="form-control" id="cara_membuat" name="cara_membuat[]" rows="3" />
                <span style="cursor: pointer; width: 100px; background-color: green; padding: 5px; color: white;" id="plus_isi_bahan">+</span>
                <span style="cursor: pointer; width: 100px; background-color: red; padding: 5px; color: white;" id="minus_isi_bahan">-</span>
            </div>
            <div id="isi_bahan_tampung"></div>
            

           

         
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

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
    let inputCount = 1;
    let inputCount_isi_bahan = 1;

    $("#plus").click(function (e) {
        e.preventDefault();
        inputCount++;
        const newInputDiv = `
            <div class="mb-3" id="input-${inputCount}">
                <label for="isi1-${inputCount}" class="form-label">Isi ${inputCount}</label>
                <input class="form-control" id="isi1-${inputCount}" name="isi_bahan_bahan[]" rows="3" />
                <button type="button" class="btn btn-danger btn-sm remove-input" data-id="${inputCount}">Remove</button>
            </div>
        `;
        $("#additional-inputs").append(newInputDiv);
    });

    $("#minus").click(function (e) {
        e.preventDefault();
        $("#additional-inputs input").each(function () {
            if ($(this).val().trim() === "") {
                $(this).parent().remove();
            }
        });
    });




    $("#plus_isi_bahan").click(function (e) {
        e.preventDefault();
        inputCount_isi_bahan++;
        const newDivIsiBahan = `
            <div class="mb-3" id="input-bahan-${inputCount_isi_bahan}">
                <label for="isiBahan-${inputCount_isi_bahan}" class="form-label">Isi ${inputCount_isi_bahan}</label>
                <input class="form-control" id="isiBahan-${inputCount_isi_bahan}" name="cara_membuat[]" rows="3" />
                <button type="button" class="btn btn-danger btn-sm remove-input" data-id="${inputCount_isi_bahan}">Remove</button>
            </div>
        `;
        $("#isi_bahan_tampung").append(newDivIsiBahan);
    });


    $("#minus_isi_bahan").click(function (e) {
        e.preventDefault();
        $("#isi_bahan_tampung input").each(function () {
            if ($(this).val().trim() === "") {
                $(this).parent().remove();
            }
        });
    });

    $(document).on("click", ".remove-input", function () {
        $(this).parent().remove();
    });
});

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
