<?php
/**
<p>
Font Awesome 4.5.0.
The iconic font and CSS toolkit.
</p>
<p>
 <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Go to hompage to lookup icons.</a>
</p>
<p>
Attribute id="PluginDavegandyFontawesome450" are included when render widget include to easy check if this library are availible in Javascript.
</p>
 */
class PluginDavegandyFontawesome450{
  /**
  <p>
  Including the css in html/head section.
  </p>
  #code-yml#
  -
    type: widget
    data:
      plugin: 'davegandy/fontawesome450'
      method: include
   #code#
  */
  public static function widget_include(){
    $element = wfDocument::createHtmlElement('link', null, array('href' => '/plugin/davegandy/fontawesome450/css/font-awesome.css', 'rel' => 'stylesheet', 'id' => 'PluginDavegandyFontawesome450'));
    wfDocument::renderElement(array($element));
  }
  
  
  /**
  <p>
  Render an i tag with Fontawesome class.
  Set data/spin as true to make icon spin.
  Set data/size to one of lg, 2x, 3x, 4x or 5x to make icon larger.
  </p>
  #code-yml#
  -
    type: widget
    data:
      plugin: 'davegandy/fontawesome450'
      method: 'render'
      data:
        icon: 'plug'
  #code#
   */
  public static function widget_render($data){
    $default = array(
        'icon' => 'windows', 
        'size' => null,
        'spin' => false,
            );
    $default = array_merge($default, $data['data']);
    
    $class = 'fa fa-'.wfArray::get($default, 'icon');
    if(wfArray::get($default, 'size')){
      $class .= ' fa-'.wfArray::get($default, 'size');
    }
    if(wfArray::get($default, 'spin')){
      $class .= ' fa-spin';
    }
    
    $element = wfDocument::createHtmlElement('i', null, array('class' => $class));
    wfDocument::renderElement(array($element));
    
  }
}