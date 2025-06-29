<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tes Modal Viewer</title>
    <style>
        body { background: #0a192f; color: #fff; font-family: sans-serif; text-align: center; padding-top: 100px; }
        a { color: #64ffda; font-size: 24px; cursor: pointer; }

        /* Style dasar untuk modal, disalin dari kode sebelumnya */
        .modal-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(10, 25, 47, 0.9); backdrop-filter: blur(8px); z-index: 1000; display: none; align-items: center; justify-content: center; }
        .modal-content { position: relative; max-width: 80%; max-height: 90vh; }
        #modal-image { max-width: 100%; max-height: 90vh; display: block; border-radius: 8px; }
        .modal-close { position: absolute; top: -10px; right: 10px; color: #fff; font-size: 40px; font-weight: bold; cursor: pointer; }
    </style>
</head>
<body>

    <h1>Tes Tampilan Poster</h1>
    <a id="link-poster-tes">Tampilkan Poster</a>

    <div id="modal-viewer" class="modal-overlay">
        <span class="modal-close" id="modal-close-button">&times;</span>
        <div class="modal-content">
            <img src="" id="modal-image" alt="Tampilan Poster">
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- Elemen-elemen yang dibutuhkan ---
            const linkPoster = document.getElementById('link-poster-tes');
            const modalViewer = document.getElementById('modal-viewer');
            const modalImage = document.getElementById('modal-image');
            const closeButton = document.getElementById('modal-close-button');

            // --- Alamat gambar poster lokal Anda ---
            // Pastikan nama folder dan nama file ini SAMA PERSIS dengan yang ada di komputer Anda
            const imageUrl = 'poster-images/poster_antar.jpg'; 

            // --- Fungsi untuk membuka modal ---
            linkPoster.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah link berpindah halaman
                console.log('Link diklik! Mencoba memuat gambar:', imageUrl); // Pesan debug
                modalImage.src = imageUrl;
                modalViewer.style.display = 'flex';
            });

            // --- Fungsi untuk menutup modal ---
            function closeModal() {
                modalViewer.style.display = 'none';
                modalImage.src = ''; 
            }

            closeButton.addEventListener('click', closeModal);
            modalViewer.addEventListener('click', function(event) {
                if (event.target === modalViewer) {
                    closeModal();
                }
            });
        });
    </script>

</body>
</html>