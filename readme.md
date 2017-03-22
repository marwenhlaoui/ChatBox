## ChatBox
### Database
* Model 		- Message
				- Group
				- GroupMember
* Migration 	- create_messages_table
				- create_groups_table
				- create_groups_members_table
	+ messages : (Many-to-Many)
		* id
		* from (id user)
		* to (id user/group)
		* type (0:prived,1:group)
		* content
		* created_at
	+ groups : (Many-to-Many)
		* id
		* name
		* by (id user)
		* type (0:prived,1:public)
		* timestamps
	+ groups_members : (Many-to-Many)
		* user (id user)
		* group (id group)
		* role (0:member,1:admin)
		* timestamps
## Install

Open your terminal/git bash here:
```git
git clone https://github.com/marwenhlaoui/laravel-zero.git project-name 
```
Next open your project folder  
```git
cd project-name 
```
And update your laravel version with composer.json
```git
composer update 
``` 
Run all related script
```git
composer run-script post-root-package-install 
composer run-script post-create-project-cmd 
composer run-script post-install-cmd 
composer run-script post-update-cmd 
``` 

### Create your .env 

### Migrate database

```git
php artisan migrate
``` 
## By : [Marwen Hlaoui](https://marwenhlaoui.me) 
## License 
The Laravel framework and this code is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
