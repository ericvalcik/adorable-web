local:
	@bundle exec jekyll serve

clean:
	rm -rf _site

.PHONY: local clean
