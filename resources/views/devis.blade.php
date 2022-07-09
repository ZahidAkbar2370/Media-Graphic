@extends('layouts/default')
@section('title')
    Home
    @parent
@stop
@section('header_styles')

@stop

@section('content')


    <section class="content">
        <h1>Devis sur mesure</h1>

        <div class="call-to-action">
            <div class="description">
                <h2>Veuillez remplir ce formulaire</h2>
                <form id="nous-contacter" method="post" action="{{ url('devis') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="infos">
                        <input class="half" type="text" required name="first_name" placeholder="Prénom">
                        <input class="half" type="text" required name="last_name" placeholder="Nom">
                        <input class="half" type="email" required name="email" placeholder="Email">
                        <input class="half" type="phone"  name="phone" placeholder="Téléphone">
                        <input class="half" type="text"  name="postal" placeholder="Postal Code">
                        <input class="half" type="text"  name="city" placeholder="Ville">
                        <textarea name="message" required placeholder="Vos besoins et votre message ici..."></textarea>
                        <div class="fichier-joindre">
                            <label class="btn verse">
                                <input type="file" name="image" placeholder="Ajoutez des fichiers">
                                <i class="fas fa-upload"></i> Ajoutez des fichiers
                            </label>
                            <h5 class="file_name mt-3" id="myFile"></h5>
                        </div>
                        <div class="action">
                            <input type="submit" name="submit" value="Envoyer" class="btn bg-btn">
                        </div>
                    </div>
                </form>
            </div>
            <div class="contact">
                <h2>Contact rapide</h2>
                <p>Aide &amp; Support</p>
                <p><a href="tel:0142069707"><i class="fa fa-phone-alt"></i> 01 42 06 97 07</a></p>
                <p>
                    <a href="mailto:hbconsultant@gmail.com" class="btn bg-btn">
                        Nous contacter <i class="fas fa-envelope"></i>
                    </a>
                </p>
                @if(Sentinel::guest())
                    <p>
                        <a href="{{ url('register') }}" class="btn bg-btn inscription">
                            Créer mon compte<!-- <i class="fas fa-envelope"></i> -->
                        </a>
                    </p>
                @endif
            </div>
        </div>
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('#myFile').hide();
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $("#myFile").html(fileName);
            $('#myFile').show();
        });
    });

</script>
@stop
