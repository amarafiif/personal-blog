<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Beranda</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
    body {
        font-family: 'Inter', sans-serif;
    }
  </style>
<body class="bg-slate-900">
    <header>

    </header>
    <main>
        <section id="hero-section" class="min-h-screen mx-auto bg-slate-950 px-2 py-24 sm:py-32 lg:px-2">
            <div class="text-center mt-10">
                <hr class="border rounded-full border-4 border-indigo-500 w-1/5 mx-auto">
                <h1 class="mt-4 text-3xl font-black tracking-tight text-gray-100 sm:text-5xl">Lebih baik gagal saat mencoba <br> dari pada tidak mencoba sama sekali</h1>
                <p class="mt-6 lg:px-36 px-4 text-base leading-7 text-gray-400">Tidak apa apa jika kau gagal dalam melakukan sesuatu hal, perlu diketahui bahwa tidak semua rencana bisa berjalan sesuai dengan yang kita rencanakan.</p>
                <div class="mt-10 flex items-center justify-center gap-x-2">
                  <a href="#posts-section" class="rounded-full bg-indigo-600 px-8 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Selengkapnya</a>
                </div>
              </div>
        </section>

        <hr class="border border-8 border-indigo-500 w-full mx-auto">
        <section id="posts-section" class="mx-auto lg:px-6 bg-slate-900 py-8 sm:py-32 px-2">
          <hr class="border rounded-full border-4 border-indigo-500 w-1/5 mx-auto">
            <h2 class="font-black text-4xl text-slate-200 text-center mt-4 mb-14">Tulisanku</h2>
            <div class="lg:px-20 px-5 container mx-auto space-y-2">

              @foreach ($posts as $post)
              <div class="bg-slate-950 lg:px-8 px-5 py-10 flex w-full rounded-md border border-2 border-slate-900">
                <h2 class="font-semibold text-xl text-gray-200 my-auto">{{ $post->title }}</h2>
                <a href="{{ route('posts.show', $post->id )}}" class="ms-auto hover:bg-slate-950 text-sm bg-indigo-500 px-5 py-3 text-slate-200 rounded-md outline outline-indigo-500 outline-1 outline-offset-2">
                   <i class="fa-solid fa-circle-arrow-right"></i>
                </a>
              </div>
              @endforeach

            </div>
        </section>
      </main>

      
      <footer>
        <div class="footer text-center bg-indigo-600 text-slate-200 py-10 text-sm">
            <span>Keluh-kesah 2023 by <a href="https://instagram.com/amarafiif">Muhammad Ammar Afif ❤</a></span>
        </div>
      </footer>
</body>
</html>