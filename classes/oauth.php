<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User: Адмын
 * Date: 11.12.12
 * Time: 22:41
 * To change this template use File | Settings | File Templates.
 */
class Oauth extends Kohana_Oauth_Client
{
  /**
   * @param string $driver
   * @param array  $options
   *
   * @return Kohana_Oauth_Client
   */
  public static function instance( $driver, array $options = array(), $class = 'Oauth' ){
    return parent::instance( $driver, $options, $class);
  }
}
