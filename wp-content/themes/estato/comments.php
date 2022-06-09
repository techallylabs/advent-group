<?php

if ( post_password_required() ) {
	return;
}

function boldthemes_comment_form_before() {
    ob_start();
}
add_action( 'comment_form_before', 'boldthemes_comment_form_before' );

function boldthemes_comment_form_after() {
    $html = ob_get_clean();
    echo preg_replace(
        '/<h3 id="reply-title"(.*)>(.*)<\/h3>/',
        '<h4 id="reply-title"\1>\2</h4>',
        $html
    );
}
add_action( 'comment_form_after', 'boldthemes_comment_form_after' );

?>

<div id="comments" class="btCommentsBox">

	<?php if ( have_comments() ) : ?>

	<h4>
		<?php
			printf( _n( 'One comment', '%1$s comments', get_comments_number(), 'estato' ), number_format_i18n( get_comments_number() ), get_the_title() );
		?>
	</h4>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<?php 
			$prev_html = get_previous_comments_link( esc_html__( 'Older Comments', 'estato' ) );
			$next_html = get_next_comments_link( esc_html__( 'Newer Comments', 'estato' ) );
			if ( $prev_html != '' && $next_html != '' ) {
				echo get_previous_comments_link( esc_html__( 'Older Comments', 'estato' ) );
				echo '<span>|</span>';
				echo get_next_comments_link( esc_html__( 'Newer Comments', 'estato' ) );
			} else {
				echo get_previous_comments_link( esc_html__( 'Older Comments', 'estato' ) );
				echo get_next_comments_link( esc_html__( 'Newer Comments', 'estato' ) );
			}
			?>
		</nav><!-- #comment-nav-above -->
	<?php endif; // Check for comment navigation. ?>

	<ul class="comments">
		<?php
			wp_list_comments( array(
				'style'      => 'ul',
				'short_ping' => true,
				'callback'   => 'boldthemes_theme_comment'
			) );
		?>
	</ul><!-- .comments -->

	<?php if ( ! comments_open() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'estato' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php 
	
		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );
	
		$fields =  array(
			'author' =>
				'<div class="pcItem"><label for="author">' . esc_html__( 'Name', 'estato' ) . ( $req ? ' *' : '' ) . '</label>
				<p><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
				'" ' . $aria_req . ' /></p></div>',

			'email' =>
				'<div class="pcItem"><label for="email">' . esc_html__( 'Email', 'estato' ) . ( $req ? ' *' : '' ) . '</label>
				<p><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				'" ' . $aria_req . ' /></p></div>',

			'url' =>
				'<div class="pcItem"><label for="url">' . esc_html__( 'Website', 'estato' ) . '</label>' .
				'<p><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></p></div>',
		);
	
		$args = array(
		  'id_form'           => 'commentform',
		  'id_submit'         => 'submit',
		  'title_reply'       => esc_html__( 'Leave a Reply', 'estato' ),
		  'title_reply_to'    => esc_html__( 'Leave a Reply to %s', 'estato' ),
		  'cancel_reply_link' => esc_html__( 'Cancel Reply', 'estato' ),
		  'label_submit'      => esc_html__( 'Post Comment', 'estato' ),
		  
		  'submit_button' => '<button type="submit" value="' . esc_html__( 'Post Comment', 'estato' ) . '" id="btSubmit" class="btBtn btnOutlineStyle btnExtraSmall btnNormal btnNormalColor btnIco" name="submit" data-ico-fa="&#xf1d8;">' . esc_html__( 'Post Comment', 'estato' ) . '</button>',

		  'comment_field' =>  '<div class="pcItem btComment"><label for="comment">' . _x( 'Comment', 'noun', 'estato' ) .
			'</label><p><textarea id="comment" name="comment" cols="30" rows="8" aria-required="true">' .
			'</textarea></p></div>',

		  'must_log_in' => '<p class="must-log-in">' .
			sprintf(
				wp_kses( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'estato' ), array( 'a' => array() ) ),
				wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
			) . '</p>',

		  'logged_in_as' => '<p class="logged-in-as">' .
			sprintf(
				wp_kses( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'estato' ), array( 'a' => array() ) ),
				admin_url( 'profile.php' ),
				$user_identity,
				wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
			) . '</p>',

		  'comment_notes_before' => '<p class="comment-notes">' .
			esc_html__( 'Your email address will not be published.', 'estato' ) . ' ' . ( $req ? esc_html__( 'Required fields are marked *', 'estato' ) : '' ) .
			'</p>',

		  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
		);
		comment_form( $args );
	?>

</div><!-- #comments -->