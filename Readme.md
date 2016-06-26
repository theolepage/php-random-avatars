##randomAvatarsGenerator

PHP class to randomly generate simple avatars of 25x25 pixels. I was inspired of [Identicon](http://en.wikipedia.org/wiki/Identicon), I reproduce it in PHP but simpler and with far less features.

##Example

![Example](example.png)

###Usage

Simply use index.php as an example...

```php
$avatar = new RandomAvatars($db);
$avatar->generate();
$avatar->checkPresetIsUnique();
$avatar->draw();
$avatar->saveImage('generated', 'test.png');
$avatar->saveInDB();
```

If you want to use features related to the database (checkPresetIsUnique and saveInDB) :  
1 - Change $db in index.php.  
2 - Create a table 'avatars' with this SQL code :
```sql
CREATE TABLE `randomavatars`.`avatars` ( `id` INT NOT NULL AUTO_INCREMENT , `preset` VARCHAR(255) NOT NULL , `image_location` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```

###Current work

- Generate avatars according to an IP address or a username.
- Add shapes/colours ?

###Contribute

Don't hesitate to improve the code and ask for a pull request, even small ones. I would appreciate to see other people taking part in this project :-).