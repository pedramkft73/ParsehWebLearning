<?php
//template name: FAQ
get_header();
?>



<main>

    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <div class="card mybread-card my-5 ">
                    <div class="card-body d-flex flex-column flex-lg-row justify-content-between align-content-center"  >
                        <div class="breadcrumb mycustom-breadcrumb">
                            <a href="#" class="breadcrumb-item active  text-muted"> صفحه اصلی</a>
                            <a href="#" class="breadcrumb-item text-muted"> درباره ما</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-12 text-center my-4">
                <h1 class="d-block" style="font-size: 31px;
    color: #6B6A6A;">سوالات متداول</h1>
                <small class="d-block text-muted my-4" style="font-size: 16px;
    letter-spacing: 3px;">Frequently Asked Questions</small>
            </div>
        </div>
        <div class="row">
            <div class="col-12 faq-myacc">
                <div class="accordion mb-4" id="accordionExample">
                    <div class="accordion-item mt-4">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                ضمانت بازگشت کالا ها به چه صورت است؟ و چطور میتوانم مرجوع کنم؟
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشت
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-4">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                ضمانت بازگشت کالا ها به چه صورت است؟ و چطور میتوانم مرجوع کنم؟
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشت
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-4">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                ضمانت بازگشت کالا ها به چه صورت است؟ و چطور میتوانم مرجوع کنم؟
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشت
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 mt-5">
                <div class="bold text-center mb-4">
                    <h5 class="d-block text-center" style="font-size: 16px;
    color: #6B6A6A;">در صورت پیدا نکردن پاسخ سوال خود با ما تماس بگیرید:</h5>
                </div>
                <div class="card border-0 cu-service">
                    <div class="card-body d-flex flex-column flex-lg-row align-items-center" >
                        <div class="flex-grow-1 text-center first">
                            <img src="img/gmail.png" class="img-fluid mx-auto d-block" alt="">
                            <a href="#" class="mt-3 d-block px-4 py-1 hvr-buzz">ارسال پیام</a>
                        </div>
                        <div class="flex-grow-1 text-center second">
                            <img src="img/images.png" class="img-fluid mx-auto d-block" alt="">
                            <a href="#" class="mt-3 d-block ">021- 22222222 - 5</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php  get_footer(); ?>