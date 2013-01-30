.. I18n/View/Helper/Plural.php generated using docpx on 01/30/13 03:26pm


Class
*****

Zend\\I18n\\View\\Helper\\Plural
================================

Helper for rendering text based on a count number (like the I18n plural translation helper, but when translation
is not needed).

Please note that we did not write any hard-coded rules for languages, as languages can evolve, we prefered to
let the developer define the rules himself, instead of potentially break applications if we change rules in the
future.

However, you can find most of the up-to-date plural rules for most languages in those links:
     - http://unicode.org/repos/cldr-tmp/trunk/diff/supplemental/language_plural_rules.html
     - https://developer.mozilla.org/en-US/docs/Localization_and_Plurals

Methods
-------

setPluralRule
+++++++++++++

.. function:: setPluralRule()


    Set the plural rule to use

    :param PluralRule|string: 

    :rtype: Plural 



__invoke
++++++++

.. function:: __invoke()


    Given an array of strings, a number and, if wanted, an optional locale (the default one is used
    otherwise), this picks the right string according to plural rules of the locale

    :param array|string: 
    :param int: 

    :throws Exception\InvalidArgumentException: 

    :rtype: string 



