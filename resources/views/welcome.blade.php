<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }


            
        </style>
    </head>
    <body>
        
        <div class="container" style="margin-left:50px;">
            <br>
             {{--*/ $i = 1 /*--}}
                @foreach($questions as $q)
                    {{$i++}}.{{$q->title}}<br>
                    @foreach($answers as $a)
                    @if($q->id==$a->question_id)
                    <input type="radio" name="question_{{$q->id}}" {@if($q->answer_id==$a->id) checked @endif}>{{$a->value}}<br>
                    @endif
                    @endforeach
                    <br>
                @endforeach
            <div class="content">
                <div class="title">
                    
               
                </div>
            </div>
        </div>
    </body>
</html>
