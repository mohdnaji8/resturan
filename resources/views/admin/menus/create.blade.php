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
            <a href="{{route('admin.menus.index')}}" class="px-4 py-2 add rounded-lg" > Menus</a>
        </div>
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form action="{{route('admin.menus.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                            <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required="">
                        </div>
                        <div class="mb-6">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price</label>
                            <input type="number" required name="price" min="0" value="0" step=".1" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                        </div>
                        <div class="mb-6">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Category</label>
                            <select name="category" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" aria-label="Default select example">
                                @foreach($categoriess as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="img" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Image</label>
                            <input type="file" id="img" name="image" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required="">
                        </div>
                        <div class="flex items-start mb-6">
                            <textarea name="description" placeholder="Description here" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" cols="15" rows="5">
                            </textarea>
                            </div>
                        <button type="submit" class="px-4 py-2 py-2 add rounded-lg ">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
