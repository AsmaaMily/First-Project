<x-layouts.auth>
    <form method="post" class="space-y-4">
        @csrf
        <x-input id="email" label="البريد الإلكتروني" icon="icon-[tabler--mail]" placeholder="name@host.com"
            type="email" />
        <x-password id="password" minLength="8" label="كلمة المرور" icon="icon-[tabler--key]" placeholder="********"
            type="password" />
        <br>
        <button type="submit" class="btn btn-gradient btn-primary w-full">تسجيل الدخول</button>

    </form>
    <span>
        ليس لديك حساب؟
        <a href="/register" class="link link-animated mt-3"> قم بإنشاء حساب جديد</a>

    </span>
</x-layouts.auth>