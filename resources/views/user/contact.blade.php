@extends('user.layouts.app')
@section('headsection')
   
@endsection
@section('main-content')

<section class="container">
    <div class="banier-contact ">
        <h1>Contact US</h1>
    </div>
</section>

<section class="container"> 
    <div class="contact-group">
        <div class="contact-form">
            <form action="" method="post">
                
                  <div class="form_group">
                   <p> <label for="">Prenom et Nom</label></p>
                    <input type="text" name="" id="">
                  </div>
                  
                 
                   <div class="form_group">
                  <p> <label for="">E-mail Adresse</label></p>
                    <input type="email" name="" id="">
                   </div>
                   
                   
                   <div class="form_group">
                   <p><label for="">Votre Objet</label></p>
                    <input type="text" name="" id="">
                   </div>
                
                   <div class="form_group">
                  <p> <label for="">Message</label></p>
                    <textarea name="" id="" cols="20" rows="5"></textarea>
                   </div>
                   
                <input class="button_contact" type="submit" value="Envoyer">
                   
            </form>
        </div>
        <div class="google-map">
            <h1>
                Google Map
            </h1>
        </div>
    </div>
</section>

@endsection