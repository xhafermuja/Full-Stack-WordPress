<?php $comment_args = array(
        'title_reply' => __( 'Leave a comment', 'usablewp'  ),
        'comment_notes_before'  => '<p class="required-message company-comments">'. __( 'Fields with ( * ) are required', 'usablewp' ) .'</p>',
        'comment_field' => '<div class="form-inputs company-field">' .
            '<label for="comment" class="company-label">' . __( 'Type your comment here:  *', 'usablewp' ) . '</label>' .
            '<textarea id="comment-text" name="comment" cols="45" rows="6" aria-required="true" placeholder="Message"></textarea>' .
            '</div>',
        'comment_notes_after'       => '',
        );
        ?>
<?php comment_form( $comment_args ); ?>
