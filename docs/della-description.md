#AlphaKit Della
###Della is a High-Power General Purpose CASE[^1] Tool for WordPress

[^1]: Case = Computer Aided System Engineering (A big important nineties IT buzzword!)

AlphaKit Della is a fast, easy-to-use but yet feature rich software modelling tool for WordPress that enables correct and scalable software architecture for extensions and non-trivial web-projects built on top of the WordPress Web-CMS.

####A brief overview of Della
While WordPress itself isn't always that well structured internally - one could argue that it is, in fact, a historically grown mess - it *is* a good basic system to build non-trivial web-applications on and has enough popularity and market presence to justify doing so. Della was built to cater to this specific set of web-software scenarios.

Applications built with Della utilize the WordPress Management capabilities whereever possible. Della avoids *'reinventing the wheel'* and focuses on offering a toolset for extending WordPress functionality and data handling beyond its usual use-cases.

AlphaKit Della tries to take advantage of the fact that WordPress only runs on MySQL/MariaDB and thus builds and generates entities, relational trails, searches and other elements of well architectured software using database technology and features specific to MySQL/MariaDB (Versions 5.1 and up). This focus on WordPress and MySQL/MariaDB is a tradeoff that enables a stronger emphasis on advanced features and greater overall performance of applications designed with AlphaKit Della.

####What does Della do?
In broad strokes Della is a drag-drop-and-click tool that generates and manages software object-types at the persistance layer (MySQL/MariaDB DB Tables) and application layer (PHP classes) and handles their relations to one another - _*'Linkage'*_ in Della terminology. AlphaKit Della manages live application data in a non-destrictive manner and has a set of functions to generate relational trails, searches, dataviews and objects with mock-data for easy testing. It also supports data entry views for relational trails ("Forms") and Ajax/Ajaj connectors for asychronous data handling.

Whereever feasible AlphaKit Della ties in to features and functions specific to WordPress, such as WPs user-management and roles, pagination, object representation, iteration, plugin structure, web-templating and so forth.
         *
####Q&A
#####Is Della a Forms builder?
No. Della is definitely not a form builder!

To emphasise: AlphaKit Della is a CASE* Tool, _**not**_ a form building tool. It **_does_** have heavy support for sophisticated form and view generation and form-trails using Ajax/Ajaj for asychronous form handling and it also comes with powerful validation features, but it is _not_ a form building tool. Emphasis in AlphaKit Della is on Application modelling, handling persistance, searches and so forth.

That been said, if you want to build an application that supports sophisticated forms with features such multiple entity editing in combined views, Ajaj and/or professional validation, you might find the usual form building tools lacking in features. 

Della generates superb forms which, on top of being great, are also very easy editable. But Della _only_ does this as a result of clean modelling, application design and programming. If you don't know what that is or how to do it, working with Della might be disappointing. Della is not a tool for a quick and dirty form hack - at least not if you're not familiar with using it. And let's face the truth: Most forms in WP are quick and dirty hacks.

#####Is Della suited for agile development?
Yes. That's precisely what Della was built for. Della is the attempt to provide a tool that provides application development, extension and modification in record time and one-up the ease of use and agility of the usual web frameworks like Rails or Symphony. With Della you can even remodel applications with live data more or less on the fly.

#####When should you use AlphaKit Della?
Whenever you find yourself thinking _"Oh, I know, I'll just use a special category of posts and extend those posts with some metadata and then use that metadata for my application ..."_ - then you should probably look into Della and clean software architecture using properly modeled entities, views and object-types. If you're building a specific application that involves more than one PHP file and more than one MySQL/MariaDB table and/or various categories of wp posts or cpt's and tricky stunts using those, you should look into using Della to model your project and stear clear of coaxing the wp-post object into doing a job it wasn't meant for.

You should also use Della if you are a web-developer / php-developer unfamiliar with WordPress internals but interested in building an application that is meant to be tied in to the WordPress ecosystem. You then use Della to model you application inside a WP plugin directory, the default way of doing it - and tie in your special application into the WP environment at the end of development with help of a WP developer or designer familiar with WPs specialities.

#####When should you *not* use Della?
If what you want to achieve can be done with a wp-post object, one or two meta-data attributes and perhaps some already existing plugins, then Della might be overkill. If you can and want to completely avoid working with PHP classes by bolting a set of WP Plugins together with a stapler, duct-tape and some flaky PHP routines stuffed into your themes functions.php and hooked somewhere into the WP execution loop *and* you are totally snug with doing that, then Della probably is not for you and might be overkill for the project you're building.

There are scenarios where breaking out Della without knowing it yet would take longer than using the usual set of WP hacks to get the job done. Della is a tool that expects you to understand basic principles of object oriented application design and architecture. If you aren't familiar with these principles, Della can take some getting used to ...

A rough rule of thumb would be: If you can't program and/or do not now how to model a useful entity
relationship structure, don't use Della. It's just about that simple.

Likewise, if you are in over your head and find yourself asking a WP and/or PHP developer to help you out, show him/her Della if he/she doesn't know it yet. She/he will be thankful for that. It is very well possible that Della is perfect for your project in such a case. Only you won't be using it that much - but your
programmer will.

####Details on Della

#####Della comes as a WordPress Plugin
AlphaKit Della is delivered as a regular WordPress Plugin for zero-fuss installation and deployment.

#####System Requirements
AlphaKit Della has following requirements: WP 4.7+, PHP 5.3+, MySQL/MariaDB 5.1+, PHP PDO Extension installed on the Webserver you're using. Using PHP 7 is recommended.

#####Dellas scope of usefullness and operation
One word of warning: When starting with Della it's possible to get carried away and get caught up normalising the heck out of your application model. Doing this, of course, can have significant impact on the performance of your application and the underlying MySQL/MariaDB database.

By default, Della only supports relational trails across a maximum of 5 different entities, and if you catch yourself building a trail, view or combined object using more than 5 entities, you should take the time and think about your applications workflow and user experience. It is likely, that you're attempting to much in one stroke. Most applications get by with 3 or 4 entities per view/trail perfectly.

Likewise, the amount of entities per project is limited to 99. If you're trying to re-engineer the SAP ERP system or something like that and find that amount lacking, you are free to change that number to something higher in Dellas configuration. Correct function of Della is not tested beyond 99 entities per project though. If you know what you are doing though, it is very well possible to build applications that way exceed the default cap of 99 entities per application/project.
         *

        /**
        Features:
        - [Migrate DB to UTF-8]
        - [Generate Test Data]
        - Sort Datatypes in Dropdowns by: [intended type to use] [mean size] [alphabetical]
        - Sort Entities by: [Alphabetical][Association + Alphabetical][Application Areas Alphabetical]
        - Sort Attributes by: Type, Size, Alphabetical, as stored in DB (ready for Drag & Drop rearranging)

        Complex Actions
        - Split Off marked Attributes -> Give Name for new Entity


        Naming Schema for fresh Entities not yet saved:
                UnsavedUnnamedEntity-01
                UnsavedUnnamedEntity-02
                UnsavedUnnamedEntity-03
                (Max. number of Entites/Objecttypes: 99. If you need more than 99 Objecttypes your application
                is probably badly architected and you need to redesign. However, if you insist on
                building a fully integrated web-based ERP system for a multinational corporation in Della,
                set the variable $maxEntities to whatever value you desire.
                Don't complain about speed issues or web latency though.
                If you normalise out core-functionality reference tables rather than making them
                PHP assoc-array-constant or class-constant at the application layer your being stupid and should go back to Java or
                Ruby and continue your bloated mess there. We do things the PHP/WordPress way here - which
                means getting the job done before getting all academic with architecture and normalisation.
                Think about that for a minute before exceeding the 99 typemodels limit.
                Likewise *do* please build specific type-models before storing those objects as JSON objects
                in single DB fields. That's even more stupid. Yes, WP and a ton of its plugins do that.
                Especially using the metafields thing. And, yes, that is very stupid and the reason we built Della in the first place.)
        Linkage
        Columns (sortable by) Association, Role, Adjacent/Far Entity
        Relations
                //0-1, 0-*, 1, 1-* for hasZeroOrOne farEntities:
                //0-* for hasZeroToMany farEntities in templateentity

        **/