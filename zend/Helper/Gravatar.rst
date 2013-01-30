.. View/Helper/Gravatar.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Helper\\Gravatar
============================

Helper for retrieving avatars from gravatar.com

Methods
-------

__invoke
++++++++

.. function:: __invoke()


    Returns an avatar from gravatar's service.
    
    $options may include the following:
    - 'img_size' int height of img to return
    - 'default_img' string img to return if email address has not found
    - 'rating' string rating parameter for avatar
    - 'secure' bool load from the SSL or Non-SSL location


    :param string|null: Email address.
    :param null|array: Options
    :param array: Attributes for image tag (title, alt etc.)

    :rtype: Gravatar 



setOptions
++++++++++

.. function:: setOptions()


    Configure state

    :param array: 

    :rtype: Gravatar 



getImgSize
++++++++++

.. function:: getImgSize()


    Get img size

    :rtype: int The img size



setImgSize
++++++++++

.. function:: setImgSize()


    Set img size in pixels

    :param int: Size of img must be between 1 and 512

    :rtype: Gravatar 



getDefaultImg
+++++++++++++

.. function:: getDefaultImg()


    Get default img

    :rtype: string 



setDefaultImg
+++++++++++++

.. function:: setDefaultImg()


    Set default img
    
    Can be either an absolute URL to an image, or one of the DEFAULT_* constants


    :param string: 

    :rtype: Gravatar 



setRating
+++++++++

.. function:: setRating()


    Set rating value
    
    Must be one of the RATING_* constants


    :param string: Value for rating. Allowed values are: g, px, r,x

    :rtype: Gravatar 

    :throws: Exception\DomainException 



getRating
+++++++++

.. function:: getRating()


    Get rating value

    :rtype: string 



setEmail
++++++++

.. function:: setEmail()


    Set email address

    :param string: 

    :rtype: Gravatar 



getEmail
++++++++

.. function:: getEmail()


    Get email address

    :rtype: string 



setSecure
+++++++++

.. function:: setSecure()


    Load from an SSL or No-SSL location?

    :param bool: 

    :rtype: Gravatar 



getSecure
+++++++++

.. function:: getSecure()


    Get an SSL or a No-SSL location

    :rtype: bool 



getAttribs
++++++++++

.. function:: getAttribs()


    Get attribs of image
    
    Warning!
    If you set src attrib, you get it, but this value will be overwritten in
    protected method setSrcAttribForImg(). And finally your get other src
    value!

    :rtype: array 



setAttribs
++++++++++

.. function:: setAttribs()


    Set attribs for image tag
    
    Warning! You shouldn't set src attrib for image tag.
    This attrib is overwritten in protected method setSrcAttribForImg().
    This method(_setSrcAttribForImg) is called in public method getImgTag().

    :param array: 

    :rtype: Gravatar 



getGravatarUrl
++++++++++++++

.. function:: getGravatarUrl()


    Get URL to gravatar's service.

    :rtype: string URL



getAvatarUrl
++++++++++++

.. function:: getAvatarUrl()


    Get avatar url (including size, rating and default image options)

    :rtype: string 



setSrcAttribForImg
++++++++++++++++++

.. function:: setSrcAttribForImg()


    Set src attrib for image.
    
    You shouldn't set a own url value!
    It sets value, uses protected method getAvatarUrl.
    
    If already exists, it will be overwritten.

    :rtype: void 



getImgTag
+++++++++

.. function:: getImgTag()


    Return valid image tag

    :rtype: string 



__toString
++++++++++

.. function:: __toString()


    Return valid image tag

    :rtype: string 





Constants
---------

GRAVATAR_URL
++++++++++++

URL to gravatar service

GRAVATAR_URL_SECURE
+++++++++++++++++++

Secure URL to gravatar service

RATING_G
++++++++

Gravatar rating

RATING_PG
+++++++++

RATING_R
++++++++

RATING_X
++++++++

DEFAULT_404
+++++++++++

Default gravatar image value constants

DEFAULT_MM
++++++++++

DEFAULT_IDENTICON
+++++++++++++++++

DEFAULT_MONSTERID
+++++++++++++++++

DEFAULT_WAVATAR
+++++++++++++++

