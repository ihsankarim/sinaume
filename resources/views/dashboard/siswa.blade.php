<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard Siswa
        </h2>
    </x-slot>

    <div class="container py-4">
        <h1 class="text-2xl font-bold">Dashboard Siswa</h1>
        <p>Selamat datang, {{ auth()->user()->name }}! Anda login sebagai <strong>Siswa</strong>.</p>
    </div>
</x-app-layout>
