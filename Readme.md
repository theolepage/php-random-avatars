##randomAvatarsGenerator

PHP class to randomly generate simple avatars of 25x25 pixels. I was inspired of [Identicon](http://en.wikipedia.org/wiki/Identicon), I reproduce it in PHP but simpler and with far less features.

###Example

![Example](example.png)

###Usage

Simply use index.php as an example...

```php
$avatar = new RandomAvatars();
$avatar->generate();
$avatar->checkPresetIsUnique();
$avatar->draw();
$avatar->saveImage('generated', 'avatar.png');
$avatar->saveInDB();
```

If you want to use features related to the database (checkPresetIsUnique and saveInDB) :  
1 - Make sure you have PDO enabled.  
2 - Create a table 'avatars' with this SQL code (Don't forget to change DBNAME to your database name) :
```sql
CREATE TABLE `DBNAME`.`avatars` ( `id` INT NOT NULL AUTO_INCREMENT , `preset` VARCHAR(255) NOT NULL , `image_location` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```
3 - Initialize $db in index.php. For example : `$db = new PDO('mysql:host=HOST;dbname=DBNAME', 'USER', 'PASSWORD');`  
4 - Instanciate RandomAvatars with $db : `$avatar = new RandomAvatars($db);`.

###Current work

- Generate avatars according to an IP address or a username.
- Add shapes/colours ?

###Contribute

Don't hesitate to improve the code and ask for a pull request, even small ones. I would be delighted to see other people taking part in this project :-).