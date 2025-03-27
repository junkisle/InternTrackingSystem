<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="row">
            <div class="col-md-3 col-xl-2 px-sm-2 px-0 bg-dark min-vh-100 position-fixed" style="height: 100vh;">
                @include('utility.sidebar', ['user_data' => session('user_data')])
            </div>
            <div class="col-md-9 col-xl-10 offset-md-3 offset-xl-2 py-3">
                    @php
                        $current_user_id = session('user_data')->id
                    @endphp
                    @foreach($notes as $note)
                        @if($current_user_id == $note->id)
                        <p>welcome {{ $note->note }} hi</p>
                        @php
                            $newestDay = $note->where('user_id', $current_user_id)->max('day');
                            $submitDay = $newestDay + 1;
                        @endphp
                        @endif
                    @endforeach

                    <p>user id: {{ $current_user_id }} </p>
                       <p> newest day: {{ $newestDay }}</p>
                <form method="post" action="{{ route('notes.create') }}">
                    @csrf
                    @method('post')
                    <input type="text" name="user_id" value="{{ $current_user_id }}"/>
                    <input type="text" name="day" value="{{ $submitDay }}"/>
                    <input type="text" name="note" value="" placeholder="Add a note" style=""/>
                    <button type="submit"> Submit </button>
                </form>
            </div>
            
    </div>
</div>

</body>
</html>