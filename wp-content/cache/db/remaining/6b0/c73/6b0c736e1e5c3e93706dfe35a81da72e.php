E�>c<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:416:"
			SELECT 
				s.value, 
				s.name,
				s.context as domain, 
				s.gettext_context as context, 
				IF(st.status = 10 AND st.value IS NOT NULL, st.`value`, st.mo_string) AS `translation`
			FROM wp_icl_strings s
			LEFT JOIN wp_icl_string_translations st ON st.string_id = s.id AND st.`language` = 'en'
			 WHERE s.name = 'taxonomy singular name: Style code' AND s.context = 'WordPress' AND s.gettext_context = ''";s:11:"last_result";a:0:{}s:8:"col_info";a:5:{i:0;O:8:"stdClass":13:{s:4:"name";s:5:"value";s:7:"orgname";s:5:"value";s:5:"table";s:1:"s";s:8:"orgtable";s:14:"wp_icl_strings";s:3:"def";s:0:"";s:2:"db";s:19:"alshia5_woocommerce";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:224;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:4:"name";s:7:"orgname";s:4:"name";s:5:"table";s:1:"s";s:8:"orgtable";s:14:"wp_icl_strings";s:3:"def";s:0:"";s:2:"db";s:19:"alshia5_woocommerce";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:640;s:9:"charsetnr";i:224;s:5:"flags";i:20489;s:4:"type";i:253;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:6:"domain";s:7:"orgname";s:7:"context";s:5:"table";s:1:"s";s:8:"orgtable";s:14:"wp_icl_strings";s:3:"def";s:0:"";s:2:"db";s:19:"alshia5_woocommerce";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:640;s:9:"charsetnr";i:224;s:5:"flags";i:20489;s:4:"type";i:253;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:7:"context";s:7:"orgname";s:15:"gettext_context";s:5:"table";s:1:"s";s:8:"orgtable";s:14:"wp_icl_strings";s:3:"def";s:0:"";s:2:"db";s:19:"alshia5_woocommerce";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:224;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:11:"translation";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:224;s:5:"flags";i:0;s:4:"type";i:251;s:8:"decimals";i:39;}}s:8:"num_rows";i:0;s:10:"return_val";i:0;}