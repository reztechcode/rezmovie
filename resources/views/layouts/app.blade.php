<!doctype html>
<html data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CariFilm - Temukan Film Favoritmu Sekarang!</title>
    <meta name="description" content="CariFilm adalah platform terbaik untuk mencari film favorit Anda. Temukan ulasan, rekomendasi, dan film terbaru hanya di sini.">
    <meta name="keywords" content="cari film, rekomendasi film, ulasan film, film terbaru, film favorit">
    <meta name="author" content="Tim CariFilm">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://carifilm.example.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css" rel="stylesheet" />
</head>

<body>
    @include('components.navbar')
    <main>
        @yield('content')
    </main>
    @include('components.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>
    <script>
        $(document).ready(function() {
            // Tambahkan atribut data-lightbox ke semua gambar dalam konten blog
            $('#post-content img').each(function() {
                $(this).attr('alt', $(this).attr('alt') || 'Image'); // Pastikan atribut alt ada
            });
        });
        </script>
        @stack('js')
</body>

</html>
