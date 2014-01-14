# Amperspan

## A plugin for [Statamic](http://statamic.com/) to make ampersands sexy.

Amperspan wraps ampersands in an a configurable tag with a class for easy sexy-fying.

### Installation

1. Copy _add-ons/amperspan folder to _add-ons folder in Statamic
2. Copy _config/add-ons/amperspan folder to config/add-ons folder in Statamic

### Configuration

Configure the wrapping tag and class in _config/add-ons/amperspan/amperspan.yaml.

### Usage

Wrap text variables in the amperspan tag pair.

`<h1>{{ amperspan }} {{title}} {{ /amperspan }}</h1>`
