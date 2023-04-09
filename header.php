<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header>

		<div class="mx-auto container">
			<div class="lg:flex lg:justify-between lg:items-center border-b py-6">
				<div class="flex justify-between items-center">
					<div>
						<?php if ( has_custom_logo() ) { ?>
                            <?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
								<?php echo get_bloginfo( 'name' ); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div>

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
							<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
									<g id="icon-shape">
										<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
											  id="Combined-Shape"></path>
									</g>
								</g>
							</svg>
						</a>
					</div>
				</div>

				<div id="primary-menu" class="hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block">
				<div class = "lg:flex lg:-mx-4">
				<ul class="flex">
	
	<!--Regular Link-->
	<li class="hover:bg-teal-700 hover:text-white">
	  <a href="#" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">navlink</a>
	</li>
	
	<!--Toggleable Link-->
	<li class="toggleable hover:bg-teal-700 hover:text-white">
	  <input type="checkbox" value="selected" id="toggle-one" class="toggle-input">
		<label for="toggle-one" class="block cursor-pointer py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">Click to show</label>
		<div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-teal-700">
		  <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
			<ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
			  <h3 class="font-bold text-xl text-white text-bold mb-2">Bespin</h3>
			  <li>
				<a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Lando Calrissian</a>
			  </li>
			  <li>
				<a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Nien Nunb</a>
			  </li>
			  <li>
				<a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Mon Mothma</a>
			  </li>
			  <li>
				<a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Wedge Antilles</a>
			  </li>
			  <li>
				<a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Admiral Gial Ackbar</a>
			  </li>
			</ul>
			<ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
			  <h3 class="font-bold text-xl text-white text-bold mb-2">Ahch-To</h3>
			  <li>
				<a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Obi-Wan Kenobi</a>
			  </li>
			  <li>
				<a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Yoda</a>
			  </li>
			  <li>
				<a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Emperor Palpatine</a>
			  </li>
			  <li>
				<a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Han Solo</a>
			  </li>
			  <li>
				<a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Anakin Skywalker/Darth Vader</a>
			  </li>
			</ul>
			<ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
			  <h3 class="font-bold text-xl text-white text-bold">Coruscant</h3>
			  <li>
				<a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Luke Skywalker</a>
			  </li>
			  <li>
				<a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Princess Leia</a>
			  </li>
			  <li>
				<a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">Chewbacca</a>
			  </li>
			  <li>
				<a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">R2-D2</a>
			  </li>
			  <li>
				<a href="#" class="block p-3 hover:bg-teal-900 text-gray-300 hover:text-white">C-3PO</a>
			  </li>
			</ul>
			<ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
			  <h3 class="font-bold text-xl text-white text-bold mb-2">Endor</h3>
			  <li class="pt-3">
				<img src="https://placehold.it/205x172">
				</li>
			  </ul>
			</div>
		  </div>
		</li>
	<!-- end Toggleable Link-->

		
		<!--Hoverable Link-->
		<li class="hoverable hover:bg-teal-700 hover:text-white">
		  <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold hover:bg-teal-700 hover:text-white">Hover to show</a>
		  <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-teal-700">
			<div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
			  <div class="w-full text-white mb-8 text-center">
				<h2 class="font-bold text-2xl">Listen, why don’t you wait out by the speeder.</h2>
				<p>our droids. They’ll have to wait outside. We don’t want them here.</p>
			  </div>
			  <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
				<div class="flex items-center">
				  <svg class="h-8 mb-3 mr-3 fill-current text-white"
					xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M3 6c0-1.1.9-2 2-2h8l4-4h2v16h-2l-4-4H5a2 2 0 0 1-2-2H1V6h2zm8 9v5H8l-1.67-5H5v-2h8v2h-2z"/>
				  </svg>
				  <h3 class="font-bold text-xl text-white text-bold mb-2">Tatooine</h3>
				</div>
				<p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
				<div class="flex items-center py-3">
				  <svg class="h-6 pr-3 fill-current text-teal-300"
					xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
				  </svg>
				  <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
				</div>
			  </ul>
			  <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
				<div class="flex items-center">
				  <svg class="h-8 mb-3 mr-3 fill-current text-white"
					xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M4.13 12H4a2 2 0 1 0 1.8 1.11L7.86 10a2.03 2.03 0 0 0 .65-.07l1.55 1.55a2 2 0 1 0 3.72-.37L15.87 8H16a2 2 0 1 0-1.8-1.11L12.14 10a2.03 2.03 0 0 0-.65.07L9.93 8.52a2 2 0 1 0-3.72.37L4.13 12zM0 4c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4z"/>
				  </svg>
				  <h3 class="font-bold text-xl text-white text-bold mb-2">Cantonica</h3>
				</div>
				<p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
				<div class="flex items-center py-3">
				  <svg class="h-6 pr-3 fill-current text-teal-300"
					xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
				  </svg>
				  <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
				</div>
			  </ul>
			  <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
				<div class="flex items-center">
				  <svg class="h-8 mb-3 mr-3 fill-current text-white"
					xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/>
				  </svg>
				  <h3 class="font-bold text-xl text-white text-bold mb-2">Yavin 4</h3>
				</div>
				<p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
				<div class="flex items-center py-3">
				  <svg class="h-6 pr-3 fill-current text-teal-300"
					xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
				  </svg>
				  <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
				</div>
			  </ul>
			  <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
				<div class="flex items-center">
				  <svg class="h-8 mb-3 mr-3 fill-current text-white"
					xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/>
				  </svg>
				  <h3 class="font-bold text-xl text-white text-bold mb-2">Alderaan</h3>
				</div>
				<p class="text-gray-100 text-sm">Thul klivian doldur thisspiasian calrissian. Garindan d8 aurra twi'lek tund polis gen'dai sola tarpals.</p>
				<div class="flex items-center py-3">
				  <svg class="h-6 pr-3 fill-current text-teal-300"
					xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
					<path d="M20 10a10 10 0 1 1-20 0 10 10 0 0 1 20 0zm-2 0a8 8 0 1 0-16 0 8 8 0 0 0 16 0zm-8 2H5V8h5V5l5 5-5 5v-3z"/>
				  </svg>
				  <a href="#" class="text-white bold border-b-2 border-teal-300 hover:text-teal-900">Find out more...</a>
				</div>
			  </ul>
			</div>
		  </div>
		</li>
	<!--end Hoverable Link-->

	  </ul>

				</div>

				</div>

			</div>
		</div>
	</header>

	<div id="content" class="site-content flex-grow">

		<?php if ( is_front_page() ) { ?>
			<!-- Start introduction -->
			<div class="container mx-auto">
				<div class="px-12 py-16 my-12 rounded-xl bg-gradient-to-r from-blue-50 from-10% via-sky-100 via-30% to-blue-200 to-90%">
                    <div class="mx-auto max-w-screen-md">
                        <h1 class="text-3xl lg:text-6xl tracking-tight font-extrabold text-gray-800 mb-6">Start building your next <a href="https://tailwindcss.com" class="text-secondary">Tailwind CSS</a> flavoured WordPress theme
                            with <a href="https://tailpress.io" class="text-primary">TailPress</a>.</h1>
                        <p class="text-gray-600 text-xl font-medium mb-10">TailPress is your go-to starting
                            point for developing WordPress themes with Tailwind CSS and comes with basic block-editor support out
                            of the box.</p>
                        <a href="https://github.com/jeffreyvr/tailpress"
                            class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">View
                            on GitHub</a>
                    </div>
                </div>
			</div>
			<!-- End introduction -->
		<?php } ?>

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
