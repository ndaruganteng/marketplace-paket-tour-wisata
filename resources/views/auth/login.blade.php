<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thelema - Login</title>
    <link
            rel="icon"
            type="image/png"
            sizes="56x56"
            href="images/icon/iconbg.png"
    />
    <script src="https://cdn.tailwindcss.com"></script>

  </head>
  <body>

      <div class="h-screen flex mx-40">
          <div class="flex w-1/2 bg-white justify-around items-center ">
            <div>
              <img src="images/home/background.png" alt="bglogin" />
            </div>
          </div>
          <div class="flex w-1/2 justify-center items-center bg-white  ">
            <form class="bg-white">
              <h1 class="text-gray-800 font-bold text-center text-3xl mb-6">Welcome.</h1>
              <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                </svg>
                <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Username" />
              </div>
              <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                </svg>
                <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Password" />
              </div>
              <button type="submit" class="block w-full bg-black mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
              <span class="mt-12 flex text-gray-400">Dont have an account ? <a href="{{ route('register.index') }}" class="hover:text-yellow-400">Sign up</a></span>
              
            </form>
          </div>
      </div>

  </body>
</html>
