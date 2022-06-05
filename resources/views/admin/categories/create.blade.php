@extends('layouts.admin')
@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Admin Panel') }}
    </h2>
@endsection
@section('content')
    <style >
      .add {
          background-color: #718096;
          border: #2d3748;
          margin-right: 40px;
          margin-top: 20px;
        }
    </style>
    <div class="py-12 bg-slate-100 rounded">
        <div class="flex justify-end m-2 p-2">
            <a href="{{route('admin.categories.index')}}" class="px-4 py-2 add rounded-lg" > categories</a>
        </div>
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                            <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required="">
                        </div>
                        <div class="mb-6">
                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Image</label>
                            <input type="file" id="image" name="image" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required="">
                        </div>
                        <div class="mb-6">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">description</label>
                            <textarea name="description" placeholder="Description here" cols="20" rows="3">
                            </textarea>
                        </div>
                        <div class="mb-6">
                            <button type="submit" class="px-4 py-2 py-2 add rounded-lg ">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
