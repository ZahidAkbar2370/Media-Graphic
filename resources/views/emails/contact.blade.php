@extends('emails/layouts/default')


@section('content')


    <center style="min-width:600px;width:100%">

        <!-----Thanks Div------->

        <div align="center" style="padding:0 20px"> 
            <p>
                <b>{{ $contact['topic'] }}</b>
            </p>
            <p>
                {{ $contact['contactusmessage'] }}
            </p>
        </div>

    </center>




@stop


