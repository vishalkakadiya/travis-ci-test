<?php
namespace Pixelavengers\Bundle\ExtraValidatorBundle\Validator\Constraints;

class DiscoverValidator extends CreditCardValidator
{
    const PATTERN = '/^6(?:011|5[0-9]{2})[0-9]{12}$/';
}