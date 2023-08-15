@extends('adminlte::page')

@section('title', 'SIOPM-off')

@section('content_header')
    <h1 class="m-0 text-dark" id="typing-effect"></h1>
    <script>
        const text = "⚡️SEJA BEM VINDO AO SIOPM-OFFLINE!";
        let index = 0;
        const targetElement = document.getElementById("typing-effect");

        function typeEffect() {
            if (index < text.length) {
                targetElement.innerHTML += text.charAt(index);
                index++;
                setTimeout(typeEffect, 100); // Adjust the typing speed here
            }
        }

        typeEffect();
    </script>

    <row>
        <div class="container-fluid">
            <div>
                @if (Session('status'))
                    <div class="bg-success" style="padding: 20px;">
                        {{ Session('status') }}
                    </div>
                @endif
                @if (Session('error'))
                    <div class="bg-danger" style="padding: 20px;">
                        {{ Session('error') }}
                    </div>
                @endif
                @if (Session('message'))
                    <div class="bg-success" style="padding: 20px;">
                        {{ Session('message') }}
                    </div>
                @endif
            </div>
        </div>
    </row>
@stop

@section('content')

<body class="modal-open" style="padding-right: 17px;">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Você está logado!</p>
                </div>
            </div>
        </div>
    </div>

    <div style="position: relative; text-align: center;">
        <img src="{{ 'img/marca1.png' }}" alt="Marca d'água" style="width: 60%;">
    </div>


</body>


@stop

@section('css')

@stop
