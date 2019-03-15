###A Glossary of Della Terminology

**Model** - the entire model of an application including all objects/entities, views, trails relations and such. The entire logical abstract representation of an object-oriented program designed in Della. A project in Della has one model, so the term Project and model can sometimes be used interchangeably in Della terminology.

**Object** <- The term "object" in Della describes the class or type of object.
Since Della emphasises on the abstract model of an application, the distinction of class/type and object isn't made in Della, at least not with these terms (see "Instance"). Instead the concept of the object (class) itself is called object.

**Entity** <- This is basically the same as the della object or class of object, but emphasises more the database structural representation of the object. Both terms can more or less be used interchangeably in Della, since Della emphasises MySQL features and sticks close to MySQL, relying on it and automatic SQL generation for searches and performance.

**Relation** - a connection between two objects. (relations can be one-on-one or multi (one-on-many, many-to-many) in Della)

**a *multi* Relation** - a one-on-many or many-to-many relation between two objects. A multi relation is always resolved in a separate database table that in itself isn't an entity, but resembles what mathematicians in the domain of the theory of sets call ... a relation (Big surprise! :-) )

**far object / far entity** <- an entity or object that is adjacent to another specific object in a Relation

**Attribute**
The abstract attribute of an object. This basically is a key-value set of some sort belonging to a specific object. The key being the attribute and the value being ... the attributes value (Duh.).

**Type** <- Type in Della refers to the datatype of an attribute. The available types in Della represent a subset of the datatypes in the MySQL Database engine.

**Instance** <- a concrete instance of a Della object, containing data, an individual id and so forth. This is the thing that is sometimes called "object" in other surroundings, like, for instance, in the Java programming language. It may also be called object when dealing with a specific programming problem at the application layer. Under these circumstances
the terms "object" and "instance" are often used interchangebly.

**Linkage** <- Linkage is the overarching term referring to anything regarding relations between entities and their handling and/or resolution. Object IDs, roles and such are all related to the field of "Linkage" in Della.

**Role** <- A role a far object Relations in Della are always resolved using roles in such a way that an objects relation to a far entity has an own name specific to the object and its relation to the far object. This name can be the same name as the far object, but can't be if the object has multiple relations with the same far object. For example: An "airplane"
object might have two or more relations with the "person" object, but both would have to be resolved by roles, such as "pilot" and "copilot". Della roles are not to be mistaken for / mixed up with WP roles. In the domain of Della, these are called WP User Roles or simply "user-roles".

**Trail, relational Trail**
A trail is the representation of a string of related objects bundled into one object as viewed from the outside of the application (see "View"). In itself a trail resembles an object, or better, a specific class of object (or simply "class") at the application layer of Della, in PHP. It does not have am own representation in an entity. Trails represent an unbroken linkage string between up to 5 objects. In Della, Trails are a requirement for building views that contain more that one object.

**View**

**Search, Search Trail**
In Della terminology a "Search" is a trail specifically assembled and designed for searching across multiple objects. It has a special trail representation that included auto-generated SQL queries to cover the search and, within Della, interface options to mark certain attributes in objects within the search trail for database indexing.

**Validation**

**Bounce**

**Translation**