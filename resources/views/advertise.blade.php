<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pasang Iklan</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body class="bg-gray-200 p-10">
    
    <x-navbar></x-navbar>
    <div class="max-w-screen-xl mx-auto bg-white p-10 rounded-lg shadow-lg">
      <form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="text-3xl font-bold text-center mb-10">Pasang Iklan</h1>

        <!-- Detail Bangunan -->
        <section class="mb-10">
          <h2 class="text-xl font-semibold mb-4">Detail Bangunan</h2>
          <div class="grid grid-cols-2 gap-6">
            <div>
              <label class="block font-medium mb-1">Tipe Bangunan</label>
              <select name="tipe_bangunan" class="border p-3 rounded w-full">
                <option disabled selected>Pilih Tipe Bangunan</option>
                <option>Pent House</option>
                <option>Apartment</option>
                <option>Town House</option>
              </select>
            </div>

            <div class="relative">
              <label class="block font-medium mb-1">Luas Bangunan</label>
              <input
                name="luas_bangunan"
                type="text"
                placeholder="Contoh: 100"
                inputmode="numeric"
                pattern="\d*"
                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                class="border p-3 rounded w-full pr-14"
              />
              <span class="absolute right-4 top-11 text-gray-500 text-sm"
                >m²</span
              >
            </div>

            <div>
              <label class="block font-medium mb-1">Upload Sertifikasi</label>
              <input
                name="sertifikat"
                type="file"
                accept="image/*,.pdf"
                onchange="tampilkanNamaFile(this)"
                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200"
              />
              <div
                id="nama-sertifikat"
                class="mt-2 text-sm text-gray-600 italic"
              ></div>
            </div>

            <div class="relative">
              <label class="block font-medium mb-1">Luas Tanah</label>
              <input
                name="luas_tanah"
                type="text"
                placeholder="Contoh: 150"
                inputmode="numeric"
                pattern="\d*"
                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                class="border p-3 rounded w-full pr-14"
              />
              <span class="absolute right-4 top-11 text-gray-500 text-sm"
                >m²</span
              >
            </div>

            <select name="lokasi" class="border p-3 rounded w-full col-span-2">
              <option disabled selected>Pilih Lokasi</option>
              <option>Jakarta</option>
              <option>Bandung</option>
              <option>Bekasi</option>
              <option>Denpasar</option>
              <option>Yogyakarta</option>
              <option>Surabaya</option>
              <option>Bogor</option>
              <option>Tangerang</option>
              <option>Padang</option>
              <option>Samarinda</option>
            </select>
          </div>
        </section>

        <!-- Upload Foto -->
        <section class="mb-10">
          <h2 class="text-xl font-semibold mb-4">Unggah Foto</h2>
          <div class="flex flex-wrap gap-4 items-start" id="foto-container">
            <div
              class="relative w-32 h-32 border border-gray-300 rounded-xl overflow-hidden flex justify-center items-center bg-white"
            >
              <input
               name="foto[]"
                type="file"
                accept="image/*"
                onchange="previewImage(this)"
                class="absolute w-full h-full opacity-0 cursor-pointer z-20"
              />
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-10 h-10 text-gray-400 z-10 pointer-events-none"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
                <circle cx="8.5" cy="8.5" r="1.5" />
                <path d="M21 15l-5-5L5 21" />
              </svg>
            </div>
            <div
              id="tombol-tambah"
              class="relative w-32 h-32 border border-black border-dashed rounded-xl flex justify-center items-center bg-white cursor-pointer hover:bg-gray-100"
              onclick="addPhoto()"
            >
              <span class="text-3xl font-bold text-black">+</span>
            </div>
          </div>
          <p class="text-sm text-gray-500 italic mt-2">Wajib Diisi*</p>
        </section>

        <!-- Judul & Deskripsi -->
        <section class="mb-10">
          <h2 class="text-xl font-semibold mb-4">Judul dan Deskripsi</h2>
          <input
            name="judul"
            type="text"
            placeholder="Masukan Judul"
            class="border p-3 rounded w-full mb-4"
          />
          <textarea
            name="deskripsi"
            rows="5"
            placeholder="Deskripsi"
            class="border p-3 rounded w-full resize-none"
          ></textarea>
        </section>

        <!-- Harga Bangunan -->
        <section class="mb-10">
          <h2 class="text-xl font-semibold mb-4">Harga Bangunan</h2>
          <div class="relative">
            <span
              class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"
              >RP</span
            >
            <input
              name="harga"
              id="harga"
              type="text"
              oninput="formatRupiah(this)"
              placeholder="0"
              class="border p-3 pl-10 rounded w-full"
            />
          </div>
        </section>

        <!-- Tombol Submit -->
        <div class="text-center mt-12">
          <button type="submit" class="bg-black text-white px-10 py-3 rounded text-lg font-medium border-4 border-black hover:bg-gray-800">
            Submit   
          </button>
        </div>
      </form>
    </div>

    <script>
      function tampilkanNamaFile(input) {
        const namaFile = input.files[0]?.name || "";
        document.getElementById("nama-sertifikat").textContent = namaFile;
      }

      function previewImage(input) {
        const file = input.files[0];
        if (!file) return;

        const reader = new FileReader();
        reader.onload = function (e) {
          const container = input.parentElement;

          // Hapus ikon kamera jika ada
          const icon = container.querySelector("svg");
          if (icon) icon.remove();

          // Hapus gambar sebelumnya jika ada
          const existingImg = container.querySelector("img");
          if (existingImg) existingImg.remove();

          // Tambahkan preview gambar
          const img = document.createElement("img");
          img.src = e.target.result;
          img.className = "w-full h-full object-cover absolute top-0 left-0 z-0";

          container.appendChild(img);
        };
        reader.readAsDataURL(file);
      }


     function addPhoto() {
        const container = document.getElementById("foto-container");
        const existingPhotos = container.querySelectorAll('input[name="foto[]"]');

        if (existingPhotos.length >= 5) {
          alert("Maksimal 5 foto.");
          return;
        }

        const newSlot = document.createElement("div");
        newSlot.className =
          "relative w-32 h-32 border border-gray-300 rounded-xl overflow-hidden flex justify-center items-center bg-white";
        newSlot.innerHTML = `
          <input name="foto[]" type="file" accept="image/*" onchange="previewImage(this)" class="absolute w-full h-full opacity-0 cursor-pointer z-20"/>
          <svg xmlns="http://www.w3.org/2000/svg"
            class="w-10 h-10 text-gray-400 z-10 pointer-events-none"
            viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
            <circle cx="8.5" cy="8.5" r="1.5" />
            <path d="M21 15l-5-5L5 21" />
          </svg>
        `;
        const tombolTambah = document.getElementById("tombol-tambah");
        container.insertBefore(newSlot, tombolTambah);
      }


      function formatRupiah(input) {
        let angka = input.value.replace(/[^,\d]/g, "").toString();
        let split = angka.split(",");
        let sisa = split[0].length % 3;
        let rupiah = split[0].substr(0, sisa);
        let ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
          let separator = sisa ? "." : "";
          rupiah += separator + ribuan.join(".");
        }

        rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
        input.value = rupiah;
      }
    </script>
  </body>
</html>