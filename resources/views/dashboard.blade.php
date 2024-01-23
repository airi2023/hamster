<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <br>
                    <a href="/admin-top" class="btn" style="background: #5f3c17;color: #fff;width: 170px;padding: 20px;margin: 30px 0 0;display: block;text-align: center;">管理者用画面へ</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
