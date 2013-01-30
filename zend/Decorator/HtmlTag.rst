.. Tag/Cloud/Decorator/HtmlTag.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Tag\\Cloud\\Decorator\\HtmlTag
====================================

Simple HTML decorator for tags

Methods
-------

setClassList
++++++++++++

.. function:: setClassList()


    Set a list of classes to use instead of fontsizes

    :param array: 

    :throws InvalidArgumentException: When the classlist is empty
    :throws InvalidArgumentException: When the classlist contains an invalid classname

    :rtype: HTMLTag 



getClassList
++++++++++++

.. function:: getClassList()


    Get class list

    :rtype: array 



setFontSizeUnit
+++++++++++++++

.. function:: setFontSizeUnit()


    Set the font size unit
    
    Possible values are: em, ex, px, in, cm, mm, pt, pc and %

    :param string: 

    :throws InvalidArgumentException: When an invalid fontsize unit is specified

    :rtype: HTMLTag 



getFontSizeUnit
+++++++++++++++

.. function:: getFontSizeUnit()


    Retrieve font size unit

    :rtype: string 



setHTMLTags
+++++++++++

.. function:: setHTMLTags()


    Set the HTML tags surrounding the <a> element

    :param array: 

    :rtype: HTMLTag 



getHTMLTags
+++++++++++

.. function:: getHTMLTags()


    Get HTML tags map

    :rtype: array 



setMaxFontSize
++++++++++++++

.. function:: setMaxFontSize()


    Set maximum font size

    :param integer: 

    :throws InvalidArgumentException: When fontsize is not numeric

    :rtype: HTMLTag 



getMaxFontSize
++++++++++++++

.. function:: getMaxFontSize()


    Retrieve maximum font size

    :rtype: int 



setMinFontSize
++++++++++++++

.. function:: setMinFontSize()


    Set minimum font size

    :param int: 

    :throws InvalidArgumentException: When fontsize is not numeric

    :rtype: HTMLTag 



getMinFontSize
++++++++++++++

.. function:: getMinFontSize()


    Retrieve minimum font size

    :rtype: int 



render
++++++

.. function:: render()


    Defined by Tag

    :param ItemList: 

    :throws InvalidArgumentException: 

    :rtype: array 



