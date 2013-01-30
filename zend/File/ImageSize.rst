.. Validator/File/ImageSize.php generated using docpx on 01/30/13 03:02pm


Class
*****

Zend\\Validator\\File\\ImageSize
================================

Validator for the image size of a image file

Methods
-------

__construct
+++++++++++

.. function:: __construct()


    Sets validator options
    
    Accepts the following option keys:
    - minheight
    - minwidth
    - maxheight
    - maxwidth

    :param array|\Traversable: 



getMinWidth
+++++++++++

.. function:: getMinWidth()


    Returns the minimum allowed width

    :rtype: integer 



setMinWidth
+++++++++++

.. function:: setMinWidth()


    Sets the minimum allowed width

    :param integer: 

    :rtype: ImageSize Provides a fluid interface

    :throws: Exception\InvalidArgumentException When minwidth is greater than maxwidth



getMaxWidth
+++++++++++

.. function:: getMaxWidth()


    Returns the maximum allowed width

    :rtype: integer 



setMaxWidth
+++++++++++

.. function:: setMaxWidth()


    Sets the maximum allowed width

    :param integer: 

    :rtype: ImageSize Provides a fluid interface

    :throws: Exception\InvalidArgumentException When maxwidth is less than minwidth



getMinHeight
++++++++++++

.. function:: getMinHeight()


    Returns the minimum allowed height

    :rtype: integer 



setMinHeight
++++++++++++

.. function:: setMinHeight()


    Sets the minimum allowed height

    :param integer: 

    :rtype: ImageSize Provides a fluid interface

    :throws: Exception\InvalidArgumentException When minheight is greater than maxheight



getMaxHeight
++++++++++++

.. function:: getMaxHeight()


    Returns the maximum allowed height

    :rtype: integer 



setMaxHeight
++++++++++++

.. function:: setMaxHeight()


    Sets the maximum allowed height

    :param integer: 

    :rtype: ImageSize Provides a fluid interface

    :throws: Exception\InvalidArgumentException When maxheight is less than minheight



getImageMin
+++++++++++

.. function:: getImageMin()


    Returns the set minimum image sizes

    :rtype: array 



getImageMax
+++++++++++

.. function:: getImageMax()


    Returns the set maximum image sizes

    :rtype: array 



getImageWidth
+++++++++++++

.. function:: getImageWidth()


    Returns the set image width sizes

    :rtype: array 



getImageHeight
++++++++++++++

.. function:: getImageHeight()


    Returns the set image height sizes

    :rtype: array 



setImageMin
+++++++++++

.. function:: setImageMin()


    Sets the minimum image size

    :param array: The minimum image dimensions

    :rtype: ImageSize Provides a fluent interface



setImageMax
+++++++++++

.. function:: setImageMax()


    Sets the maximum image size

    :param array|\Traversable: The maximum image dimensions

    :rtype: ImageSize Provides a fluent interface



setImageWidth
+++++++++++++

.. function:: setImageWidth()


    Sets the minimum and maximum image width

    :param array: The image width dimensions

    :rtype: ImageSize Provides a fluent interface



setImageHeight
++++++++++++++

.. function:: setImageHeight()


    Sets the minimum and maximum image height

    :param array: The image height dimensions

    :rtype: ImageSize Provides a fluent interface



isValid
+++++++

.. function:: isValid()


    Returns true if and only if the image size of $value is at least min and
    not bigger than max

    :param string|array: Real file to check for image size

    :rtype: bool 





Constants
---------

WIDTH_TOO_BIG
+++++++++++++

@const string Error constants

WIDTH_TOO_SMALL
+++++++++++++++

HEIGHT_TOO_BIG
++++++++++++++

HEIGHT_TOO_SMALL
++++++++++++++++

NOT_DETECTED
++++++++++++

NOT_READABLE
++++++++++++

