<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sales') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex space-x-1">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">In Process</button>
                    <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">Approved</button>
                    <button class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Rejected</button>
                </div>
                <div class="p-6 text-gray-900">
                    <table id="table">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Customer</td>
                                <td>Product</td>
                                <td>Total</td>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
