@props(['title'])
<div class="auth__card min-h-screen flex flex-col sm:justify-center items-center pt-0">
    <div class="auth__card__inside w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden">
        <h1 class="auth__card__title w-full mb-10 uppercase">{{ $title }}</h1>
        {{ $slot }}
    </div>
</div>
