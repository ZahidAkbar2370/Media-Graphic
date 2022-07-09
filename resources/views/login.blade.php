@extends('layouts/default')
@section('title')
    Connexion
    @parent
@stop
@section('header_styles')

@stop

@section('content')

    <section class="inscription content">
        <h1>Connexion</h1>
        <div class="inscription-choix">
            <div id="individual" class="description">
                <form id="individual-inscription" method = "post" action = "{{ url('login') }}">
                    @csrf
                    <div class="infos">
                        <input class="half" type="email" required name="email" placeholder="Email">
                        <input type="password" required name="password" placeholder="Mot de passe">
                    </div>
                    <div class="action">
                        <input class="btn bg-btn" type="submit" name="submit" value="Connexion">
                    </div>
                </form>
            </div>
        </div>
    </section>
    
   

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
