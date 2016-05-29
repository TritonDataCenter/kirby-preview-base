# kirby-preview-base

This is the base repository for previewing Kirby-formatted documentation in Joyent public repositories.

Joyent uses [Kirby](https://getkirby.com), a file-based CMS, to publish most of our web properties and documentation. This repository doesn't include the Joyent theme or other branding, but it is maintained as a reliable base to allow publicly previewing web content.

Where it's used:

- https://github.com/joyent/containerpilot: to preview [the documentation](https://github.com/joyent/containerpilot/tree/master/documentation). See [CONTRIBUTING.md](https://github.com/joyent/containerpilot/tree/master/documentation/CONTRIBUTING.md) for instructions.

### Licensing

- Kirby is available in a public repo (linked to this repo via a git submodule), but it is not open source. See https://getkirby.com/buy for more information.
- The base theme is [Nate Steiner](https://github.com/nsteiner)'s [KDoc](https://github.com/nsteiner/kdoc), which [appears to be MIT-licensed](https://github.com/nsteiner/kdoc/blob/master/package.json#L6).
- Joyent-developed materials in this repo are licensed under the terms of the [MPLv2](https://www.mozilla.org/en-US/MPL/2.0/).

### Why Kirby

There are a number of arguments against Kirby, including:

- It's not properly open source
- It requires a runtime to view the pages, rather than generating static content
- It forces the use of numbered directories and exactly one `*.md` file per directory, which is unexpected

We recognize these frustrations, but continue to use Kirby because...

- The content is all Markdown, so we're not really locked in to it (templates and fancy pages can get much more complex, but documentation is straightforward)
- It works well enough
- It makes the primary developer happy
- The directory structure actually eliminates confusion about the hierarchical structure of the site, even if it defies expectations
- Bikeshedding is easy, but identifying/developing a meaningful alternative and doing the migration is real work
