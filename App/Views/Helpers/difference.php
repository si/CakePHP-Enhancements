<?php
/*
 * CakePHP helper for displaying the difference between two values.
 * @var $baseline (FLOAT) - the baseline figure.
 * @var $comparison (FLOAT) - the figure to compare against.
 *
 * Use: Place in app/View/Helper, add var $helper = array('Difference') in the controller,
 * either AppController to use it app-wide, or the individual controller.
 * 
 * Author: Si Jobling
 * URL: http://sijobling.com
 * github: si
 * 
 */

class DifferenceHelper extends AppHelper {

    function compare($baseline = 0, $comparison = 0,$precision=2) {
      $difference = $baseline - $comparison;
      $prefix = ($difference>0) ? '+' : '';
      return '<span style="color:' . (($difference>0) ? '#080' : '#800') . '">' . $prefix . round($difference,$precision) . '</span>';
    }
}

?>