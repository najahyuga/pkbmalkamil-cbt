<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{asset('css/output.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-poppins text-[#0A090B]">
        <section id="content" class="flex">
            <div id="sidebar" class="w-[270px] flex flex-col shrink-0 min-h-screen justify-between p-[30px] border-r border-[#EEEEEE] bg-[#FBFBFB]">
                <div class="w-full flex flex-col gap-[30px]">
                    <a href="index.html" class="flex items-center justify-center">
                        <img src="{{asset('images/logo/logo.svg')}}" alt="logo">
                    </a>
                    <ul class="flex flex-col gap-3">
                        <li>
                            <h3 class="font-bold text-xs text-[#A5ABB2]">DAILY USE</h3>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('images/icons/home-hashtag.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Overview</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 bg-[#2B82FE] transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('images/icons/note-favorite.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold text-white transition-all duration-300 hover:text-white">Courses</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('images/icons/profile-2user.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Students</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('images/icons/sms-tracking.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Messages</p>
                                <div class="notif w-5 h-5 flex shrink-0 rounded-full items-center justify-center bg-[#F6770B]">
                                    <p class="font-bold text-[10px] leading-[15px] text-white">12</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('images/icons/chart-2.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Analytics</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="flex flex-col gap-3">
                        <li>
                            <h3 class="font-bold text-xs text-[#A5ABB2]">OTHERS</h3>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('images/icons/3dcube.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Rewards</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('images/icons/code.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">A.I Plugins</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                <div>
                                    <img src="{{asset('images/icons/setting-2.svg')}}" alt="icon">
                                </div>
                                <p class="font-semibold transition-all duration-300 hover:text-white">Settings</p>
                            </a>
                        </li>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <li>
                                <button type="submit" class=" w-full p-[10px_16px] flex items-center gap-[14px] rounded-full h-11 transition-all duration-300 hover:bg-[#2B82FE]">
                                    <div>
                                        <img src="{{asset('images/icons/security-safe.svg')}}" alt="icon">
                                    </div>
                                    <p class="font-semibold transition-all duration-300 hover:text-white">Logout</p>
                                </button>
                            </li>
                        </form>
                    </ul>
                </div>
                <a href="">
                    <div class="w-full flex gap-3 items-center p-4 rounded-[14px] bg-[#0A090B] mt-[30px]">
                        <div>
                            <img src="{{asset('images/icons/crown-round-bg.svg')}}" alt="icon">
                        </div>
                        <div class="flex flex-col gap-[2px]">
                            <p class="font-semibold text-white">Get Pro</p>
                            <p class="text-sm leading-[21px] text-[#A0A0A0]">Unlock features</p>
                        </div>
                    </div>
                </a>
            </div>
            <div id="menu-content" class="flex flex-col w-full pb-[30px]">
                <div class="nav flex justify-between p-5 border-b border-[#EEEEEE]">
                    <form class="search flex items-center w-[400px] h-[52px] p-[10px_16px] rounded-full border border-[#EEEEEE]">
                        <input type="text" class="font-semibold placeholder:text-[#7F8190] placeholder:font-normal w-full outline-none" placeholder="Search by report, student, etc" name="search">
                        <button type="submit" class="ml-[10px] w-8 h-8 flex items-center justify-center">
                            <img src="{{asset('images/icons/search.svg')}}" alt="icon">
                        </button>
                    </form>
                    <div class="flex items-center gap-[30px]">
                        <div class="flex gap-[14px]">
                            <a href="" class="w-[46px] h-[46px] flex shrink-0 items-center justify-center rounded-full border border-[#EEEEEE]">
                                <img src="{{asset('images/icons/receipt-text.svg')}}" alt="icon">
                            </a>
                            <a href="" class="w-[46px] h-[46px] flex shrink-0 items-center justify-center rounded-full border border-[#EEEEEE]">
                                <img src="{{asset('images/icons/notification.svg')}}" alt="icon">
                            </a>
                        </div>
                        <div class="h-[46px] w-[1px] flex shrink-0 border border-[#EEEEEE]"></div>
                        <div class="flex gap-3 items-center">
                            <div class="flex flex-col text-right">
                                <p class="text-sm text-[#7F8190]">Howdy</p>
                                <p class="font-semibold">{{ Auth::user()->name }}</p>
                            </div>
                            <div class="w-[46px] h-[46px]">
                                <img src="{{asset('images/photos/default-photo.svg')}}" alt="photo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-10 px-5 mt-5">
                    <div class="breadcrumb flex items-center gap-[30px]">
                        <a href="#" class="text-[#7F8190] last:text-[#0A090B] last:font-semibold">Home</a>
                        <span class="text-[#7F8190] last:text-[#0A090B]">/</span>
                        <a href="{{ route('dashboard.courses.index') }}" class="text-[#7F8190] last:text-[#0A090B] last:font-semibold">Manage Courses</a>
                        <span class="text-[#7F8190] last:text-[#0A090B]">/</span>
                        <a href="#" class="text-[#7F8190] last:text-[#0A090B] last:font-semibold ">Course Students</a>
                    </div>
                </div>
                <div class="header ml-[70px] pr-[70px] w-[940px] flex items-center justify-between mt-10">
                    <div class="flex gap-6 items-center">
                        @if ($course->category->name == 'Matematika')
                            <div class="w-[150px] h-[150px] flex shrink-0 relative overflow-hidden">
                                <img src="{{ Storage::url($course->cover); }}" class="w-full h-full object-contain" alt="icon">
                                <p class="p-[8px_16px] rounded-full bg-[#FFF2E6] font-bold text-sm text-[#F6770B] absolute bottom-0 transform -translate-x-1/2 left-1/2 text-nowrap">{{ $course->name }}</p>
                            </div>
                        @elseif ($course->category->name == 'Bahasa Indonesia')
                            <div class="w-[150px] h-[150px] flex shrink-0 relative overflow-hidden">
                                <img src="{{ Storage::url($course->cover); }}" class="w-full h-full object-contain" alt="icon">
                                <p class="p-[8px_16px] rounded-full bg-[#D5EFFE] font-bold text-sm text-[#066DFE] absolute bottom-0 transform -translate-x-1/2 left-1/2 text-nowrap">{{ $course->name }}</p>
                            </div>
                        @endif

                        <div class="flex flex-col gap-5">
                            <h1 class="font-extrabold text-[30px] leading-[45px]">{{ $course->name }}</h1>
                            <div class="flex items-center gap-5">
                                <div class="flex gap-[10px] items-center">
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{asset('images/icons/calendar-add.svg')}}" alt="icon">
                                    </div>
                                    <p class="font-semibold">{{ $course->created_at->format('d F Y') }}</p>
                                </div>
                                <div class="flex gap-[10px] items-center">
                                    <div class="w-6 h-6 flex shrink-0">
                                        <img src="{{asset('images/icons/profile-2user-outline.svg')}}" alt="icon">
                                    </div>
                                    <p class="font-semibold">{{ count($students) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <a href="{{ route('dashboard.course.course_students.create', $course) }}" class="h-[52px] p-[14px_30px] bg-[#6436F1] rounded-full font-bold text-white transition-all duration-300 hover:shadow-[0_4px_15px_0_#6436F14D]">Add Student</a>
                    </div>
                </div>
                <div id="course-test" class="mx-[70px] w-[870px] mt-[30px]">
                    <h2 class="font-bold text-2xl">Students</h2>
                    <div class="flex flex-col gap-5 mt-2">
                        @forelse ($students as $student)
                            <div class="student-card w-full flex items-center justify-between p-4 border border-[#EEEEEE] rounded-[20px]">
                                <div class="flex gap-4 items-center">
                                    <div class="w-[50px] h-[50px] flex shrink-0 rounded-full overflow-hidden">
                                        <img src="{{asset('images/photos/default-photo.svg')}}" class="w-full h-full object-cover" alt="photo">
                                    </div>
                                    <div class="flex flex-col gap-[2px]">
                                        <p class="font-bold text-lg">{{ $student->name }}</p>
                                        <p class="text-[#7F8190]">{{ $student->email }}</p>
                                    </div>
                                </div>
                                @if ($student->status == 'belum mengerjakan')
                                    <div class="flex items-center gap-[14px]">
                                        <p class="p-[6px_10px] rounded-[10px] bg-[#c49d26] font-bold text-xs text-white outline-[#ffbb00] outline-dashed outline-[2px] outline-offset-[4px] mr-[6px]">belum mengerjakan</p>
                                    </div>
                                @elseif($student->status == 'belum lulus')
                                    <div class="flex items-center gap-[14px]">
                                        <p class="p-[6px_10px] rounded-[10px] bg-[#ff5f5f] font-bold text-xs text-white outline-[#e41e1e] outline-dashed outline-[2px] outline-offset-[4px] mr-[6px]">belum lulus</p>
                                    </div>
                                @elseif($student->status == 'lulus')
                                    <div class="flex items-center gap-[14px]">
                                        <p class="p-[6px_10px] rounded-[10px] bg-[#06BC65] font-bold text-xs text-white outline-[#06BC65] outline-dashed outline-[2px] outline-offset-[4px] mr-[6px]">lulus</p>
                                    </div>
                                @endif
                            </div>
                        @empty

                        @endforelse
                </div>
            </div>
        </section>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const menuButton = document.getElementById('more-button');
                const dropdownMenu = document.querySelector('.dropdown-menu');

                menuButton.addEventListener('click', function () {
                dropdownMenu.classList.toggle('hidden');
                });

                // Close the dropdown menu when clicking outside of it
                document.addEventListener('click', function (event) {
                const isClickInside = menuButton.contains(event.target) || dropdownMenu.contains(event.target);
                if (!isClickInside) {
                    dropdownMenu.classList.add('hidden');
                }
                });
            });
        </script>

    </body>
</html>