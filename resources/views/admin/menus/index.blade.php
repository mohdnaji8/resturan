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
            <a href="{{route('admin.menus.create')}}" class="px-4 py-2 add rounded-lg" >Add Menu</a>
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase border-gray-100 dark:bg-gray-400 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Menu name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
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
                            @foreach($menus as $menu)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{$menu->name}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$menu->priec}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <img src="{{asset('Storage/'.$menu->image)}}" class="w-16 h-16 rounded">
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$menu->description}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flext space-x-2">
                                            <a href="{{route('admin.menus.edit', $menu->id)}}" class="px-4 py-2 add rounded-lg">Edit</a>
                                            <form class="px-4 py-2 delete text-white rounded-lg"
                                                  method="POST"
                                                  action="{{route('admin.menus.destroy', $menu->id)}}"
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
