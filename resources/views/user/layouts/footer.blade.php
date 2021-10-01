
<!--footer starts from here-->
<footer class="footer">
	<div class="container bottom_border">
		<div class="footer_left">
			<h6 class="headin5_amrc col_white_amrc pt2"> <img style="width:100%;height:auto;" src="{{ asset('user/img/logo_horizontale.svg') }}" alt=""> </h6>
			<!--headin5_amrc-->
			<p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
			<p><i class="fa fa-map-marker-alt"> </i> {{ all_info()->address ?? '9878/25 sec 9 rohini 35 '}}</p>
			<p><i class="fa fa-phone"> </i>  {{ all_info()->phone  ?? '+953 012 3654 896' }} </p>
			<p><i class="fa fa-envelope"> </i> {{ all_info()->email ?? 'axxu@njurel.com'}}  </p>
		</div>


		<div class="footer_center_1">
			<h6 class="headin5_amrc col_white_amrc pt2">Liens</h6>
			<!--headin5_amrc-->
			<ul class="footer_ul_amrc">
			<li><a href="{{ route('index') }}">Acceuil</a></li>
			<li><a href="{{ route('user.about') }}">A propos</a></li>
			<li><a href="{{ route('posts.index') }}">Blog</a></li>
			<li><a href="{{ route('contact.index') }}">Contact</a></li>
			<li><a href="{{ route('patient.login') }}">Connexion Patientes</a></li>
			<li><a href="{{ route('medecin.login') }}">Connexion Medecins</a></li>
			<li><a href="{{ route('responsable.login') }}">Connexion Partenaires</a></li>
			</ul>
			<!--footer_ul_amrc ends here-->
		</div>


		<!-- <div class=" footer_center_2">
			<h6 class="headin5_amrc col_white_amrc pt2">links</h6>
			<ul class="footer_ul_amrc">
			<li><a href="#">Remove Background</a></li>
			<li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
			<li><a href="http://webenlance.com">Logo Design</a></li>
			<li><a href="http://webenlance.com">Vectorization</a></li>
			<li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
			<li><a href="http://webenlance.com">Image Cropping</a></li>
			</ul>
		</div> -->


		<div class="footer_right"> 
			<h6 class="headin5_amrc col_white_amrc pt2">S'inscrire a notre bulletin</h6>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex omnis ea laudantium corporis minima aperiam odit fugit incidunt, dolor quidem?</p>
		<!--headin5_amrc ends here-->
			<div class="bulletin">
				<form action="" class="form_bulletin">
					<div class="form_input">
						<input class="form-control" type="email" class="form-control @error('news') is-invalid @enderror" name="news" value="{{ old('news') }}" required autocomplete="news" id="news" placeholder="Votre Adresse E-mail">
						<span class="text-primary">
							@error('news')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</span>
					</div>
					<div class="button_submit">
						<button type="submit" class="fa fa-arrow-right"></button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="container footer_footer">
		<!-- <ul class="foote_bottom_ul_amrc">
			<li><a href="http://webenlance.com">Home</a></li>
			<li><a href="http://webenlance.com">A propos</a></li>
			<li><a href="http://webenlance.com">Sensibilisation</a></li>
			<li><a href="http://webenlance.com">Contact</a></li>
			<li><a href="http://webenlance.com">Se Connecter</a></li>
		</ul> -->
		<!--foote_bottom_ul_amrc ends here-->
		
		<ul class="social_footer_ul">
			<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
			<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fab fa-instagram"></i></a></li>
		</ul>
		<!--social_footer_ul ends here-->
		<p>Copyright @2020-2020 | Designed  by <a href="{{ route('admin.login') }}">EMPRO</a></p>
	</div>

</footer>