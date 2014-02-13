# Amperspan

## An add-on for [Statamic](http://statamic.com/) to make ampersands sexy.

Amperspan is a Statamic variable modifier that wraps ampersands in a configurable tag with a class for easy sexy-fying.

### Installation

1. Copy the _add-ons/amperspan folder to the Statamic _add-ons folder

### Sample Usage

Default usage, wrapper is a "span" tag and class is "amperspan".

`{{ title|amperspan }}`

Or with optional parameters to customize the wrapping tag and class.

`{{ title|amperspan:tag:class }}`
