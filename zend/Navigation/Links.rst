.. View/Helper/Navigation/Links.php generated using docpx on 01/30/13 03:27pm


Class
*****

Zend\\View\\Helper\\Navigation\\Links
=====================================

Helper for printing <link> elements

Methods
-------

__invoke
++++++++

.. function:: __invoke()


    Helper entry point

    :param string|AbstractContainer: container to operate on

    :rtype: Links 



__call
++++++

.. function:: __call()


    Magic overload: Proxy calls to {@link findRelation()} or container
    
    Examples of finder calls:
    <code>
    // METHOD                  // SAME AS
    $h->findRelNext($page);    // $h->findRelation($page, 'rel', 'next')
    $h->findRevSection($page); // $h->findRelation($page, 'rev', 'section');
    $h->findRelFoo($page);     // $h->findRelation($page, 'rel', 'foo');
    </code>

    :param string: method name
    :param array: method arguments

    :rtype: mixed 

    :throws: Exception\ExceptionInterface if method does not exist in container



setRenderFlag
+++++++++++++

.. function:: setRenderFlag()


    Sets the helper's render flag
    
    The helper uses the bitwise '&' operator against the hex values of the
    render constants. This means that the flag can is "bitwised" value of
    the render constants. Examples:
    <code>
    // render all links except glossary
    $flag = Links:RENDER_ALL ^ Links:RENDER_GLOSSARY;
    $helper->setRenderFlag($flag);
    
    // render only chapters and sections
    $flag = Links:RENDER_CHAPTER | Links:RENDER_SECTION;
    $helper->setRenderFlag($flag);
    
    // render only relations that are not native W3C relations
    $helper->setRenderFlag(Links:RENDER_CUSTOM);
    
    // render all relations (default)
    $helper->setRenderFlag(Links:RENDER_ALL);
    </code>
    
    Note that custom relations can also be rendered directly using the
    {@link renderLink()} method.

    :param int: render flag

    :rtype: Links fluent interface, returns self



getRenderFlag
+++++++++++++

.. function:: getRenderFlag()


    Returns the helper's render flag

    :rtype: int render flag



findAllRelations
++++++++++++++++

.. function:: findAllRelations()


    Finds all relations (forward and reverse) for the given $page
    
    The form of the returned array:
    <code>
    // $page denotes an instance of Zend_Navigation_Page
    $returned = array(
        'rel' => array(
            'alternate' => array($page, $page, $page),
            'start'     => array($page),
            'next'      => array($page),
            'prev'      => array($page),
            'canonical' => array($page)
        ),
        'rev' => array(
            'section'   => array($page)
        )
    );
    </code>

    :param AbstractPage: page to find links for
    :param null|int: 

    :rtype: array related pages



findRelation
++++++++++++

.. function:: findRelation()


    Finds relations of the given $rel=$type from $page
    
    This method will first look for relations in the page instance, then
    by searching the root container if nothing was found in the page.

    :param AbstractPage: page to find relations for
    :param string: relation, "rel" or "rev"
    :param string: link type, e.g. 'start', 'next'

    :rtype: AbstractPage|array|null page(s), or null if not found

    :throws: Exception\DomainException if $rel is not "rel" or "rev"



findFromProperty
++++++++++++++++

.. function:: findFromProperty()


    Finds relations of given $type for $page by checking if the
    relation is specified as a property of $page

    :param AbstractPage: page to find relations for
    :param string: relation, 'rel' or 'rev'
    :param string: link type, e.g. 'start', 'next'

    :rtype: AbstractPage|array|null page(s), or null if not found



findFromSearch
++++++++++++++

.. function:: findFromSearch()


    Finds relations of given $rel=$type for $page by using the helper to
    search for the relation in the root container

    :param AbstractPage: page to find relations for
    :param string: relation, 'rel' or 'rev'
    :param string: link type, e.g. 'start', 'next', etc

    :rtype: array|null array of pages, or null if not found



searchRelStart
++++++++++++++

.. function:: searchRelStart()


    Searches the root container for the forward 'start' relation of the given
    $page
    
    From {@link http://www.w3.org/TR/html4/types.html#type-links}:
    Refers to the first document in a collection of documents. This link type
    tells search engines which document is considered by the author to be the
    starting point of the collection.

    :param AbstractPage: page to find relation for

    :rtype: AbstractPage|null page or null



searchRelNext
+++++++++++++

.. function:: searchRelNext()


    Searches the root container for the forward 'next' relation of the given
    $page
    
    From {@link http://www.w3.org/TR/html4/types.html#type-links}:
    Refers to the next document in a linear sequence of documents. User
    agents may choose to preload the "next" document, to reduce the perceived
    load time.

    :param AbstractPage: page to find relation for

    :rtype: AbstractPage|null page(s) or null



searchRelPrev
+++++++++++++

.. function:: searchRelPrev()


    Searches the root container for the forward 'prev' relation of the given
    $page
    
    From {@link http://www.w3.org/TR/html4/types.html#type-links}:
    Refers to the previous document in an ordered series of documents. Some
    user agents also support the synonym "Previous".

    :param AbstractPage: page to find relation for

    :rtype: AbstractPage|null page or null



searchRelChapter
++++++++++++++++

.. function:: searchRelChapter()


    Searches the root container for forward 'chapter' relations of the given
    $page
    
    From {@link http://www.w3.org/TR/html4/types.html#type-links}:
    Refers to a document serving as a chapter in a collection of documents.

    :param AbstractPage: page to find relation for

    :rtype: AbstractPage|array|null page(s) or null



searchRelSection
++++++++++++++++

.. function:: searchRelSection()


    Searches the root container for forward 'section' relations of the given
    $page
    
    From {@link http://www.w3.org/TR/html4/types.html#type-links}:
    Refers to a document serving as a section in a collection of documents.

    :param AbstractPage: page to find relation for

    :rtype: AbstractPage|array|null page(s) or null



searchRelSubsection
+++++++++++++++++++

.. function:: searchRelSubsection()


    Searches the root container for forward 'subsection' relations of the
    given $page
    
    From {@link http://www.w3.org/TR/html4/types.html#type-links}:
    Refers to a document serving as a subsection in a collection of
    documents.

    :param AbstractPage: page to find relation for

    :rtype: AbstractPage|array|null page(s) or null



searchRevSection
++++++++++++++++

.. function:: searchRevSection()


    Searches the root container for the reverse 'section' relation of the
    given $page
    
    From {@link http://www.w3.org/TR/html4/types.html#type-links}:
    Refers to a document serving as a section in a collection of documents.

    :param AbstractPage: page to find relation for

    :rtype: AbstractPage|null page(s) or null



searchRevSubsection
+++++++++++++++++++

.. function:: searchRevSubsection()


    Searches the root container for the reverse 'section' relation of the
    given $page
    
    From {@link http://www.w3.org/TR/html4/types.html#type-links}:
    Refers to a document serving as a subsection in a collection of
    documents.

    :param AbstractPage: page to find relation for

    :rtype: AbstractPage|null page(s) or null



findRoot
++++++++

.. function:: findRoot()


    Returns the root container of the given page
    
    When rendering a container, the render method still store the given
    container as the root container, and unset it when done rendering. This
    makes sure finder methods will not traverse above the container given
    to the render method.

    :param AbstractPage: page to find root for

    :rtype: AbstractContainer the root container of the given page



convertToPages
++++++++++++++

.. function:: convertToPages()


    Converts a $mixed value to an array of pages

    :param mixed: mixed value to get page(s) from
    :param bool: whether $value should be looped
                                 if it is an array or a config

    :rtype: AbstractPage|array|null empty if unable to convert



renderLink
++++++++++

.. function:: renderLink()


    Renders the given $page as a link element, with $attrib = $relation

    :param AbstractPage: the page to render the link for
    :param string: the attribute to use for $type,
                                        either 'rel' or 'rev'
    :param string: relation type, muse be one of;
                                        alternate, appendix, bookmark,
                                        chapter, contents, copyright,
                                        glossary, help, home, index, next,
                                        prev, section, start, stylesheet,
                                        subsection

    :rtype: string rendered link element

    :throws: Exception\DomainException if $attrib is invalid



render
++++++

.. function:: render()


    Renders helper
    
    Implements {@link HelperInterface::render()}.

    :param AbstractContainer|string|null: [optional] container to render.
                                        Default is to render the
                                        container registered in the
                                        helper.

    :rtype: string helper output





Constants
---------

RENDER_ALTERNATE
++++++++++++++++

RENDER_STYLESHEET
+++++++++++++++++

RENDER_START
++++++++++++

RENDER_NEXT
+++++++++++

RENDER_PREV
+++++++++++

RENDER_CONTENTS
+++++++++++++++

RENDER_INDEX
++++++++++++

RENDER_GLOSSARY
+++++++++++++++

RENDER_COPYRIGHT
++++++++++++++++

RENDER_CHAPTER
++++++++++++++

RENDER_SECTION
++++++++++++++

RENDER_SUBSECTION
+++++++++++++++++

RENDER_APPENDIX
+++++++++++++++

RENDER_HELP
+++++++++++

RENDER_BOOKMARK
+++++++++++++++

RENDER_CUSTOM
+++++++++++++

RENDER_ALL
++++++++++

