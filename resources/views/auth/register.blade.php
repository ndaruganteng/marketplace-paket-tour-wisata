<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thelema - Register</title>
    <link
            rel="icon"
            type="image/png"
            sizes="56x56"
            href="images/icon/iconbg.png"
    />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
  </head>
  <body>
      <div class="min-h-screen bg-black flex justify-center items-center">
        <div class="absolute w-60 h-60 rounded-xl bg-white -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
        </div>
        <div class="absolute w-48 h-48 rounded-xl bg-white -bottom-6 -right-10 transform rotate-12 hidden md:block">
        </div>
        <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
          <div>
            <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Create An Account</h1>
            <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide cursor-pointer">Create an account to enjoy all services!</p>
          </div>
            <div class="space-y-4">
              <input type="text" name="name" placeholder="Nama" :value="old('name')" required="" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none focus:border-primary focus:ring-2 focus:ring-primary"/>
              <input type="email" name="email" placeholder="Email" :value="old('email')"  required="" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none focus:border-primary focus:ring-2 focus:ring-primary"/>
              <input type="text" name="phone" placeholder="Phone" :value="old('phone')" required="" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none focus:border-primary focus:ring-2 focus:ring-primary"/>
              <input type="text" name="address" placeholder="Address" :value="old('address')" required="" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none focus:border-primary focus:ring-2 focus:ring-primary"/>
              <!-- <select id="countries" name="role" required="" class="bg-white border text-sm rounded-lg outline-none focus:ring-primary focus:border-primary block w-full py-3 px-4">
                <option>Pembeli</option>
                <option>Perusahaan</option>
              </select>   -->
              <!-- <input type="text" name="role" required=""  placeholder="Role" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none focus:border-primary focus:ring-2 focus:ring-primary" /> -->
              <input type="password" name="password" placeholder="password" required="" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none focus:border-primary focus:ring-2 focus:ring-primary" />
            </div>
            <div class="text-center mt-6">
              <button type="submit" value="Simpan Data" class="py-3 w-64 text-xl text-white bg-black rounded-2xl">Simpan</button>
            </div>
          </div>
          <div class="w-40 h-40 absolute bg-white rounded-full top-0 right-12 hidden md:block"> </div>
            <div
              class="w-20 h-40 absolute bg-white rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
