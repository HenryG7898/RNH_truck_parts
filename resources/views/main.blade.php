@extends('layout.admin')

@section('content')
    <div class="w-full bg-center bg-cover bg-fixed h-screen" style="background-image: url(https://lh3.googleusercontent.com/dQ2znxHxelwucHWTz2ekYYknvdqoTzm5QPkfLLMCw3brUDTYcBWDGfLDwyqmQctixlcy51jKuutonl8P9nhEsJ8GQyG96Bu3DkretIHSJiSP9WC4krSvtlKM0J_Ki6QaqxR_EiJyjZPpgybIyCm0q8QnocmYG8T1PLN53wQqvMZxDuCcI2ps6eJM6qYdI2cBznOoTZfoOKsRxW8-TAcG4segfQaodMLehEN3GcUKukoDh7pTc4SFq6Xh2UG9udHKmDuDTSxcdM_p95rZl0JXefaMRUBi-PeV350Rrf0hDzrjr7BlNolZn7paZcoxzCxd4DLpztD2aIsyaD33kDqa-fc5O4yRS0j6U2cYiwD0CMIUUKJeJ0wKvybpSwR57cP4TVL7EAeZiDVTVgca2jMcMVJwnyrbE83-8QM8f6YJOJ6ZYFnim3LLTX0b9YNVCDLIb7GtNgTDlJuVb6y-mrRIak1sJhsnZ64QgCNzmANLVLFYGbP7bb3pAvZfgbo9i_yMNfXFGjiD88i1r8CRQYGtYXftIZkgw3dluIXgMR0BrEg630tVJgjHAu9NsnzIoSXx_61m4jyvKvSrDM3ysd4EYixGYup7jDHdz67AQBkkKO0rbLhhY076u5f5PBewbDgwE1pP-1nsmfx0oOX8grSUxn-aR6p1Ha1STxswrGArf0L2bR8lC0qQSgEUUr-1ilCbaZAKtMcTLsnb0eXhuqrNF4dSyg=w924-h638-no?authuser=0);">
        <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                <h1 class="text-1xl font-semibold mb-4 text-white uppercase lg:text-3xl">RNH Trucks Parts & Accessories  <span class="text-red-600 underline">Limited</span></h1>
                <a href="{{ url('login') }}" class="w-full px-4 py-2 mt-10 text-sm font-medium text-white uppercase transition-colors duration-200 transform bg-red-700 rounded-md lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Get Started</a>
            </div>
        </div>
    </div>
    <section class="w-full text-gray-900 py-28 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 flex items-center justify-center">
            <div class="lg:w-3/6 lg:pr-0 pr-0">
                <h1 class="font-medium text-6xl text-white">RNH Trucks Parts & Accessories </h1>
                            <p class="leading-relaxed mt-4 text-white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="lg:w-3/6 xl:w-2/5 md:w-full bg-gray-50 p-8 flex flex-col lg:ml-auto w-full mt-10 lg:mt-0 rounded-md">
                <img src="{{ asset('storage/WhatsApp Image 2021-11-24 at 4.57.49 PM.jpeg') }}" alt="">
            </div>
        </div>
        <div class="my-20"></div>
        <div class="max-w-7xl mx-auto  px-4 sm:px-6 lg:px-4 flex items-center justify-center">
            <div class="lg:w-3/6 xl:w-2/5 md:w-full bg-gray-50 p-8 flex flex-col lg:ml-auto w-full mt-10 lg:mt-0 rounded-md">
                <img src="{{ asset('storage/WhatsApp Image 2021-11-24 at 4.57.49 PM.jpeg') }}" alt="">
            </div>
            <div class="lg:w-3/6 lg:pr-0 pr-0 ">
                <h1 class="font-medium mx-10 text-6xl text-white">RNH Trucks Parts & Accessories </h1>
                            <p class="leading-relaxed mt-4 text-white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </section>
@endsection


