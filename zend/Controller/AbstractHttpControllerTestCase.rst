.. Test/PHPUnit/Controller/AbstractHttpControllerTestCase.php generated using docpx on 01/30/13 03:32am


Zend\\Test\\PHPUnit\\Controller\\AbstractHttpControllerTestCase
===============================================================

Methods
+++++++

getResponseHeader
-----------------

.. function:: getResponseHeader()


    Get response header by key

    :param string: 

    :rtype: \Zend\Http\Header\HeaderInterface|false 



assertHasResponseHeader
-----------------------

.. function:: assertHasResponseHeader()


    Assert response header exists

    :param string: 



assertNotHasResponseHeader
--------------------------

.. function:: assertNotHasResponseHeader()


    Assert response header does not exist

    :param string: 



assertResponseHeaderContains
----------------------------

.. function:: assertResponseHeaderContains()


    Assert response header exists and contains the given string

    :param string: 
    :param string: 



assertNotResponseHeaderContains
-------------------------------

.. function:: assertNotResponseHeaderContains()


    Assert response header exists and contains the given string

    :param string: 
    :param string: 



assertResponseHeaderRegex
-------------------------

.. function:: assertResponseHeaderRegex()


    Assert response header exists and matches the given pattern

    :param string: 
    :param string: 



assertNotResponseHeaderRegex
----------------------------

.. function:: assertNotResponseHeaderRegex()


    Assert response header does not exist and/or does not match the given regex

    :param string: 
    :param string: 



assertRedirect
--------------

.. function:: assertRedirect()


    Assert that response is a redirect



assertNotRedirect
-----------------

.. function:: assertNotRedirect()


    Assert that response is NOT a redirect

    :param string: 



assertRedirectTo
----------------

.. function:: assertRedirectTo()


    Assert that response redirects to given URL

    :param string: 



assertNotRedirectTo
-------------------

.. function:: assertNotRedirectTo()


    Assert that response does not redirect to given URL

    :param string: 
    :param string: 



assertRedirectRegex
-------------------

.. function:: assertRedirectRegex()


    Assert that redirect location matches pattern

    :param string: 



assertNotRedirectRegex
----------------------

.. function:: assertNotRedirectRegex()


    Assert that redirect location does not match pattern

    :param string: 



registerXpathNamespaces
-----------------------

.. function:: registerXpathNamespaces()


    Register XPath namespaces

    :param array: 



query
-----

.. function:: query()


    Execute a DOM/XPath query

    :param string: 
    :param boolean: 

    :rtype: array 



xpathQuery
----------

.. function:: xpathQuery()


    Execute a xpath query

    :param string: 

    :rtype: array 



queryCount
----------

.. function:: queryCount()


    Count the dom query executed

    :param string: 

    :rtype: integer 



xpathQueryCount
---------------

.. function:: xpathQueryCount()


    Count the dom query executed

    :param string: 

    :rtype: integer 



queryAssertion
--------------

.. function:: queryAssertion()


    Assert against DOM/XPath selection

    :param string: 
    :param boolean: 



assertQuery
-----------

.. function:: assertQuery()


    Assert against DOM selection

    :param string: CSS selector path



assertXpathQuery
----------------

.. function:: assertXpathQuery()


    Assert against XPath selection

    :param string: XPath path



notQueryAssertion
-----------------

.. function:: notQueryAssertion()


    Assert against DOM/XPath selection

    :param string: CSS selector path
    :param boolean: 



assertNotQuery
--------------

.. function:: assertNotQuery()


    Assert against DOM selection

    :param string: CSS selector path



assertNotXpathQuery
-------------------

.. function:: assertNotXpathQuery()


    Assert against XPath selection

    :param string: XPath path



queryCountAssertion
-------------------

.. function:: queryCountAssertion()


    Assert against DOM/XPath selection; should contain exact number of nodes

    :param string: CSS selector path
    :param string: Number of nodes that should match
    :param boolean: 



assertQueryCount
----------------

.. function:: assertQueryCount()


    Assert against DOM selection; should contain exact number of nodes

    :param string: CSS selector path
    :param string: Number of nodes that should match



assertXpathQueryCount
---------------------

.. function:: assertXpathQueryCount()


    Assert against XPath selection; should contain exact number of nodes

    :param string: XPath path
    :param string: Number of nodes that should match



notQueryCountAssertion
----------------------

.. function:: notQueryCountAssertion()


    Assert against DOM/XPath selection; should NOT contain exact number of nodes

    :param string: CSS selector path
    :param string: Number of nodes that should NOT match
    :param boolean: 



assertNotQueryCount
-------------------

.. function:: assertNotQueryCount()


    Assert against DOM selection; should NOT contain exact number of nodes

    :param string: CSS selector path
    :param string: Number of nodes that should NOT match



assertNotXpathQueryCount
------------------------

.. function:: assertNotXpathQueryCount()


    Assert against XPath selection; should NOT contain exact number of nodes

    :param string: XPath path
    :param string: Number of nodes that should NOT match



queryCountMinAssertion
----------------------

.. function:: queryCountMinAssertion()


    Assert against DOM/XPath selection; should contain at least this number of nodes

    :param string: CSS selector path
    :param string: Minimum number of nodes that should match
    :param boolean: 



assertQueryCountMin
-------------------

.. function:: assertQueryCountMin()


    Assert against DOM selection; should contain at least this number of nodes

    :param string: CSS selector path
    :param string: Minimum number of nodes that should match



assertXpathQueryCountMin
------------------------

.. function:: assertXpathQueryCountMin()


    Assert against XPath selection; should contain at least this number of nodes

    :param string: XPath path
    :param string: Minimum number of nodes that should match



queryCountMaxAssertion
----------------------

.. function:: queryCountMaxAssertion()


    Assert against DOM/XPath selection; should contain no more than this number of nodes

    :param string: CSS selector path
    :param string: Maximum number of nodes that should match
    :param boolean: 



assertQueryCountMax
-------------------

.. function:: assertQueryCountMax()


    Assert against DOM selection; should contain no more than this number of nodes

    :param string: CSS selector path
    :param string: Maximum number of nodes that should match



assertXpathQueryCountMax
------------------------

.. function:: assertXpathQueryCountMax()


    Assert against XPath selection; should contain no more than this number of nodes

    :param string: XPath path
    :param string: Maximum number of nodes that should match



queryContentContainsAssertion
-----------------------------

.. function:: queryContentContainsAssertion()


    Assert against DOM/XPath selection; node should contain content

    :param string: CSS selector path
    :param string: content that should be contained in matched nodes
    :param boolean: 



assertQueryContentContains
--------------------------

.. function:: assertQueryContentContains()


    Assert against DOM selection; node should contain content

    :param string: CSS selector path
    :param string: content that should be contained in matched nodes



assertXpathQueryContentContains
-------------------------------

.. function:: assertXpathQueryContentContains()


    Assert against XPath selection; node should contain content

    :param string: XPath path
    :param string: content that should be contained in matched nodes



notQueryContentContainsAssertion
--------------------------------

.. function:: notQueryContentContainsAssertion()


    Assert against DOM/XPath selection; node should NOT contain content

    :param string: CSS selector path
    :param string: content that should NOT be contained in matched nodes
    :param boolean: 



assertNotQueryContentContains
-----------------------------

.. function:: assertNotQueryContentContains()


    Assert against DOM selection; node should NOT contain content

    :param string: CSS selector path
    :param string: content that should NOT be contained in matched nodes



assertNotXpathQueryContentContains
----------------------------------

.. function:: assertNotXpathQueryContentContains()


    Assert against XPath selection; node should NOT contain content

    :param string: XPath path
    :param string: content that should NOT be contained in matched nodes



queryContentRegexAssertion
--------------------------

.. function:: queryContentRegexAssertion()


    Assert against DOM/XPath selection; node should match content

    :param string: CSS selector path
    :param string: Pattern that should be contained in matched nodes
    :param boolean: 



assertQueryContentRegex
-----------------------

.. function:: assertQueryContentRegex()


    Assert against DOM selection; node should match content

    :param string: CSS selector path
    :param string: Pattern that should be contained in matched nodes



assertXpathQueryContentRegex
----------------------------

.. function:: assertXpathQueryContentRegex()


    Assert against XPath selection; node should match content

    :param string: XPath path
    :param string: Pattern that should be contained in matched nodes



notQueryContentRegexAssertion
-----------------------------

.. function:: notQueryContentRegexAssertion()


    Assert against DOM/XPath selection; node should NOT match content

    :param string: CSS selector path
    :param string: pattern that should NOT be contained in matched nodes
    :param boolean: 



assertNotQueryContentRegex
--------------------------

.. function:: assertNotQueryContentRegex()


    Assert against DOM selection; node should NOT match content

    :param string: CSS selector path
    :param string: pattern that should NOT be contained in matched nodes



assertNotXpathQueryContentRegex
-------------------------------

.. function:: assertNotXpathQueryContentRegex()


    Assert against XPath selection; node should NOT match content

    :param string: XPath path
    :param string: pattern that should NOT be contained in matched nodes



