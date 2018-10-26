## Commands  
To create the schemas:  
`vendor/bin/doctrine orm:schema-tool:create`
To delete the schemas:  
`vendor/bin/doctrine orm:schema-tool:drop --force`
To update all schemas:  
`vendor/bin/doctrine orm:schema-tool:update --force --dump-sql`

## Persist / Flush ?  
We use persist method to tell to the orm that we want to insert a new data to the database, but it doesn't immediatly insert the data. We need to call flush to persist all the datas that we passed to the previous persist method
