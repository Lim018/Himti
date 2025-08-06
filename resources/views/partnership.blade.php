<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <title>SOP Media dan Informasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-['Inter'] antialiased bg-white">

    {{-- Asumsi Anda memiliki file navbar, jika tidak ada, hapus baris ini --}}
    @include('components.navbar')

    <div class="min-h-screen">
        <div class="w-full h-64 md:h-96 bg-[#133D87] bg-[url('https://c.animaapp.com/mdzrj9nrRNYW42/img/mask-group.png')] bg-cover bg-blend-overlay flex items-center justify-center -mt-16 md:mt-0">
            <h1 class="text-white text-4xl md:text-7xl font-bold text-center px-4 md:px-0">
                STANDAR OPERASIONAL PROSEDUR
            </h1>
        </div>

        <div class="bg-white pt-12 md:pt-16 pb-16">
            <h2 class="text-center text-[#2A5599] text-3xl md:text-5xl font-extrabold px-4">
                PARTNERSHIP
            </h2>

            <div class="flex justify-center mt-12 md:mt-16">
                <a href="#" class="bg-[#2A5599] text-white font-bold text-lg md:text-2xl px-6 md:px-8 py-2 md:py-3 rounded-lg hover:bg-[#133D87] transition">
                    Contact us
                </a>
            </div>
        </div>
    </div>
    
    {{-- Asumsi Anda memiliki file footer, jika tidak ada, hapus baris ini --}}
    @include('components.footer') 

    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
      // Inisialisasi Animate on Scroll (AOS)
      AOS.init();

      // Pastikan objek pdfjsLib sudah ada sebelum digunakan
      if (typeof pdfjsLib !== 'undefined') {
        
        // Atur path untuk worker PDF.js
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

        // URL ke file PDF Anda dari direktori public
        const url = "{{ asset('documents/SOP-Medinfo.pdf') }}";

        // Variabel untuk menyimpan status PDF
        let pdfDoc = null,
            pageNum = 1,
            pageIsRendering = false,
            pageNumIsPending = null;

        // Skala render, bisa disesuaikan untuk kualitas gambar
        const scale = 1.5;

        // Ambil elemen dari HTML
        const canvas = document.getElementById('pdf-render'),
              ctx = canvas.getContext('2d'),
              prevButton = document.getElementById('prev'),
              nextButton = document.getElementById('next');

        // Fungsi utama untuk merender satu halaman PDF
        const renderPage = num => {
            pageIsRendering = true;
            pdfDoc.getPage(num).then(page => {
                const viewport = page.getViewport({ scale });
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                const renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };

                page.render(renderContext).promise.then(() => {
                    pageIsRendering = false;
                    // Jika ada halaman lain yang antri, render sekarang
                    if (pageNumIsPending !== null) {
                        renderPage(pageNumIsPending);
                        pageNumIsPending = null;
                    }
                });

                // Update teks nomor halaman
                document.getElementById('page_num').textContent = num;
            });
        };

        // Fungsi untuk mengantrikan render halaman (jika user klik tombol terlalu cepat)
        const queueRenderPage = num => {
            if (pageIsRendering) {
                pageNumIsPending = num;
            } else {
                renderPage(num);
            }
        };

        // Fungsi untuk memperbarui status tombol (disable/enable)
        const updateNavButtons = () => {
            if (!pdfDoc) return;
            prevButton.disabled = (pageNum <= 1);
            nextButton.disabled = (pageNum >= pdfDoc.numPages);
        };

        // Fungsi untuk navigasi ke halaman sebelumnya
        const showPrevPage = () => {
            if (pageNum <= 1) return;
            pageNum--;
            queueRenderPage(pageNum);
            updateNavButtons();
        };

        // Fungsi untuk navigasi ke halaman berikutnya
        const showNextPage = () => {
            if (pageNum >= pdfDoc.numPages) return;
            pageNum++;
            queueRenderPage(pageNum);
            updateNavButtons();
        };
        
        // Tambahkan event listener untuk klik tombol
        prevButton.addEventListener('click', showPrevPage);
        nextButton.addEventListener('click', showNextPage);

        // Mulai proses: muat dokumen PDF dari URL
        pdfjsLib.getDocument(url).promise.then(pdfDoc_ => {
            pdfDoc = pdfDoc_;
            document.getElementById('page_count').textContent = pdfDoc.numPages;
            renderPage(pageNum);
            updateNavButtons();
        }).catch(err => {
            // Tangani error jika PDF gagal dimuat
            console.error('Error loading PDF: ', err);
            const pdfContainer = document.getElementById('pdf-container');
            pdfContainer.innerHTML = `<div class="p-8 text-center text-red-500 bg-red-50">
                                        <h3 class="font-bold">Gagal memuat dokumen PDF</h3>
                                        <p class="text-sm mt-2">Pastikan URL file sudah benar dan file tersedia di server.</p>
                                      </div>`;
            // Sembunyikan navigasi jika error
            document.querySelector('.mt-6.flex').style.display = 'none';
        });

      } else {
        console.error("Kesalahan Kritis: Library PDF.js tidak berhasil dimuat. Periksa urutan tag script.");
      }
    </script>

</body>
</html>