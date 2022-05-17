
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content=<?php $token=csrf_token(); echo $token;?>>
    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="..\js\Ajax.js"></script>
    <script src="..\js\script.js"></script>
    <script src="..\js\TesztKerdes.js"></script>
    <title>Hecz Klaudia</title>
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tesztkérdések') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="kategoriaDiv">
                        <select id="kategoriak">
                    
                        </select>
                    </div>
        
                    <div class="tesztFeladat">
                        <div class="kerdes">
                            <div class="kerdes1">A papírt milyen színű szelektív kukában gyűjtjük?</div>
                        </div>
                        <div class="valasz">
                            <div class="valaszDoboz1">
                                <div class="valasz1">válasz1</div>
                                <div class="valasz2">válasz2</div>
                            </div>
                            <div class="valaszDoboz2">
                                <div class="valasz3">válasz3</div>
                                <div class="valasz4">válasz4</div>
                            </div>
                        </div>
                    </div>

                    <div class="tesztFeladat">
                        <div class="kerdes">
                            <div class="kerdes1">A papírt milyen színű szelektív kukában gyűjtjük?</div>
                        </div>
                        <div class="valasz">
                            <div class="valaszDoboz1">
                                <div class="valasz1"></div>
                                <div class="valasz2"></div>
                            </div>
                            <div class="valaszDoboz2">
                                <div class="valasz3"></div>
                                <div class="valasz4"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</html>