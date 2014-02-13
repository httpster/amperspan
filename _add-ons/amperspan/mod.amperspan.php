<?php
/**
 * Modifier_amperspan
 * Wrap ampersands for sexy styling
 *
 * @author  Brandon Haslip
 */
class Modifier_amperspan extends Modifier
{
	public function index($value, $parameters=array())
	{
		$tag = array_get($parameters, 0, 'span');
		$class = array_get($parameters, 1, 'amperspan');

		$value = preg_replace('/&(?!(?:[a-z][a-z\d]*|#(?:\d+|[xX][a-f\d]+));)|&amp;/', ' <'.$tag.' class="'.$class.'">&amp;</'.$tag.'> ', rtrim($value));

		return $value;

	}
}
