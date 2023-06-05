<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
    body {
        font-family: 'Inter', sans-serif;
    }
  </style>
<body class="bg-slate-200">
    <header>

    </header>
    <main>
        <section id="hero-section" class=" mx-auto bg-slate-100 px-2 py-10 sm:py-32 lg:px-2">
            <div class="text-center">
                <hr class="border rounded-full border-4 border-indigo-500 w-1/5 mx-auto">
                <h1 class="mt-4 text-3xl font-black tracking-tight text-gray-900 sm:text-5xl">Create post</h1>
                <div class="mt-10 flex items-center justify-center gap-x-2">
                    <div id="summernote" class="bg-white py-10 lg:px-20">
                      <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Halo, adakah keluh kesah hari ini ? mari tuangkan disini</p>
                  
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                          <div class="sm:col-span-6">
                            <label for="first-name" class=" text-left text-sm font-medium leading-6 text-gray-900">Title</label>
                            <div class="mt-2">
                              <input type="text" name="title" id="first-name" autocomplete="given-name" class="w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                          </div>
                          <div class="sm:col-span-6">
                            <label for="first-name" class=" text-left text-sm font-medium leading-6 text-gray-900">Content</label>
                            <div class="mt-2">
                              <textarea type="text" name="content" class="w-full min-h-lg rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                              </textarea>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
        </section>
      </main>
      <footer>

      </footer>

      <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
      </script>
      <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</body>
</html>