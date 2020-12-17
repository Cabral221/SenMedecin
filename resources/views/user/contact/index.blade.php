@extends('user.layouts.app')
@section('headsection')
   
@endsection
@section('main-content')

<div class="box-shadow section-index container">
<section class="">
    <div class="banier-contact ">
        <h1>Contact US</h1>
    </div>
</section>

<section class="contact_section"> 
    <form action="" class="contact_form" method="post">
        
        <div class="form_left">
            <div class="form_group">
                <p> <label for="">Prenom et Nom <i class="fa fa-user"></i></label></p>
                <input type="text" name="" id="">
            </div>
            
            
            <div class="form_group">
                <p> <label for="">E-mail Adresse <i class="fa fa-envelope"></i></label></p>
                <input type="email" name="" id="">
            </div>
            
            
            <div class="form_group">
            <p><label for="">Votre Objet <i class="fa fa-envelope"></i></label></p>
            <input type="text" name="" id="">
            </div>
        </div>
        
        <div class="form_right">
            <div class="form_group">
                <p> <label for="">Message <i class="fa fa-comment"></i></label></p>
                <textarea name="" id="" cols="20" rows="5"></textarea>
            </div>
        
            <input class="button_contact" type="submit" value="Envoyer">
        </div>
            
    </form>
    <div class="infos_contact">
        <div class="content">
            <p><i class="fa fa-envelope"></i> <span class="icon_name">axxu-njurel@njurel.com</span></p>
            <p><i class="fa fa-phone"></i> <span class="icon_name">+221 33 987 34 89</span></p>
            <p><i class="fa fa-location-arrow"></i> <span class="icon_name"> Ecole Biscuiterie</span></p>
        </div>
    </div>
</section>

<section class="google-map">
    
</section>
</div>

@endsection