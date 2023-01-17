<footer class="p-4 bg-white rounded-lg shadow md:px-6 lg:px-24  md:py-8 dark:bg-gray-900">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="{{ route('home.index') }}" class="flex items-center mb-4 sm:mb-0">
            <img src="images/icon/iconbg.png" class="h-8 mr-3" alt=" Logo" />
            <span class="self-center text-gray-900 text-2xl font-bold whitespace-nowrap dark:text-white">Thelema</span>
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
            <li>
                <a href="{{ route('home.index') }}" class="mr-4 hover:underline md:mr-6 ">Home</a>
            </li>
            <li>
                <a href="{{ route('tour.index') }}" class="mr-4 hover:underline md:mr-6">Tour</a>
            </li>
            <li>
                <a href="{{ route('blog.index') }}" class="mr-4 hover:underline md:mr-6 ">Blog</a>
            </li>
            <li>
                <a href="{{ route('contact.index') }}"  class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 3 <a href="#" class="hover:underline">Thelema</a>. All Rights Reserved.
    </span>
</footer>