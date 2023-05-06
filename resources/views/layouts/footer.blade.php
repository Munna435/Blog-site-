<footer>
    <div class="container py-10 border-t border-gray-100">
        <div class="flex items-center justify-center flex-col w-full">
            <div class="h-16 -ml-16">
                <x-application-logo />
            </div>
            <div class="flex items-center gap-4">
                <a href="{{route('index')}}">Home</a>
                <a href="{{route('login')}}">Login</a>
                <a href="{{route('register')}}">Register</a>
            </div>
            <div class="mt-5">
                <span class="text-xs text-gray-500">&copy; all right reserved by @myblogteam</span>
            </div>
        </div>
    </div>
</footer>
