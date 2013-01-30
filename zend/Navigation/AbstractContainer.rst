.. Navigation/AbstractContainer.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\Navigation\\AbstractContainer
===================================

Zend_Navigation_Container

AbstractContainer class for Zend\Navigation\Page classes.

Methods
-------

sort
++++

.. function:: sort()


    Sorts the page index according to page order

    :rtype: void 



notifyOrderUpdated
++++++++++++++++++

.. function:: notifyOrderUpdated()


    Notifies container that the order of pages are updated

    :rtype: void 



addPage
+++++++

.. function:: addPage()


    Adds a page to the container
    
    This method will inject the container as the given page's parent by
    calling {@link Page\AbstractPage::setParent()}.

    :param Page\AbstractPage|array|Traversable: page to add

    :rtype: AbstractContainer fluent interface, returns self

    :throws: Exception\InvalidArgumentException if page is invalid



addPages
++++++++

.. function:: addPages()


    Adds several pages at once

    :param array|Traversable|AbstractContainer: pages to add

    :rtype: AbstractContainer fluent interface, returns self

    :throws: Exception\InvalidArgumentException if $pages is not array,
                                           Traversable or AbstractContainer



setPages
++++++++

.. function:: setPages()


    Sets pages this container should have, removing existing pages

    :param array: pages to set

    :rtype: AbstractContainer fluent interface, returns self



getPages
++++++++

.. function:: getPages()


    Returns pages in the container

    :rtype: array array of Page\AbstractPage instances



removePage
++++++++++

.. function:: removePage()


    Removes the given page from the container

    :param Page\AbstractPage|int: page to remove, either a page
                                    instance or a specific page order

    :rtype: bool whether the removal was successful



removePages
+++++++++++

.. function:: removePages()


    Removes all pages in container

    :rtype: AbstractContainer fluent interface, returns self



hasPage
+++++++

.. function:: hasPage()


    Checks if the container has the given page

    :param Page\AbstractPage: page to look for
    :param bool: [optional] whether to search recursively.
                        Default is false.

    :rtype: bool whether page is in container



hasPages
++++++++

.. function:: hasPages()


    Returns true if container contains any pages

    :rtype: bool whether container has any pages



findOneBy
+++++++++

.. function:: findOneBy()


    Returns a child page matching $property == $value, or null if not found

    :param string: name of property to match against
    :param mixed: value to match property against

    :rtype: Page\AbstractPage|null matching page or null



findAllBy
+++++++++

.. function:: findAllBy()


    Returns all child pages matching $property == $value, or an empty array
    if no pages are found

    :param string: name of property to match against
    :param mixed: value to match property against

    :rtype: array array containing only Page\AbstractPage instances



findBy
++++++

.. function:: findBy()


    Returns page(s) matching $property == $value

    :param string: name of property to match against
    :param mixed: value to match property against
    :param bool: [optional] whether an array of all matching
                          pages should be returned, or only the first.
                          If true, an array will be returned, even if not
                          matching pages are found. If false, null will
                          be returned if no matching page is found.
                          Default is false.

    :rtype: Page\AbstractPage|null matching page or null



__call
++++++

.. function:: __call()


    Magic overload: Proxy calls to finder methods
    
    Examples of finder calls:
    <code>
    // METHOD                    // SAME AS
    $nav->findByLabel('foo');    // $nav->findOneBy('label', 'foo');
    $nav->findOneByLabel('foo'); // $nav->findOneBy('label', 'foo');
    $nav->findAllByClass('foo'); // $nav->findAllBy('class', 'foo');
    </code>

    :param string: method name
    :param array: method arguments

    :throws Exception\BadMethodCallException: if method does not exist



toArray
+++++++

.. function:: toArray()


    Returns an array representation of all pages in container

    :rtype: array 



current
+++++++

.. function:: current()


    Returns current page
    
    Implements RecursiveIterator interface.

    :rtype: Page\AbstractPage current page or null

    :throws: Exception\OutOfBoundsException if the index is invalid



key
+++

.. function:: key()


    Returns hash code of current page
    
    Implements RecursiveIterator interface.

    :rtype: string hash code of current page



next
++++

.. function:: next()


    Moves index pointer to next page in the container
    
    Implements RecursiveIterator interface.

    :rtype: void 



rewind
++++++

.. function:: rewind()


    Sets index pointer to first page in the container
    
    Implements RecursiveIterator interface.

    :rtype: void 



valid
+++++

.. function:: valid()


    Checks if container index is valid
    
    Implements RecursiveIterator interface.

    :rtype: bool 



hasChildren
+++++++++++

.. function:: hasChildren()


    Proxy to hasPages()
    
    Implements RecursiveIterator interface.

    :rtype: bool whether container has any pages



getChildren
+++++++++++

.. function:: getChildren()


    Returns the child container.
    
    Implements RecursiveIterator interface.

    :rtype: Page\AbstractPage|null 



count
+++++

.. function:: count()


    Returns number of pages in container
    
    Implements Countable interface.

    :rtype: int number of pages in the container



