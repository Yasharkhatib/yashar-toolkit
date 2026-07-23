<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class YTK_Loader {

	public function run() {

		require_once YTK_PATH . 'modules/posts-grid/class-post-grid.php';

		$post_grid = new YTK_Post_Grid();

	}

}