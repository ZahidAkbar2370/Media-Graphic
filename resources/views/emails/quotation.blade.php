@extends('emails/layouts/default')


@section('content')


    <center style="min-width:600px;width:100%">

        <!-----Thanks Div------->

        <table>
            <tr>
                <th>Name</th>  
                <td>{{ $quotation->first_name.' '.$quotation->last_name }}</td>  
            </tr>
            <tr>
                <th>Email</th>  
                <td>{{ $quotation->email }}</td>  
            </tr>
            <tr>
                <th>Phone</th>  
                <td>{{ $quotation->phone }}</td>  
            </tr>
            <tr>
                <th>Postal</th>  
                <td>{{ $quotation->postalcode }}</td>  
            </tr>
            <tr>
                <th>City</th>  
                <td>{{ $quotation->city }}</td>  
            </tr>
            <tr>
                <th>Message</th>  
                <td>{{ $quotation->description }}</td>  
            </tr>
        </table>
    </center>




@stop

