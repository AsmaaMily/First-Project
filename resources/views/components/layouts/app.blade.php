<x-layouts.default>
    <nav
        class="navbar bg-base-100 rounded-box shadow-xl shadow-gray-300/30 dark:shadow-[#53589A]/30 sticky top-0 z-50 border-b-4 border-[#53589A]">
        <div class="flex flex-1 items-center">
            <a href="/">
                <span class="icon-[tabler--brand-twitter] size-8 mx-2 mt-2 "></span>
                <a class=" text-base-content link-neutral text-2xl font-bold no-underline mb-1 mt-2" href="/">
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
                            <div class="size-10  rounded-full">
                                <img src="/storage/{{Auth::user()->avatar }}" alt="avatar 1"  />
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
                                    <span class="icon-[tabler--logout] size-5"></span>
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
    <div class="mt-6 flex-1">
        {{ $slot }}
    </div>
    <div class="sticky bottom-0">
        <form method="post" action="{{ route('tweet.create') }}" class="textarea-floating shadow-base-300 shadow-xl">
            @csrf
            <input type="hidden"name="parent_tweet_id"  id="parent_tweet_id" value=""/>
            <div class="relative">
                <textarea required class="textarea h-24 w-full  {{ $errors->has('content') ?: '' }}" placeholder=""
                    id="content" name="content">{{ old('content') }}</textarea>
                <label class="textarea-floating-label" for="content">اكتب تغريدة</label>
                @error('content')
                    <p class="absolute bottom-2 right-2 m-2 text-red-400 text-sm bg-opacity-80 px-2 rounded">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <button type="submit" class="btn btn-gradient btn-primary absolute bottom-2 left-2 m-2">
                <span class="icon-[tabler--send] size-5"></span>
            </button>
        </form>
    </div>


</x-layouts.default>