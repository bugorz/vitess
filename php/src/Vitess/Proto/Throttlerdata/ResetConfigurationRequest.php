<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: throttlerdata.proto

namespace Vitess\Proto\Throttlerdata {

  class ResetConfigurationRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $throttler_name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'throttlerdata.ResetConfigurationRequest');

      // OPTIONAL STRING throttler_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "throttler_name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <throttler_name> has a value
     *
     * @return boolean
     */
    public function hasThrottlerName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <throttler_name> value
     *
     * @return \Vitess\Proto\Throttlerdata\ResetConfigurationRequest
     */
    public function clearThrottlerName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <throttler_name> value
     *
     * @return string
     */
    public function getThrottlerName(){
      return $this->_get(1);
    }
    
    /**
     * Set <throttler_name> value
     *
     * @param string $value
     * @return \Vitess\Proto\Throttlerdata\ResetConfigurationRequest
     */
    public function setThrottlerName( $value){
      return $this->_set(1, $value);
    }
  }
}
