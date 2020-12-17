
<!--footer starts from here-->
<footer class="footer">
	<div class="container bottom_border">
		<div class="footer_left">
			<h6 class="headin5_amrc col_white_amrc pt2"> <img style="width:100%;height:auto;" src="{{ asset('user/img/logo_horizontale.svg') }}" alt=""> </h6>
			<!--headin5_amrc-->
			<p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
			<p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
			<p><i class="fa fa-phone"></i>  +91-9999878398  </p>
			<p><i class="fa fa-envelope"></i> info@example.com  </p>
		</div>


		<div class="footer_center_1">
			<h6 class="headin5_amrc col_white_amrc pt2">Liens</h6>
			<!--headin5_amrc-->
			<ul class="footer_ul_amrc">
			<li><a href="{{ route('index') }}">Acceuil</a></li>
			<li><a href="{{ route('user.about') }}">A propos</a></li>
			<li><a href="{{ route('posts.index') }}">Blog</a></li>
			<li><a href="{{ route('user.contact') }}">Contact</a></li>
			<li><a href="{{ route('patient.login') }}">Patientes</a></li>
			<li><a href="{{ route('medecin.login') }}">Medecins</a></li>
			<li><a href="{{ route('responsable.login') }}">Partenaires</a></li>
			</ul>
			<!--footer_ul_amrc ends here-->
		</div>


		<!-- <div class=" footer_center_2">
			<h6 class="headin5_amrc col_white_amrc pt2">links</h6>
			<ul class="footer_ul_amrc">
			<li><a href="http://webenlance.com">Remove Background</a></li>
			<li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
			<li><a href="http://webenlance.com">Logo Design</a></li>
			<li><a href="http://webenlance.com">Vectorization</a></li>
			<li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
			<li><a href="http://webenlance.com">Image Cropping</a></li>
			</ul>
		</div> -->


		<div class="footer_right"> 
			<h6 class="headin5_amrc col_white_amrc pt2">Retrouvez Nous</h6>
		<!--headin5_amrc ends here-->

			<ul class="footer_ul2_amrc">
				<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Twetter <a href="#">www.twitter.com</a></p></li>
				<li><a href="#"><i class="fab fa-facebook fleft padding-right"></i> </a><p>Facebook <a href="#">www.facebook.com</a></p></li>
				<li><a href="#"><i class="fab fa-instagram fleft padding-right"></i> </a><p> Instagram <a href="#">www.instagram.com</a></p></li>
				<li><a href="#"><i class="fab fa-youtube fleft padding-right"></i> </a><p> youtube <a href="#">www.youtube.com</a></p></li>
			</ul>
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
			<li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
			<li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
			<li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
			<li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
		</ul>
		<!--social_footer_ul ends here-->
		<p>Copyright @2020-2020 | Designed With by <a href="{{ route('admin.login') }}">EMPRO</a></p>
	</div>

</footer>


@section('footersection')

@show