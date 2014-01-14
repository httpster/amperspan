# Amperspan

## A simple add-on for [Statamic](http://statamic.com/) to make ampersands sexy.

Amperspan wraps ampersands in an a configurable tag with a class for easy sexy-fying.

### Installation

1. Copy _add-ons/amperspan folder to the Statamic _add-ons folder
2. Copy _config/add-ons/amperspan folder to the Statamic config/add-ons folder

### Configuration

Configure the wrapping tag and class in _config/add-ons/amperspan/amperspan.yaml.

### Usage

Wrap text variables in the amperspan tag pair.

`<h1>{{ amperspan }} {{title}} {{ /amperspan }}</h1>`
