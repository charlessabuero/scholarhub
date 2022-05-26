<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/app.css') }}">
</head>

<body class="bg-[#F8FBFE]">
    {{-- Navbar --}}
    <div class="container-2xl  shadow-md flex justify-between px-10">
        <div class="flex justify-start items-center">
            <a href="#" class="py-5"><i class="fa-solid fa-bars text-xl"></i></a>
            <img src="{{ asset('images/navbar-logo.png') }}" class="p-4 h-20" alt="" srcset="">
        </div>
        <div class="flex justify-end mr-10 items-center gap-5">
            <a href="#" class="py-5"><i class="fa-solid fa-bell text-xl"></i></a>
            <a href="#" class="py-5"><i class="fa-solid fa-envelope text-xl"></i></a>
            <div class="flex justify-center items-center rounded-md gap-3 px-3 py-3 bg-[#F5F5F7]">
                <img src="{{ asset('images/photo-logo.png') }}" alt="" srcset="" class="h-8">
                <div class=" text-base font-medium">Charles</div>
                <a href="#"><i class="fa-solid fa-chevron-down text-xs"></i></a>
            </div>
        </div>
    </div>

    {{-- Body --}}
    <div class="container-2xl flex">
        <div class="flex flex-col w-[25%] bg-white gap-y-6 mt-0.5 pt-5">
            <div class="px-8 bg-[#F2F8FF] mx-5 text-xl py-5 rounded-md text-[#2F3367] font-medium">My Dashboard</div>
            <div class="px-8 bg-white mx-5 text-xl py-5 rounded-md text-[#2F3367] font-medium">Announcements</div>
        </div>
        <div class="bg-[#F2F8FF] w-[75%] flex flex-col mt-0.5 px-20 gap-y-5 mb-20">
            <span class="text-base font-medium self-end py-4">Today is {{ now()->format('l | M, d, Y') }}</span>
            <div class="flex flex-col py-4">
                <span class=" text-4xl font-medium">Welcome {{ $name }}!</span>
                <span class=" pl-2 text-lg">Here's an overview of your profile</span>
            </div>
            <div class="flex justify-center mb-5">
                <div class="flex flex-col pl-5 pr-52 gap-y-12 py-5 bg-white rounded-md">
                    <div class="flex flex-col">
                        <span class="text-lg font-bold pb-1 text-[#2F3367]">Scholarship Status</span>
                        <span class="text-[#2F3367] font-medium text-lg"><i
                                class="px-3 fa-solid fa-circle text-[#00E117] text-lg"></i>Active</span>
                    </div>
                    <span class="text-[#2F3367] underline text-base">More info
                        <i class="fa-solid fa-arrow-right px-3 text-[#2F3367] text-sm"></i>
                    </span>
                </div>
                <div class="flex flex-col gap-y-7">
                    <button
                        class=" rounded-lg text-[#2F3367] bg-opacity-75 bg-[#FFED8C] ml-7 px-7 py-5 text-xl font-semibold">Download
                        Certificate</button>
                    <button
                        class=" rounded-lg text-[#2F3367] bg-opacity-25 bg-[#615EFF] ml-7 px-7 py-5 text-xl font-semibold">Requirements
                        Submission</button>
                </div>
            </div>
            <span class="text-xl self-center pt-5 underline font-medium">News and highlights</span>
            @foreach ($data as $value )
            <div class="flex flex-col relative mx-36">
                <div class="rounded-2xl bg-black">
                    <img src="{{asset(''.$value['photo_link'].'')}}" class=" rounded-2xl opacity-[0.65]" alt="Logo">
                </div>
                <div class="absolute z-10 px-10 py-8">
                    <div class="flex flex-col gap-10">
                        <div class="flex flex-col gap-3">
                            <div class="text-xl font-semibold text-white">{{$value['title']}}</div>
                            <div class="text-xl font-semibold text-white">{{$value['time']}}</div>
                        </div>
                        <span class="text-white underline text-lg font-thin">Learn More
                            <i class="fa-solid fa-arrow-right px-3 text-white text-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
            </div>

        </div>

    </div>
</body>

</html>
