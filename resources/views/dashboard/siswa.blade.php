<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl dark:text-gray-200 leading-tight">
            Dashboard Siswa
        </h2>
    </x-slot>

    <div class="container p-4">
        <p class="text-white">Selamat datang, {{ auth()->user()->name }}! Anda login sebagai <strong>Siswa</strong>.</p>
    </div>
</x-app-layout>
