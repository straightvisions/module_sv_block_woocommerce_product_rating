<?php
	echo $_s->build_css(
		'.wc-block-components-product-image',
		array_merge(
			$module->get_setting('padding')->get_css_data('padding'),
			$module->get_setting('margin')->get_css_data()
		)
	);