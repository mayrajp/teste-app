@extends('layouts.app')

@section('title', 'Listagem de usuarios')

@section('content')

    <div class="container mx-auto px-4 sm:px-8">
        <div class="py-8">
            <form action="{{route('fake.generate')}}" method="GET" >
                <div class="mb-5">
                    <h2 class="text-2xl font-semibold leading-tight ">Fake
                        
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 ml-5 mr-5 rounded">
                            Gerar fakes!
                        </button>
                    </h2>
                </div>
            </form>
          

            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">


                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    Nome
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    Sobrenome
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    E-mail
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    Celular
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $user->name }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $user->surname }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $user->email }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $user->cellphone }}</p>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                    <div class="py-4">
                        {{ $users->links() }}
                    </div>

                </div>
            </div>
        </div>
    @endsection
