<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            オーナー一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="text-gray-600 body-font">
                        <x-flash-message statu="session('status')" />
                        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                        <div class="flex justify-end mb-4">
                            <button onclick="location.href='{{route('admin.owners.create')}}'" class=" ml-auto text-white bg-indigo-500 border-0 mt-2 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録する</button>
                        </div>
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                            <tr>
                                <th class="px-4 py-5 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">名前</th>
                                <th class="px-4 py-5 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メールアドレス</th>
                                <th class="px-4 py-5 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">作成日</th>
                                <th class="px-4 py-5 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($expiredOwners as $owner)
                            <tr>
                                <td class="px-4 py-3">{{$owner->name}}</td>
                                <td class="px-4 py-3">{{$owner->email}}</td>
                                <td class="px-4 py-3">{{$owner->created_at->diffForHumans()}}</td>
                                <form id="delete_{{$owner->id}}" method="post" action="{{ route('admin.expired-owners.destroy', ['owner' => $owner->id ])}}">
                                    @csrf
                                <td class="px-4 py-3 text-center">
                                    <a href="#" data-id="{{$owner->id}}" onclick="deletePost(this)" class=" text-white bg-red-500 border-0 py-1.5 px-4 focus:outline-none hover:bg-red-600 rounded ">完全に削除</a>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deletePost(e){
            'use strict';
            if(confirm('本当に削除しますか？')){
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
</x-app-layout>
