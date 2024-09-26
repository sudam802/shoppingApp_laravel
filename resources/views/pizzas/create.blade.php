@extends('layouts.layout')

@section('content')
<div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h1 class="text-2xl font-bold text-center mb-6">Pizza Order Form</h1>
        <form action="" method="POST">
            @csrf <!-- CSRF Token for security -->
            
            <!-- User Name -->
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Your Name</label>
                <input type="text" id="username" name="username" 
                       class="mt-1 p-2 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                       placeholder="Enter your name" required>
            </div>

            <!-- Pizza Type -->
            <div class="mb-4">
                <label for="pizza-type" class="block text-sm font-medium text-gray-700">Pizza Type</label>
                <select id="pizza-type" name="pizza_type" 
                        class="mt-1 block w-full p-2 rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                        required>
                    <option value="">Select Pizza Type</option>
                    <option value="Margherita">Margherita</option>
                    <option value="Pepperoni">Pepperoni</option>
                    <option value="BBQ Chicken">BBQ Chicken</option>
                    <option value="Veggie">Veggie</option>
                </select>
            </div>

            <!-- Toppings -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Toppings</label>
                <div class="flex flex-wrap">
                    <div class="mr-4 mb-2">
                        <input type="checkbox" id="cheese" name="toppings[]" value="Cheese">
                        <label for="cheese" class="text-sm">Cheese</label>
                    </div>
                    <div class="mr-4 mb-2">
                        <input type="checkbox" id="olives" name="toppings[]" value="Olives">
                        <label for="olives" class="text-sm">Olives</label>
                    </div>
                    <div class="mr-4 mb-2">
                        <input type="checkbox" id="pepper" name="toppings[]" value="Pepper">
                        <label for="pepper" class="text-sm">Pepper</label>
                    </div>
                    <div class="mr-4 mb-2">
                        <input type="checkbox" id="mushrooms" name="toppings[]" value="Mushrooms">
                        <label for="mushrooms" class="text-sm">Mushrooms</label>
                    </div>
                </div>
            </div>

            <!-- Base Style -->
            <div class="mb-4">
                <label for="base-style" class="block text-sm font-medium text-gray-700">Base Style</label>
                <select id="base-style" name="base_style" 
                        class="mt-1 block w-full p-2 rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                        required>
                    <option value="">Select Base Style</option>
                    <option value="Thin Crust">Thin Crust</option>
                    <option value="Thick Crust">Thick Crust</option>
                    <option value="Stuffed Crust">Stuffed Crust</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="mb-4">
                <button type="submit" 
                        class="w-full bg-indigo-600 text-white font-bold py-2 rounded-md hover:bg-indigo-500 transition duration-200">
                    Place Order
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
