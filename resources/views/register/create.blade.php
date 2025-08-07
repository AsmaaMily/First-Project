<x-layouts.auth>
    <form method="post" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <x-input id="name" minLength="3" label="اسم المستخدم" icon="icon-[tabler--user]" placeholder="user1234" />

        <x-input id="email" label="البريد الإلكتروني" icon="icon-[tabler--mail]" placeholder="name@host.com"
            type="email" />

        <x-password id="password" minLength="8" label="كلمة المرور" icon="icon-[tabler--key]" placeholder="********"
            type="password" />

        <x-password id="password_confirmation" minLength="8" label="تأكيد كلمة المرور"
            icon="icon-[tabler--shield-check]" placeholder="********" type="password" />

        <div class="input-floating mt-6">
            <input type="file" required accept="image/*" class="input " id="input" name="avatar" />
            <label class="input-floating-label " for="avatar">صورة الملف الشخصي</label>
            @error('avatar')
                <p class="text-red-400 text-sm mt-1 ms-2 whitespace-nowrap">{{ $message }}</p>
            @enderror
        </div>

        <br>
        <button type="submit" class="btn btn-gradient btn-primary w-full">تسجيل حساب جديد</button>

    </form>

    <span>
        لديك حساب بالفعل؟
        <a href="/login" class="link link-animated mt-3">سجّل دخول</a>

    </span>



</x-layouts.auth>