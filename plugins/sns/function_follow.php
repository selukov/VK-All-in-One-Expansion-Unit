<?php

	add_filter( 'the_content', 'vkExUnit_add_follow');
 // is_single()

function vkExUnit_add_follow($content){
	if (is_single()) :
	$options = vkExUnit_get_sns_options();
	// https://about.twitter.com/resources/buttons#follow
	$follow_html = '<div class="followSet vkContentAddSection">'."\n";
	$follow_html .= '<h3 class="followSet_title">最新ニュースを受け取る</h3>';
	$follow_html .= '<div class="follow_btn follow_twitter"><div class="fb-follow" data-href="'.esc_url( $options['fbPageUrl'] ).'" data-colorscheme="light" data-layout="button" data-show-faces="true"></div></div>'."\n";
	$follow_html .= '<div class="follow_btn follow_twitter"><a href="https://twitter.com/'.esc_html( $options['twitterId'] ).'" class="twitter-follow-button" data-show-count="false" data-lang="ja" data-show-screen-name="false">@'.esc_html( $options['twitterId'] ).'さんをフォロー</a></div>'."\n";
	$follow_html .= '</div><!-- [ /.followSet ] -->'."\n";
	$content .= $follow_html;

	endif;
	return $content;
}