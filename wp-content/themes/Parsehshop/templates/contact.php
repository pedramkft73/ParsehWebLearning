<?php
//template name:contact
get_header();
?>

<main>

<?php  get_template_part('template-parts/single/breadcrumb') ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="<?php echo get_theme_file_uri() ?>/assets/img/GoogleMapTA.png" class="img-fluid my-1 about-us-map" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="card border-0 contact-us-p my-5">
                    <div class="card-body">
                        <h1 class="" ><i class="fas fa-dot-circle text-muted "></i>تماس با مدیریت</h1>
                        <p>
                            آدرس:‌                تهران - سعادت آباد
                            <br>
                            شماره تماس:      021 - 22 22 22
                            <br>
                            شماره موبایل:     0912222222
                            <br>
                            فکس:                 021-11111
                            <br>

                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5">
                <div class="card border-0 contact-us-form my-5">
                    <div class="card-body">
                        <h3 class="mb-5" >فرم تماس با ما</h3>

                        <form action="" class="shadow-sm mt-3 mt-lg-0">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-white">
                                        <small class="text-muted">نام و نام خانوادگی</small>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="...لطفا نام و نام خانوادگی خود را وارد نمایید">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-white">
                                        <small class="text-muted">ایمیل</small>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="...لطفا نام و نام خانوادگی خود را وارد نمایید">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-white">
                                        <small class="text-muted">شماره همراه</small>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="...لطفا نام و نام خانوادگی خود را وارد نمایید">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-white">
                                        <small class="text-muted">موضوع</small>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="...لطفا نام و نام خانوادگی خود را وارد نمایید">
                            </div>
                            <div class="form-group">
                                <textarea name="textarea" id="subject" class="form-control shadow-none" cols="30" rows="10" placeholder="متن پیام..."></textarea>
                            </div>
                        </form>
                        <div class="text-center">
                            <button class="btn mx-auto mt-4 hvr-buzz-out"> ارسال پیام</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>