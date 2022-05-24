<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="bg-[#F8F7FD]"> 
        <div class="p-6">
            <div class="flex items-center flex-row">
                <form class="flex items-center flex-col w-full" action="{{ route('create') }}" method="POST">
                @csrf
                    <input type="text" 
                    class="rounded-lg w-full border border-gray-150 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none ease-linear transition-all duration-150"
                    name="course"/>
                    <button 
                    class="bg-[#5436C2] w-full text-white mt-6 active:bg-[#5436C2]/80 hover:bg-[#5436C2]/80 font-bold uppercase text-xs px-6 py-4 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                    type="submit">Ajouter</button>
                </form>
            </div>
        </div>


        <div class="mt-8 flex flex-col w-full px-12">
            @foreach ($liste_course as $liste_courses)
            
                @if ($liste_courses->valide == 0)
                    <div class="py-3 w-full flex flex-wrap rounded-lg shadow-sdw mb-3 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none ease-linear transition-all duration-150">
                        <div class="w-1/12 flex justify-center items-center"><a href="{{route('valide',  ['id' => $liste_courses->id ])}}" class="bg-[#55891E] text-white active:bg-[#55891E]/80 hover:bg-[#55891E]/80 font-bold uppercase text-xs px-3 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none ease-linear transition-all duration-150">Valider</a></div>
                        <div class="w-10/12 flex items-center text-lg"> {{$liste_courses->course}} </div>
                        <div class="w-1/12 flex justify-center items-center"><a href="{{route('delete',  ['id' => $liste_courses->id ])}}" class="bg-[#E9410B] text-white active:bg-[#E9410B]/80 hover:bg-[#E9410B]/80 font-bold uppercase text-xs px-3 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none ease-linear transition-all duration-150">Supprimer</a></div>
                    </div>
                @else
                <div class="py-3 w-full flex flex-wrap rounded-lg shadow-sdw mb-3 placeholder-blueGray-300 text-blueGray-600 bg-white/15 text-sm focus:outline-none ease-linear transition-all duration-150">
                        <div class="w-1/12 flex justify-center items-center"><a href="{{route('devalide',  ['id' => $liste_courses->id ])}}" class="bg-[#E3AF0A] text-white active:bg-[#E3AF0A]/80 hover:bg-[#E3AF0A]/80 font-bold uppercase text-xs px-3 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none ease-linear transition-all duration-150">Dévalider</a></div>
                        <div class="w-10/12 flex items-center"> <s>{{$liste_courses->course}}</s> </div>
                        <div class="w-1/12 flex justify-center items-center"><a href="{{route('delete',  ['id' => $liste_courses->id ])}}" class="bg-[#E9410B] text-white active:bg-[#E9410B]/80 hover:bg-[#E9410B]/80 font-bold uppercase text-xs px-3 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none ease-linear transition-all duration-150">Supprimer</a></div>
                    </div>
                @endif

            @endforeach

        </div>


    </body>
</html>
