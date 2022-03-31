Developed functionality on Laravel with MySQL database. 
Implemented^
    displaying a list of products, 
    viewing a product card, 
    adding, 
    editing, 
    deleting a product. 
Created an Eloquent model "Contact" associated with the "contacts" table. The model implements Local Scope to get only available products (STATUS = “available”). Made validation of creation and editing: NAME is a required field, from 1 to 100 characters long; ARTICLE is a required field, only Latin characters and numbers, unique in the table. An administrator role has been created that can edit the article; editing the article is not available to other users. Implemented validation and verification of rights. 
Read more: 
