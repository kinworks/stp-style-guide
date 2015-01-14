stp-style-guide
===============
###_An SCSS Style Guide for Scotland's Towns Partnership_

**Author**: Kin ([http://kin.works](http://kin.works))

## View online
You can view the Style Guide at [http://style.stp.kin.works](http://style.stp.kin.works)

## Working on this repo

### Pull Requests

We welcome pull requests, however allowing PRs on this repository is not a guarantee that they will be accepted. Feel free to open issues for discussion prior to filing a PR.

### Requirements

You'll need the following tools:

- PHP 5.x or later;
- [Ruby](https://www.ruby-lang.org/en/documentation/) 2.x or later;
	- Ruby Gem: [Sass](https://rubygems.org/gems/sass) 3.3 or later;
	- Ruby Gem: [Sass-globbing](https://rubygems.org/gems/sass-globbing) 1.1 or later.
	
### SCSS Compilation

We tend to alias a [Sass watch](http://sass-lang.com/documentation/file.SASS_REFERENCE.html#using_sass) command in ```~/.bash_profile``` for ease of use; this is quite different for a style guide as we don't want a minified output, and we require the ```sass-globbing``` plugin (see 'Requirements') to just find all our .scss files and import them for use in the guide without having to specify every single one.

#### Compilation Command

```sass --watch -r sass-globbing --sourcemap css/sass:css/output```

#### As a bash alias

```alias stylewatch='sass --watch -r sass-globbing --sourcemap css/sass:css/output'```

_Don't forget to [source your bash_profile again](http://stackoverflow.com/questions/4608187/how-to-reload-bash-profile-from-the-command-line) after editing it, or the alias won't work._
