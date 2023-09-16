# Makefile for PHP Kata Project

PHPUNIT = ./vendor/bin/phpunit
PHPUNIT_WATCHER = ./vendor/bin/phpunit-watcher watch

.PHONY: test
test: ## run PHPUnit
	$(PHPUNIT)

test-watcher: ## run PHPUnit Watcher
	${PHPUNIT_WATCHER}

## TODO script that display documentation for a specific kata

.PHONY: help
help: ## display help
	@echo "Makefile help:"
	@echo ""
	@echo "Available targets:"
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "  \033[36m%-12s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)
	@echo ""

# default action if no args are provided
.DEFAULT_GOAL := help
