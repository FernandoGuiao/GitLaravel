<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projeto Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Arial', sans-serif;
                font-weight: 100;
                font-size: 50;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: top;
                display: flex;
                justify-content: center;
                margin-top: 70px;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            form {
                /* Apenas para centralizar o form na página */
                margin: 0 auto;
                width: 400px;
                /* Para ver as bordas do formulário */
                padding: 1em;
                border: 1px solid #CCC;
                border-radius: 1em;
                text-align: left;

            }
        </style>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    Projeto CRUD Laravel                  
                </div>
                
                <div class="links">
                    <a href="./cadastro">Cadastro</a>                    
                </div>
                
                @yield('content')

            </div>
            
           
        </div>
    </body>
</html>
