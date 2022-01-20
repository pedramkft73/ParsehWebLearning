<?php
function parsehshop_comment_callback($comment, $args, $depth){ ?>

    <div class="card border-0 blog-comment mb-3 <?php echo (!empty($args['has_children']))?' parent ':' '; ?>">
        <div class="card-body">
            <div class="d-flex align-items-start mb-4">
                <div class="blog-avar">
                    <?php  echo get_avatar($comment,$args['avatar_size'],'','avatar image',['class'=>'img-fluid']); ?>
                </div>
                <div>
                    <p><?php  echo get_comment_author(); ?> گفته:</p>
                    <small class="text-muted">در تاریخ <?php echo get_comment_date(); ?> این دیدگاه ارسال شده است</small>
                </div>
            </div>
            <span>
                <?php comment_text(); ?>
            </span>
        </div>
        <div class="reply"><?php
            comment_reply_link(
                array_merge(
                    $args,
                    array(
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth']
                    )
                )
            ); ?>
        </div>
    </div>
<?php }
?>

<?php
//Comment Field Order
add_filter( 'comment_form_fields', 'parsehshop_comment_fields_custom_order' );
function parsehshop_comment_fields_custom_order( $fields ) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    // the order of fields is the order below, change it as needed:
    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
    $fields['comment'] = $comment_field;
    // done ordering, now return the fields:
    return $fields;
}

?>
