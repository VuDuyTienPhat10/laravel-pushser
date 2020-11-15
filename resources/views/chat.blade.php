<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>

<body>

    <div class="container">
        <div class="row" id="app">

            <ul class="list-group offset-4 col-4">

                 <Message v-for="(msg,index) in chat.message">
                    @{{msg}}
                </Message>


            {{-- <li class="list-group-item" v-for="(msg,index) in chat.message" :key="index">{{msg}}</li> --}}
                <input type="text" class="form-control" placeholder="Type your msg here" v-model="message"
                    v-on:keyup.enter="send">
            </ul>
        </div>
    </div>



    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
