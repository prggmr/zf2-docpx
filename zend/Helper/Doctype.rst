.. View/Helper/Doctype.php generated using docpx on 01/30/13 03:32am


Zend\\View\\Helper\\Doctype
===========================

Helper for setting and retrieving the doctype

Methods
+++++++

registerDefaultDoctypes
-----------------------

.. function:: registerDefaultDoctypes()


    Register the default doctypes we understand

    :rtype: void 



unsetDoctypeRegistry
--------------------

.. function:: unsetDoctypeRegistry()


    Unset the static doctype registry
    
    Mainly useful for testing purposes. Sets {@link $registeredDoctypes} to
    a null value.

    :rtype: void 



__construct
-----------

.. function:: __construct()


    Constructor
    
    Map constants to doctype strings, and set default doctype



__invoke
--------

.. function:: __invoke()


    Set or retrieve doctype

    :param string: 

    :rtype: Doctype Provides a fluent interface

    :throws: Exception\DomainException 



setDoctype
----------

.. function:: setDoctype()


    Set doctype

    :param string: 

    :rtype: Doctype 



getDoctype
----------

.. function:: getDoctype()


    Retrieve doctype

    :rtype: string 



getDoctypes
-----------

.. function:: getDoctypes()


    Get doctype => string mappings

    :rtype: array 



isXhtml
-------

.. function:: isXhtml()


    Is doctype XHTML?

    :rtype: bool 



isHtml5
-------

.. function:: isHtml5()


    Is doctype HTML5? (HeadMeta uses this for validation)

    :rtype: bool 



isRdfa
------

.. function:: isRdfa()


    Is doctype RDFa?

    :rtype: bool 



__toString
----------

.. function:: __toString()


    String representation of doctype

    :rtype: string 





Constants
+++++++++

XHTML11
=======

XHTML1_STRICT
=============

XHTML1_TRANSITIONAL
===================

XHTML1_FRAMESET
===============

XHTML1_RDFA
===========

XHTML1_RDFA11
=============

XHTML_BASIC1
============

XHTML5
======

HTML4_STRICT
============

HTML4_LOOSE
===========

HTML4_FRAMESET
==============

HTML5
=====

CUSTOM_XHTML
============

CUSTOM
======

