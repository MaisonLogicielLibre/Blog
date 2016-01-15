ROOT_DIR := $(shell pwd) 
WP_CONTENT_DIR := $(join $(ROOT_DIR), "/wp-content")

sym-content: sym-config
	rm -rf wordpress/wp-content
	ln -s $(WP_CONTENT_DIR) wordpress/wp-content

composer:
	composer install

sym-config: composer
	ln -s wp-config.php wordpress/wp-config.php

clean:
	rm -r wordpress
