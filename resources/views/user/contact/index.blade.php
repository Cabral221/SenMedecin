@extends('user.layouts.app')
@section('headsection')
   
@endsection
@section('main-content')

<div class="box-shadow section-index container">
    <section class="banier_border">
        <div class="banier-contact ">
            <h1>Contact US</h1>
        </div>
    </section>

    <section class="contact_section "> 
        <form action="{{ route('contact.store') }}" class="contact_form" method="post">
            @csrf
            <div class="form_left">
                <div class="form_group">
                    <p> <label for="">Prenom et Nom <i class="fa fa-user"></i></label></p>
                    <input class="form-control" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="name" placeholder="">
                    <div class="text-primary">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                
                <div class="form_group">
                    <p> <label for="">E-mail Adresse <i class="fa fa-envelope"></i></label></p>
                    <input class="form-control" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" placeholder="">
                    <div class="text-primary">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                
                <div class="form_group">
                    <p><label for="">Votre Objet <i class="fa fa-closed-captioning"></i></label></p>
                    <input class="form-control" type="text" class="form-control @error('object') is-invalid @enderror" name="object" value="{{ old('object') }}" required autocomplete="object" autofocus id="object" placeholder="">
                    <div class="text-primary">
                        @error('object')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="form_right">
                <div class="form_group">
                    <p> <label for="">Message <i class="fa fa-comment"></i></label></p>
                    <textarea class="form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" required autocomplete="content" autofocus id="content" cols="20" rows="5"></textarea>
                    <div class="text-primary">
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
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

      <div class="google_map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.0256905628767!2d-17.450650285857595!3d14.711139278303794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173eabb264a3f%3A0x3b03193b00bf067c!2sEMPRO%20SN!5e0!3m2!1sfr!2ssn!4v1608318238378!5m2!1sfr!2ssn" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
  
</div>

@endsection