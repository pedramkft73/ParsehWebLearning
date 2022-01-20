<div class="view">
    <p><?php echo get_comments_number() ?> دیدگاه برای مطلب
        <strong><?php the_title() ?></strong>
        ارسال شده است.
    </p>
    <?php
    wp_list_comments( array(
        'short_ping'  => true,
        'avatar_size' => 74,
        'callback'=> 'parsehshop_comment_callback'
    ) );
?>

        <div class="">
            <div class="pagination">
                <?php paginate_comments_links(); ?>
            </div>
        </div>

</div><!-- .comment-list -->

<div class="form-comment mt-5">
    <?php
    $author=' <div class="input-group mt-4">
            <div class="input-group-prepend">
                <div class="input-group-text bg-light">
                    <small>نام و نام خانوادگی</small>
                </div>
            </div>
            <input type="text" name="author" class="form-control" placeholder="لطفا نام و نام خانوادگی خود را وارد نمایید...">
        </div>';
    $email='<div class="input-group mt-2">
            <div class="input-group-prepend">
                <div class="input-group-text bg-light">
                    <small>ایمیل</small>
                </div>
            </div>
            <input type="text" name="email" class="form-control" placeholder="لطفا نام و نام خانوادگی خود را وارد نمایید...">
        </div>';
    $texterea='<div class="form-group">
            <textarea name="" id="" class="form-control mt-3 shadow-none" style="border-radius: 7px;" placeholder="متن مورد نظر شما..." cols="30" rows="10"></textarea>
        </div>';

    $comments_args=array(
        'fields'=>array(
            'author'=>$author,
            'email'=>$email,
        ),
        'comment_field'=>$texterea,
        'label_submit'=> 'ثبت نظر',
        'class_form'=>'sidebar-widget shadow-none mt-3',
        'class_submit'=>'btn hvr-wobble-bottom mt-3',
        'title_reply'=>'دیدگاهتان را بنویسید:',
        'comment_notes_before'=>' <small class="d-block text-muted mt-3">نشانی ایمیل شما منتشر نخواهد شد. لطفا تمام کادر ها را با دقت پر کنید و در نهایت دکمه ارسال را بزنید</small>'
    );
    comment_form( $comments_args  );


    ?>
</div>




