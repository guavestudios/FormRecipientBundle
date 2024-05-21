# Contao Form Recipient

This bundle allows you to set the recipient of a form dynamically, based on a form field.

## Requirements

- Contao 4.13+
- PHP 7.4 or 8.0+

## Install

```BASH
$ composer require guave/formrecipient-bundle
```

## Usage

- Add a form field of type "Protected Select Menu"
- Add your recipient emails as the value and a name of your choice as the label and reference
- Set the form recipient as `{{form::name}}` where name is the field name of your "Protected Select Menu"
