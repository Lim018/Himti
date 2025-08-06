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

    @include('components.navbar')

    <div class="min-h-screen">
        <div class="w-full h-64 md:h-96 bg-[#133D87] bg-[url('https://c.animaapp.com/mdzrj9nrRNYW42/img/mask-group.png')] bg-cover bg-blend-overlay flex items-center justify-center">
            <h1 class="text-white text-3xl md:text-7xl font-bold text-center px-4 md:px-0 mt-5">
                STANDAR OPERASIONAL PROSEDUR
            </h1>
        </div>

        <div class="bg-white pt-12 md:pt-16 pb-16">
            <h2 class="text-center text-[#2A5599] text-3xl md:text-5xl font-extrabold px-4">
                MEDIA DAN INFORMASI
            </h2>

            <div class="mt-8 md:mt-12 w-11/12 md:w-3/4 lg:w-2/3 mx-auto">
                <div id="pdf-container" class="border shadow-lg rounded-lg overflow-hidden bg-gray-100 flex justify-center items-center min-h-[600px]">
                    <canvas id="pdf-render"></canvas>
                </div>

                <div id="pdf-controls" class="mt-6 flex items-center justify-center space-x-4">
                    <button id="prev" class="bg-[#2A5599] text-white font-bold px-5 py-2 rounded-lg hover:bg-[#133D87] transition disabled:opacity-50 disabled:cursor-not-allowed">
                        Sebelumnya
                    </button>
                    <p class="font-semibold text-lg">
                        <span id="page_num"></span> / <span id="page_count"></span>
                    </p>
                    <button id="next" class="bg-[#2A5599] text-white font-bold px-5 py-2 rounded-lg hover:bg-[#133D87] transition disabled:opacity-50 disabled:cursor-not-allowed">
                        Berikutnya
                    </button>
                </div>
            </div>

            <div class="flex justify-center mt-12 md:mt-16">
                <a href="https://wa.me/6281231830086" target="_blank" class="bg-[#2A5599] text-white font-bold text-lg md:text-2xl px-6 md:px-8 py-2 md:py-3 rounded-lg hover:bg-[#133D87] transition">
                    Contact us
                </a>
            </div>
        </div>
    </div>
    
    @include('components.footer')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
      AOS.init();

      if (typeof pdfjsLib !== 'undefined') {
        
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';

        const url = "{{ asset('documents/SOP-Medinfo.pdf') }}";
        let pdfDoc = null,
            pageNum = 1,
            pageIsRendering = false,
            pageNumIsPending = null;

        const canvas = document.getElementById('pdf-render'),
              ctx = canvas.getContext('2d'),
              prevButton = document.getElementById('prev'),
              nextButton = document.getElementById('next'),
              pdfControls = document.getElementById('pdf-controls'),
              pdfContainer = document.getElementById('pdf-container');

        pdfControls.style.display = 'none';

        const renderPage = num => {
            pageIsRendering = true;
            pdfDoc.getPage(num).then(page => {
                const unscaledViewport = page.getViewport({ scale: 1 });
                const scale = pdfContainer.clientWidth / unscaledViewport.width;
                const viewport = page.getViewport({ scale: scale });

                canvas.height = viewport.height;
                canvas.width = viewport.width;

                page.render({ canvasContext: ctx, viewport: viewport }).promise.then(() => {
                    pageIsRendering = false;
                    if (pageNumIsPending !== null) {
                        renderPage(pageNumIsPending);
                        pageNumIsPending = null;
                    }
                });
                document.getElementById('page_num').textContent = num;
            });
        };

        const queueRenderPage = num => {
            if (pageIsRendering) {
                pageNumIsPending = num;
            } else {
                renderPage(num);
            }
        };

        const updateNavButtons = () => {
            if (!pdfDoc) return;
            prevButton.disabled = (pageNum <= 1);
            nextButton.disabled = (pageNum >= pdfDoc.numPages);
        };
        const showPrevPage = () => { if (pageNum > 1) { pageNum--; queueRenderPage(pageNum); updateNavButtons(); } };
        const showNextPage = () => { if (pageNum < pdfDoc.numPages) { pageNum++; queueRenderPage(pageNum); updateNavButtons(); } };
        
        prevButton.addEventListener('click', showPrevPage);
        nextButton.addEventListener('click', showNextPage);
        
        window.addEventListener('resize', () => {
            if (pdfDoc) {
                queueRenderPage(pageNum);
            }
        });

        pdfjsLib.getDocument(url).promise.then(pdfDoc_ => {
            pdfDoc = pdfDoc_;
            document.getElementById('page_count').textContent = pdfDoc.numPages;
            renderPage(pageNum);
            updateNavButtons();
            pdfControls.style.display = 'flex';
        }).catch(err => {
            console.error('GAGAL MEMUAT PDF:', err);
            const pdfContainer = document.getElementById('pdf-container');
            pdfContainer.innerHTML = `<div class="p-8 text-center text-red-500 bg-red-50 rounded-lg">
                                            <h3 class="font-bold">Dokumen PDF Gagal Dimuat</h3>
                                            <p class="text-sm mt-2">Pastikan nama file dan path sudah benar.</p>
                                            <p class="text-xs mt-1">Path: ${url}</p>
                                          </div>`;
        });

      } else {
        console.error("GAGAL MEMUAT LIBRARY PDF.js. Periksa koneksi internet.");
      }
    </script>

</body>
</html>