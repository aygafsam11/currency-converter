@extends('layouts.app')

@section('content')
    <div class="min-w-screen min-h-screen flex flex-col items-center justify-center bg-gray-100">
        <div class="w-5/6 lg:w-3/6 rounded-xl bg-gradient-to-bn shadow-xl">
            <div class="text-white py-4 bg-gray-200">
                <div class="text-center font-bold text-2xl text-blue-500">
                    <h2><i class="fab fa-gg"></i> Currency Converter</h2>
                </div>

                <form action="/convert" method="post">
                    @csrf

                    <div class="px-4 py-12 text-white">
                        <div class="flex items-center justify-between mb-5">
                            <div class="flex flex-col font-bold w-2/6 px-2">
                                <label for="amount" class="mb-3 text-black ml-2">
                                    Amount
                                </label>
                                <input type="text" 
                                        name="amount"
                                        placeholder="1.00"
                                        class="py-3 px-5 rounded focus:outline-none text-gray-600 focus:text-gray-600 border border-4">
                            </div>

                            <div class="flex flex-col font-bold w-4/6 px-2">
                                <label for="from" class="mb-3 text-black ml-2">
                                    From
                                </label>

                                <select name="from" 
                                        class="py-3 px-5 rounded focus:outline-none text-gray-600 focus:text-gray-600 border border-4">
                                >
                                    <option class="py-1">EUR</option>
                                </select>
                            </div>

                            <div class="flex flex-col font-bold w-4/6 px-2">
                                <label for="to" class="mb-3 text-black ml-2">
                                    To
                                </label>

                                <select name="to" 
                                        class="py-3 px-5 rounded focus:outline-none text-gray-600 focus:text-gray-600 border border-4">
                                >
                                    <option class="py-1">USD</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection