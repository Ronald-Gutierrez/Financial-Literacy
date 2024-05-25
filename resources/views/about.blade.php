@extends('layouts.app')
@section('css')
@parent
<style>
    .bg-primary {
        background: #380d62 !important;
    }
    
</style>
@endsection
@section('body')
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
    @include('layouts.footer')
@endsection