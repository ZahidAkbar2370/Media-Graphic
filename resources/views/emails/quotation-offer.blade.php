@extends('emails/layouts/default')


@section('content')


    <center style="min-width:600px;width:100%">

        <!-----Thanks Div------->
        <p>
            <strong>Hello {{ $quotation->first_name.' '.$quotation->last_name }},</strong><br>
            Réponse de l'administrateur à votre devis
        </p>
        <p>{{ $quotation->description }}</p>
        <table>
            <tr>
                <th>Montant TTC</th>
                <td>{{ $quotation->amount_include_tax.' €' }}</td>  
            </tr>
            <tr>
                <th>Montant HT</th>
                <td>{{ $quotation->amount_exclude_tax.' €' }}</td>  
            </tr>
        </table>
        <p>
            Si vous êtes d'accord s'il vous plaît <a href="{{ url('register?email='.$quotation->email) }}">Accepter et créer une commande</a>
        </p>
        
    </center>




@stop

