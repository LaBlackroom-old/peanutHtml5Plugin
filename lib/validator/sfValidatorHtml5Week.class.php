<?php

/**
 * Validates a week value
 *
 * @see http://www.w3.org/TR/html-markup/input.date.html
 *
 * @package peanutHtml5Plugin
 * @subpackage validator
 * @author Alexandre "pocky" Balmes <albalmes@gmail.com> <albalmes@gmail.com>
 */

class sfValidatorHtml5Week extends sfValidatorHtml5Date
{

  
  /**
   * Get the date format to render a valid string
   *
   * @return string
   */
  protected function _getDateFormat()
  {
    return 'Y-\WW';
  }

}


