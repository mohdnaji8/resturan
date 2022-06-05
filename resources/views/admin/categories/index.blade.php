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
          color: white;

        }
      .delete {
          background-color: red;
          border: #2d3748;
          margin-top: 20px;
          color: white;
          width: 60px;
        }
    </style>
    <div class="py-12">
        <div class="flex justify-end m-2 p-2">
            <a href="{{route('admin.categories.create')}}" class="px-4 py-2 add rounded-lg" >Add category</a>
        </div>
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase border-gray-100 dark:bg-gray-400 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Category name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Image
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Operations
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{$category->name}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <img src="{{asset('Storage/'.$category->image)}}" class="w-16 h-16 rounded">
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$category->description}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flext space-x-2">
                                            <a href="{{route('admin.categories.edit', $category->id)}}" class="px-4 py-2 add rounded-lg">Edit</a>
                                            <form class="px-4 py-2 delete text-white rounded-lg"
                                                  method="POST"
                                                  action="{{route('admin.categories.destroy', $category->id)}}"
                                                  onsubmit="return confirm('are you shure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
