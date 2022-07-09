@extends('emails/layouts/default')


@section('content')


    <center style="min-width:600px;width:100%">

        <!-----Thanks Div------->

        <table>
            <tr>
                <th>Name</th>  
                <td>{{ $commande->name }}</td>  
            </tr>
            <tr>
                <th>Format</th>  
                <td>{{ $commande->file_format }}</td>  
            </tr>
            <tr>
                <th>Print</th>  
                <td>{{ $commande->print }}</td>  
            </tr>
            <tr>
                <th>Work Type</th>  
                <td>{{ $commande->works_type }}</td>  
            </tr>
            <tr>
                <th>Paper</th>  
                <td>{{ $commande->paper }}</td>  
            </tr>
            <tr>
                <th>Shaping</th>  
                <td>{{ $commande->shaping }}</td>  
            </tr>
            <tr>
                <th>Desired Copies</th>  
                <td>{{ $commande->desired_copies }}</td>  
            </tr>
            <tr>
                <th>Maximum Copies</th>  
                <td>{{ $commande->maximum_deliver_copies }}</td>  
            </tr>
            <tr>
                <th>Delivery Date</th>  
                <td>{{ $commande->deliver_date }}</td>  
            </tr>
            <tr>
                <th>Subtotal</th>  
                <td>{{ $commande->subtotal.' €' }}</td>  
            </tr>
            <tr>
                <th>Tax</th>  
                <td>{{ $commande->tax.' €' }}</td>  
            </tr>
            <tr>
                <th>Total</th>  
                <td>{{ $commande->total.' €' }}</td>  
            </tr>
        </table>
    </center>




@stop

