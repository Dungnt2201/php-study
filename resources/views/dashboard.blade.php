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
                </div>
            </div>

            <!-- TODO LIST UI -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-6 p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Add New Task</h3>
                
                <!-- Form Add Task -->
                <form action="{{ route('tasks.store') }}" method="POST" class="mb-6">
                    @csrf
                    <div class="flex items-center space-x-2">
                        <input type="text" name="title" placeholder="Enter task..." 
                            class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <button type="submit" class="bg-blue-500 text-black px-6 py-2 rounded-lg hover:bg-blue-600 border border-black-300 ">
                            Add
                        </button>
                    </div>
                </form>

            <!-- List Task -->
            <h3 class="text-lg font-semibold text-gray-800 mt-4">Your Tasks</h3>
            <ul class="mt-4 space-y-2">
                @foreach ($tasks as $task)
                    <li class="flex justify-between items-center bg-white p-4 rounded-lg shadow-md border border-gray-200">
                        <!-- Task Title -->
                        <span class="text-gray-900 font-medium pl-2">{{ $task->title }}</span>
                        <div class="flex space-x-8"> <!-- Tăng khoảng cách giữa các button -->
                            <!-- Edit Button (Màu xanh da trời) -->
                            <a href="{{ route('tasks.edit', $task->id) }}" 
                               class="px-4 py-2 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition">
                                Edit
                            </a>
                            
                            <!-- Delete Button (Màu đỏ) -->
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="px-4 py-2 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600 transition">
                                    Delete
                                </button>
                            </form>
                        </div>                        
                    </li>
                @endforeach
            </ul>
            </div>
        </div>
    </div>
</x-app-layout>
