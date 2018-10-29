# Consignes
1) Créez vos classes (MPD) à partir du modèle de classe disponible ci-dessous:  
![MPD](https://i.imgur.com/k0W07Rt.png)

2) Créez toutes les fonctionnalités décritent (get, getAll, create, update, delete) dans /app/api/hashtag
Un exemple est fourni dans /app/api/post/getAll.php pour vous guider

## Commands  
To create the schemas:  
`vendor/bin/doctrine orm:schema-tool:create`  
To delete the schemas:  
`vendor/bin/doctrine orm:schema-tool:drop --force`  
To update all schemas:  
`vendor/bin/doctrine orm:schema-tool:update --force --dump-sql`  

## Persist / Flush ?  
We use persist method to tell to the orm that we want to insert a new data to the database, but it doesn't immediatly insert the data. We need to call flush to persist all the datas that we passed to the previous persist method

## Update composer autoload  
`composer dump-autoload -o`

## Relations
In a many-to-many relation, both sides can be the owning side of the relation. However, in a bi-directional many-to-many relation, only one side is allowed to be the owning side.  
- The "owning side" has to use the inversedBy.  
- The "inverse side" has to use the mappedBy.
