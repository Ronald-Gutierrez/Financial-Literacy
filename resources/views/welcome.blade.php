@extends('layouts.app')
@section('css')
@parent
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');

/* Main Styling */
html,
body {
	font-family: 'Montserrat', sans-serif;
}

/* Bootstrap Styles */
.bg-primary {
	background: #380d62 !important;
}
.bg-secondary {
	background: #fdf9ff !important;
}

/* Utility Classes */
.py-6 {
	padding: 120px 0;
}

.py-7 {
	padding: 80px 0;
}

header {
	background-image: linear-gradient(to right, #380d62, #10054a);
}

/* Mobile */
@media (max-width: 768px) {
	.py-6 {
		padding: 50px 0;
	}
	.py-7 {
		padding: 60px 0;
	}
	.steps .pb-4 {
		padding-right: 80px !important;
	}
}
</style>
@endsection
@section('body')
    <header class="text-white ">
        <div class="showcase py-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="display-3 text-capitalize fw-semibold">Manage your budget and financial future</h1>
                        <p class="lead py-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et, expedita eum veritatis debitis
                            pariatur animi doloribus consectetur provident vero officia deserunt repellat. Fugit, ab.
                        </p>
                        <a href="#steps" class="btn btn-warning text-white px-5">About 7 Steps</a>
                    </div>
                    <div class="col-md-5">
                        <div class="image-container mb-5 px-4">
                            <img src="/img/showcase.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    
        <!-- About -->
		<section class="about py-7">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2 text-center">
						<h2 class="text-capitalize pb-3">Why you should start a budget</h2>
						<p class="text-muted small">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. A sequi vitae quis nisi dolor, numquam culpa
							autem aut! Obcaecati nam expedita quam, labore exercitationem quidem magnam est rerum veritatis reiciendis
							quia. Quidem pariatur sit nemo placeat ea eveniet voluptatibus est fugiat esse, veritatis modi at sint
							nisi nam. Eius quis debitis, molestiae, illum libero neque vitae obcaecati cumque nulla quod corrupti
							asperiores labore qui sit voluptatum? Ab sunt eaque officiis autem doloribus quidem suscipit incidunt
							quia, minus ducimus, nesciunt facilis enim rem laborum quod saepe ipsam aut aspernatur. Rerum,
							consequuntur!
						</p>
						<p class="text-muted small">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, soluta. Suscipit repudiandae cum
							voluptatum maxime voluptatibus! Quisquam harum a ducimus, molestias voluptatem vel aperiam porro amet
							corporis adipisci libero unde corrupti odio consequatur quis nam quaerat et? Doloribus, esse velit! Sint
							voluptatum vero pariatur corporis fugiat nisi dolor culpa totam repellendus, eveniet eum ad reiciendis quo
							odit sit consequuntur. Sint et nemo dicta distinctio culpa?
						</p>
					</div>
				</div>
			</div>
		</section>

		<!-- 7 Steps -->
		<section class="steps bg-secondary py-7">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="text-capitalize text-center pb-5">The 7 baby steps of dave ramsey</h2>
						<div class="row pb-4">
							<div class="col-4">
								<p class="text-end"><span class="bg-primary text-light py-2 px-3 rounded-circle">1</span></p>
							</div>
							<div class="col-8">
								<p class="fw-light">
									<span class="fw-semibold">Step 1:</span> Save $1,000 for your starter emergency fund.
								</p>
							</div>
						</div>
						<div class="row pb-4">
							<div class="col-4">
								<p class="text-end"><span class="bg-primary text-light py-2 px-3 rounded-circle">2</span></p>
							</div>
							<div class="col-8">
								<p class="fw-light">
									<span class="fw-semibold">Step 2:</span> Pay off all debt (except the house) using the debt snowball.
								</p>
							</div>
						</div>
						<div class="row pb-4">
							<div class="col-4">
								<p class="text-end"><span class="bg-primary text-light py-2 px-3 rounded-circle">3</span></p>
							</div>
							<div class="col-8">
								<p class="fw-light">
									<span class="fw-semibold">Step 3:</span> Save 3–6 months of expenses in a fully funded emergency fund.
								</p>
							</div>
						</div>
						<div class="row pb-4">
							<div class="col-4">
								<p class="text-end"><span class="bg-primary text-light py-2 px-3 rounded-circle">4</span></p>
							</div>
							<div class="col-8">
								<p class="fw-light">
									<span class="fw-semibold">Step 4:</span> Invest 15% of your household income in retirement.
								</p>
							</div>
						</div>
						<div class="row pb-4">
							<div class="col-4">
								<p class="text-end"><span class="bg-primary text-light py-2 px-3 rounded-circle">5</span></p>
							</div>
							<div class="col-8">
								<p class="fw-light"><span class="fw-semibold">Step 5:</span> Save for your children’s college fund</p>
							</div>
						</div>
						<div class="row pb-4">
							<div class="col-4">
								<p class="text-end"><span class="bg-primary text-light py-2 px-3 rounded-circle">6</span></p>
							</div>
							<div class="col-8">
								<p class="fw-light"><span class="fw-semibold">Step 6:</span> Pay off your home early.</p>
							</div>
						</div>
						<div class="row pb-4">
							<div class="col-4">
								<p class="text-end"><span class="bg-primary text-light py-2 px-3 rounded-circle">7</span></p>
							</div>
							<div class="col-8">
								<p class="fw-light"><span class="fw-semibold">Step 7:</span> Build wealth and give.</p>
							</div>
						</div>
						<div class="text-center">
							<a
								href="https://www.ramseysolutions.com/dave-ramsey-7-baby-steps"
								target="_blank"
								class="btn btn-warning text-white px-5"
								>Learn More</a
							>
						</div>
					</div>
				</div>
			</div>
		</section>
    @include('layouts.footer')
@endsection