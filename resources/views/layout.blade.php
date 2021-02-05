<!DOCTYPE html>
<html>
   <head>
       <title></title>
        
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
   </head>
   <body >
   <div class="flex flex-col h-screen justify-between">
   <header>
    <nav class="bg-white shadow">
        <div class="container mx-auto px-6 py-3 ">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex justify-between items-center">
                    <div class="text-xl font-semibold text-gray-700">
                        <a href="/admin/login"> <i class="fas fa-user-circle absolute left-0 top-3 h-16 w-16"></i> </a>
                    </div>

               
                    <div class="flex md:hidden">
                        <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                
                <div class="hidden -mx-4 md:flex md:items-center">
                    <a href="/" class="block mx-4 mt-2 md:mt-0 text-sm text-gray-700 capitalize hover:text-blue-600">Home</a>
                    <a href="/works" class="block mx-4 mt-2 md:mt-0 text-sm text-gray-700 capitalize hover:text-blue-600">Works</a>
                    <a href="/about-me" class="block mx-4 mt-2 md:mt-0 text-sm text-gray-700 capitalize hover:text-blue-600">About</a>
                    <a href="/contact" class="block mx-4 mt-2 md:mt-0 text-sm text-gray-700 capitalize hover:text-blue-600">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="w-full bg-cover bg-center" style="height:32rem; background-image: url(https://images.squarespace-cdn.com/content/v1/56e33409d210b8a4c7e973c9/1470314127778-1QZNMRA7PNJB6B9P9NBW/ke17ZwdGBToddI8pDm48kA_SSaoz4elkj-HsZd8gX3Z7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UWPwZyNcweDIvdeL5kotwkIXjs9g0WibSO_cU-Ijy4Pwg6poS-6WGGnXqDacZer4yQ/image-asset.jpeg?format=1500w);">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                <h1 class="text-white text-2xl font-semibold uppercase md:text-3xl">Portfolio <span class="underline text-pink-400">Chris</span></h1>
                <button class="mt-4 px-4 py-2 bg-pink-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500" onclick="runme()">Go?</button>
            </div>
        </div>
    </div>
</header>

       @yield('content')

    
       <footer class="bg-gray-800 pt-10 sm:mt-10 pt-10 ">
    <div class="max-w-5xl m-auto text-gray-800 flex flex-wrap justify-left">
        <!-- Col-1 -->
        <div class="p-5 w-1/2 sm:w-6/12 md:w-4/12">
            <!-- Col Title -->
            <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                Contact
            </div>

            <!-- Links -->
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
            Grafisch Lyceum Utrecht
            Koningin Wilhelminalaan 7
            3527 LA Utrecht
            </a>
            <a href="#" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                0637341323
            </a>
           
          
        </div>

       

        <!-- Col-3 -->
        <div class="p-5 w-1/2 sm:w-6/12 md:w-4/12">
            <!-- Col Title -->
            <div class="text-xs uppercase text-gray-400 font-medium mb-6">
                Socials
            </div>

            <!-- Links -->
            <a href="https://www.instagram.com/chriss.sc_" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Instagram
            </a>
            <a href="https://discordapp.com/users/491564934833111050" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Discord
            </a>
            <a href="https://twitter.com/GeenSaus" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                Twitter
            </a>
            <a href="mailto: 531081@student.glu.nl" class="my-3 block text-gray-300 hover:text-gray-100 text-sm font-medium duration-700">
                E-mail
            </a>
        </div>
    </div>

    <!-- Copyright Bar -->
    <div class="pt-2">
        <div class="flex pb-5 px-3 m-auto pt-5 
            border-t border-gray-500 text-gray-400 text-sm 
            flex-col md:flex-row max-w-6xl">
            <div class="mt-2">
                © Copyright C. All Rights Reserved.
        </div>
    </div>
</div>
</footer>
   </body>
</html>


<script>
    function runme() {
    var arr = ["/", "/contact", "/works"];
    var value = arr[Math.floor(Math.random() * arr.length)];
    //alert("Would navigate to : " + value);
     window.location = value;     // remove the comment at the beginning to actually navigate
}
</script>
