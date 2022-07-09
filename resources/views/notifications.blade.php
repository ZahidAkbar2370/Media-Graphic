@if ($errors->any())
<div class="alert alert-danger alert-dismissable margin5">
  <strong>Erreur:</strong> Veuillez vérifier le formulaire ci-dessous pour les erreurs
</div>
@endif

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissable margin5">
    <strong>Succès:</strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissable margin5">
    <strong>Erreur:</strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissable margin5">
    <strong>Avertissement:</strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-dismissable margin5">
    <strong>Info:</strong> {{ $message }}
</div>
@endif
