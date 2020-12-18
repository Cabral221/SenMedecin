@extends('user.layouts.app')
@section('headsection')
   
@endsection
@section('main-content')
<!-- Premiere section -->

 <div class="section-index box-shadow container sens_top">
	 <h4 class="blog_show_title">Un chevalier conduisant son cheval </h4>
	 <section class=" container sens">
		 <div class="sens_left">
	 	<p>
			<img src="{{ asset('user/img/article2.jpg') }}" alt="">
		</p>
			<div class="blog">
				<div class="blog_left">
					<ul class="tags">
						<li><a href="#">Technology,</a></li>
						<li><a href="#">Politique,</a></li>
						<li><a href="#">Culture,</a></li>
						<li><a href="#">Football,</a></li>
					</ul>
					<div class="infos">
						<!-- <p class=""><a href="#">Ousmane Diallo <i class="fa fa-user"></i></a></p> -->
						<p class=""><a href="#">12 Dec, 2017 <i class="fa fa-clock"></i></a></p>
						<p class=""><a href="#">1.2M Views <i class="fa fa-eye"></i></a></p>
						<p class=""><a href="#">06 Comments <i class="fa fa-comments"></i></a></p>
						<p class="social"> 
							<a href="#"><span> like <i class="fa fa-thumbs-up"></i></span> </a>
							<a href="#"><span>Dislike <i class="fa fa-thumbs-down"></i></span></a> 
						</p>						
					</div>
				</div>
				<div class="blog_right">
					<div class="body_header">
						<p class="article_title">Un chevalier conduisant son cheval  </p>
					
					</div>
					<p class="text">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nemo quos corporis quae porro doloribus
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nemo quos corporis quae porro doloribus
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nemo quos corporis quae porro doloribus
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nemo quos corporis quae porro doloribus
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nemo quos corporis quae porro doloribus
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nemo quos corporis quae porro doloribus
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nemo quos corporis quae porro doloribus
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nemo quos corporis quae porro doloribus
					</p>
					
				</div>
			</div>
			
			<!-- Partie pour la partie du commentaire -->
				<div class="comment">
					<form action="{{ route('comment.store') }}" method="post" class="comment_form">
						@csrf
						<div class="comment_input">
							<p>
								<input type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}"  autocomplete="full_name" autofocus id="full_name" placeholder="Votre Prenom et Nom">
								<span class="text-primary">
									@error('full_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</span>
							</p>

							<p>
								<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus id="email" placeholder="Votre Adresse E-mail">
								<span class="text-primary">
									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</span>
							</p>

						</div>
						
						<div class="text">
							<textarea class="form-control @error('comment') is-invalid @enderror" name="comment" value="{{ old('comment') }}"  autocomplete="comment" autofocus id="comment" cols="20" rows="5" placeholder="Votre Commentaire"></textarea>
							<div class="text-primary">
								@error('comment')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
						<p class="button">
							<input type="submit" class="btn-primary" value="Envoyer Votre Commentaire">
						</p>
					</form>
				</div>
			<!-- Fin de la partie pour le commentaire -->
	   </div>
	   
	   <div class="sens_right">
	   <h5 class="article_populaire">Articles Populare</h5>
			<div class="sens-body-card">
				<div class="card-img">
					<img src="{{ asset('user/img/article.jpg') }}" alt="" srcset="">
				</div>
				<div class="card-text">
					<p class="title_article"><a href="">Information sur le covid 19 jdkke dke kkdje djdkeje </a></p>
					<p class="date_article">Publier le : 12/10/2020</p>
				</div>
			</div>
			<!-- <hr> -->
			<div class="sens-body-card">
				<div class="card-img">
					<img src="{{ asset('user/img/article2.jpg') }}" alt="" srcset="">
				</div>
				<div class="card-text">
					<p class="title_article"><a href="">Information sur le covid 19 jdkke dke kkdje djdkeje </a></p>
					<p class="date_article">Publier le : 12/10/2020</p>
				</div>
			</div>
			<!-- <hr> -->
			<div class="sens-body-card">
				<div class="card-img">
					<img src="{{ asset('user/img/article.jpg') }}" alt="" srcset="">
				</div>
				<div class="card-text">
					<p class="title_article"><a href="">Information sur le covid 19 jdkke dke kkdje djdkeje </a></p>
					<p class="date_article">Publier le : 12/10/2020</p>
				</div>
			</div>
			<!-- <hr> -->
			<div class="sens-body-card">
				<div class="card-img">
					<img src="{{ asset('user/img/article2.jpg') }}" alt="" srcset="">
				</div>
				<div class="card-text">
					<p class="title_article"><a href="">Information sur le covid 19 jdkke dke kkdje djdkeje </a></p>
					<p class="date_article">Publier le : 12/10/2020</p>
				</div>
			</div>
	   </div>
   </section>
 </div>
<!-- fin de la premier section -->








@endsection