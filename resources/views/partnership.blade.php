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
                PARTNERSHIP
            </h2>

            <div class="flex justify-center mt-12 md:mt-16">
                <a href="https://wa.me/6281927833334" target="_blank" class="bg-[#2A5599] text-white font-bold text-lg md:text-2xl px-6 md:px-8 py-2 md:py-3 rounded-lg hover:bg-[#133D87] transition">
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
    </script>

</body>
</html>