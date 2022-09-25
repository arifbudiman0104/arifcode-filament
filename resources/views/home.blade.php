@extends('layouts.main')
@section('container')
<div class="bg-gray-900">

    {{-- <h1 class="text-white">Halaman Home</h1> --}}
    <section class="dark:bg-gray-800 dark:text-gray-100">
        <div class="container mx-auto flex flex-col items-center px-4 py-16 text-center md:py-32 md:px-10 lg:px-32 xl:max-w-3xl">
            <h1 class="text-4xl font-bold leading-none sm:text-5xl">Quisquam necessita vel
                <span class="dark:text-violet-400">laborum doloribus</span>delectus
            </h1>
            <p class="px-8 mt-8 mb-12 text-lg">Cupiditate minima voluptate temporibus quia? Architecto beatae esse ab amet vero eaque explicabo!</p>
            <div class="flex flex-wrap justify-center">
                <button class="px-8 py-3 m-2 text-lg font-semibold rounded dark:bg-violet-400 dark:text-gray-900">Get started</button>
                <button class="px-8 py-3 m-2 text-lg border rounded dark:text-gray-50 dark:border-gray-700">Learn more</button>
            </div>
        </div>
    </section>
</div>
<section class="py-6 dark:bg-violet-400 dark:text-gray-900">
	<div class="container mx-auto flex flex-col items-center justify-center p-4 space-y-8 md:p-10 md:px-24 xl:px-48">
		<h1 class="text-5xl font-bold leading-none text-center">Something totally different</h1>
		<p class="pt-2 pb-8 text-xl font-medium text-center">Eum omnis itaque harum at quae sequi unde similique alias asperiores totam. Ex cumque maxime harum doloremque, tempore nam fugiat aspernatur rerum ipsa unde est modi commodi molestias maiores eveniet eius esse asperiores neque dicta ea quisquam? Excepturi sapiente officiis explicabo ab?</p>
		<button class="px-8 py-3 text-lg font-semibold rounded dark:bg-gray-800 dark:text-gray-50">Learn more</button>
	</div>
</section>
<footer class="px-4 py-8 dark:bg-gray-800 dark:text-gray-400">
	<div class="container flex flex-wrap items-center justify-center mx-auto space-y-4 sm:justify-between sm:space-y-0">
		<div class="flex flex-row pr-3 space-x-4 sm:space-x-8">
			<div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-full dark:bg-violet-400">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-5 h-5 rounded-full dark:text-gray-900">
					<path d="M18.266 26.068l7.839-7.854 4.469 4.479c1.859 1.859 1.859 4.875 0 6.734l-1.104 1.104c-1.859 1.865-4.875 1.865-6.734 0zM30.563 2.531l-1.109-1.104c-1.859-1.859-4.875-1.859-6.734 0l-6.719 6.734-6.734-6.734c-1.859-1.859-4.875-1.859-6.734 0l-1.104 1.104c-1.859 1.859-1.859 4.875 0 6.734l6.734 6.734-6.734 6.734c-1.859 1.859-1.859 4.875 0 6.734l1.104 1.104c1.859 1.859 4.875 1.859 6.734 0l21.307-21.307c1.859-1.859 1.859-4.875 0-6.734z"></path>
				</svg>
			</div>
			<ul class="flex flex-wrap items-center space-x-4 sm:space-x-8">
				<li>
					<a rel="noopener noreferrer" href="#">Terms of Use</a>
				</li>
				<li>
					<a rel="noopener noreferrer" href="#">Privacy</a>
				</li>
			</ul>
		</div>
		<ul class="flex flex-wrap pl-3 space-x-4 sm:space-x-8">
			<li>
				<a rel="noopener noreferrer" href="#">Instagram</a>
			</li>
			<li>
				<a rel="noopener noreferrer" href="#">Facebook</a>
			</li>
			<li>
				<a rel="noopener noreferrer" href="#">Twitter</a>
			</li>
		</ul>
	</div>
</footer>

@endsection
