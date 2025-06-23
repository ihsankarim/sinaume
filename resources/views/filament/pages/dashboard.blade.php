<x-filament::page>
    <div class="space-y-4">
        <h2 class="text-2xl font-bold text-gray-800">Selamat Datang, Admin!</h2>
        <p class="text-gray-600">Ini adalah dashboard LMS kamu. Kamu bisa mulai dengan melihat daftar course, user, dan statistik.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <x-filament::card>
                <h3 class="text-lg font-semibold">Jumlah Course</h3>
                <p>{{ \App\Models\Course::count() }} Course</p>
            </x-filament::card>

            <x-filament::card>
                <h3 class="text-lg font-semibold">Jumlah User</h3>
                <p>{{ \App\Models\User::count() }} User</p>
            </x-filament::card>

            <x-filament::card>
                <h3 class="text-lg font-semibold">Enrollments</h3>
                <p>{{ \App\Models\Enrollment::count() }} Enrollment</p>
            </x-filament::card>
        </div>
    </div>
</x-filament::page>
