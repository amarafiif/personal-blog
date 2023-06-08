<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>I'm Sorry</title>
  <link rel="icon" type="image/png" sizes="32x32" href="{{url('assets/favicon/android-chrome-512x512.png')}}">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
    body {
        font-family: 'Inter', sans-serif;
    }
  </style>
<body class="bg-gradient-to-r from-teal-300 to-cyan-400">
    <main class="grid w-4/5 mx-auto place-items-center border border-gray-300 border-3 backdrop-blur-sm bg-white/70 px-6 py-24 sm:py-32 lg:px-2">
        <div class="text-center min-h-screen">
          <p class="font-semibold text-gray-600 text-indigo-600">I'm sorry</p>
          <h1 class="mt-4 text-3xl font-black tracking-tight text-gray-900 sm:text-5xl">The page is currently under <br> maintenance</h1>
          <p class="mt-6 text-base leading-7 text-gray-600">If you have questions, click the button below.</p>
          <div class="mt-10 flex items-center justify-center gap-x-2">
            <a href="#contact" class="rounded-full bg-indigo-600 px-8 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
          </div>
        </div>
        <hr id="contact" class="border border-indigo-600 border-4 rounded-full w-1/6">
        <h1 class="py-5 text-3xl text-slate-800 font-black">Contact Form</h1>
        <form action="https://formsubmit.co/amarafif230@gmail.com" method="POST" class="w-full max-w-lg py-14">
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                Name
              </label>
              <input name="name" class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-indigo-500 focus:bg-white" type="text" placeholder="Muhammad Ammar Afif" required>
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                E-mail
              </label>
              <input name="email" class="appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-indigo-500 focus:bg-white focus:border-gray-500" type="email" required>
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                Message
              </label>
              <textarea class=" no-resize appearance-none block w-full bg-gray-50 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-indigo-500 focus:bg-white focus:border-gray-500 h-48 resize-none" id="message"></textarea>
            </div>
          </div>
          <div class="mx-auto">
            <div class="float-right">
              <button class="shadow bg-indigo-600 hover:bg-indigo-800 focus:outline-gray-200 focus:ring-offsetindigo-500 text-white font-bold py-2 px-8 rounded" type="submit">
                Send message
              </button>
            </div>
          </div>
        </form>
      </main>
</body>
</html>