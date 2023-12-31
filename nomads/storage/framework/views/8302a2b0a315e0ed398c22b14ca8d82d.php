<?php $__env->startSection('title'); ?>
    NOMADS
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Header -->
    <header class="text-center">
        <h1>
            Explore The Beautiful World
            <br />
            As Easy One Click
        </h1>
        <p class="mt-3">
            You will see beautiful
            <br />
            moment you never see before
        </p>
        <a href="#Popular" class="btn btn-get-started px-4 mt-4"> Get Started </a>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Statisctic -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <!-- Popular Header -->
        <section class="section-popular" id="Popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>
                            Something that you never try
                            <br />
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Content -->
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url(frontend/images/travel-1.jpg)">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">DERATAN, BALI</div>
                            <div class="travel-button mt-auto">
                                <a href="<?php echo e(url('/detail')); ?>" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url(frontend/images/travel-2.jpg)">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">BROMO, MALANG</div>
                            <div class="travel-button mt-auto">
                                <a href="<?php echo e(url('/detail')); ?>" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url(frontend/images/travel-3.jpg)">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">NUSA PENIDA</div>
                            <div class="travel-button mt-auto">
                                <a href="<?php echo e(url('/detail')); ?>" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url(frontend/images/travel-4.jpg)">
                            <div class="travel-country">MIDDLE EAST</div>
                            <div class="travel-location">DUBAI</div>
                            <div class="travel-button mt-auto">
                                <a href="<?php echo e(url('/detail')); ?>"class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Network -->
        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>
                            Companies are trusted us
                            <br />
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="<?php echo e(url('frontend/images/logos_partner.png')); ?>" alt="Logo Partner" class="img-partner" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="section-testimonial">
            <section class="section-testimonial-heading" id="testimonialsHeading">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2>They Are Loving Us</h2>
                            <p>
                                Moments were giving them
                                <br />
                                the best experience
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section-testimonial-content" id="testimonialContent">
                <div class="container">
                    <div class="section-popular-travel row justify-content-center">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonial text-center">
                                <div class="testimonial-content">
                                    <img src="<?php echo e(url('frontend/images/avatar-4.png')); ?>" alt="user"
                                        class="mb-4 rounded-circle" />
                                    <h3 class="mb-4">Fazril Arief Nugraha</h3>
                                    <p class="testimonial">
                                        “ It was glorious and I could not stop to say wohooo for
                                        every single moment Dankeeeeee “
                                    </p>
                                </div>
                                <hr />
                                <p class="trip-to mt-2">Trip to Ubud</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonial text-center">
                                <div class="testimonial-content">
                                    <img src="<?php echo e(url('frontend/images/avatar-2.png')); ?>" alt="user"
                                        class="mb-4 rounded-circle" />
                                    <h3 class="mb-4">Shayna</h3>
                                    <p class="testimonial">
                                        “ The trip was amazing and I saw something beautiful in
                                        that Island that makes me want to learn more “
                                    </p>
                                </div>
                                <hr />
                                <p class="trip-to mt-2">Trip to Nusa Penida</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="card card-testimonial text-center">
                                <div class="testimonial-content">
                                    <img src="<?php echo e(url('frontend/images/avatar-3.png')); ?>" alt="user"
                                        class="mb-4 rounded-circle" />
                                    <h3 class="mb-4">Shabrina</h3>
                                    <p class="testimonial">
                                        “ I loved it when the waves was shaking harder — I was
                                        scared too “
                                    </p>
                                </div>
                                <hr />
                                <p class="trip-to mt-2">Trip to Karimun Jawa</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 text-center">
                            <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                                I Need Help
                            </a>
                            <a href="#Popular" class="btn btn-get-started px-4 mt-4 mx-1">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ThinkPad T480s\OneDrive - Microsoft 365\Learning\BWA\nomads-template\nomads\resources\views/pages/home.blade.php ENDPATH**/ ?>