<x-layouts.default>
    <nav
        class="navbar bg-base-100 rounded-box shadow-xl shadow-gray-300/30 dark:shadow-[#53589A]/30 sticky top-0 z-50 border-b-4 border-[#53589A]">
        <div class="flex flex-1 items-center">
            <a href="/">
                <span class="icon-[tabler--brand-twitter] size-7 mx-2 mt-2 "></span>
                <a class="link text-base-content link-neutral text-xl font-bold no-underline mb-1" href="/">
                    عصفور
                </a>
            </a>
        </div>
        <div class="navbar-end flex items-center gap-4">

            @if(Auth::check())
                <div class="dropdown relative inline-flex [--auto-close:inside] [--offset:8] [--placement:bottom-end]">
                    <button id="dropdown-scrollable" type="button" class="dropdown-toggle flex items-center"
                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        <div class="avatar">
                            <div class="size-9.5 rounded-full">
                                <img src="/storage/{{Auth::user()->avatar }}" alt="avatar 1" />
                            </div>
                        </div>
                    </button>
                    <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu"
                        aria-orientation="vertical" aria-labelledby="dropdown-avatar">

                        <li>
                            <a class="dropdown-item" href="{{ route('profile', Auth::id())}}">
                                <span class="icon-[tabler--user]"></span>
                                الملف الشخصي
                            </a>
                        </li>
                        <li class="dropdown-footer gap-2">
                            <form method="post" action="{{ route('logout') }}" class="w-full">
                                @csrf
                                <button type="submit" class="btn btn-soft btn-block text-red-400">
                                    <span class="icon-[tabler--logout]"></span>
                                    تسجيل الخروج
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a href="{{route('login')}}">
                    <button class="btn btn-text btn-square">
                        <span class="icon-[tabler--login] size-6"></span>
                    </button>
                </a>
            @endif
        </div>
    </nav>
    <div class=" mt-10 text-center">
        <!-- صورة البروفايل -->
        <div class="flex justify-center">
            <img src="/storage/{{ $user->avatar }}" alt="avatar"
                class="size-32 rounded-full border-3 border-white shadow-lg" />
        </div>

        <!-- اسم المستخدم -->
        <h1 class="mt-4 text-3xl font-bold text-white">{{ $user->name }}</h1>

        <!-- خط فاصل -->
        <div class="mt-6 mb-4 border-t border-3 border-white"></div>
        <p class="flex m-3 font-bold text-xl"> التغريدات</p>
        <!-- تغريدات المستخدم -->
        <div class="space-y-3">
            @forelse($user->tweets as $tweet)
                <div class=" card p-6 pr-4 border shadow text-start">
                    <a href="{{ route( 'tweet.view', $tweet->baseTweet->id) }}">{{ $tweet->content }}</a>
                </div>
            @empty
                <p class="text-gray-500">لم يقم هذا المستخدم بنشر أي تغريدات بعد.</p>
            @endforelse
        </div>
    </div>
</x-layouts.default>