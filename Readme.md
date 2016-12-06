##randomAvatarsGenerator

PHP class to randomly generate simple avatars of 25x25 pixels. I was inspired of [Identicon](http://en.wikipedia.org/wiki/Identicon), I reproduce it in PHP but simpler and with far less features.

###Example

![Example](example.png)

###Usage

Simply use index.php as an example... If you don't want to use features related to the database like checkPresetIsUnique() and saveInDB(), you can remove the corresponding lines.

```php
$db = new PDO('mysql:host=HOST;dbname=DBNAME', 'USER', 'PASSWORD');
$avatar = new RandomAvatars($db);
$avatar->generate(); //It will generate a random preset.
$avatar->checkPresetIsUnique(); //It will make sure that the preset has never been saved in the database. If not it will try to generate another one.
$avatar->draw(); //The image will be drawn according to the preset.
$avatar->saveImage('generated', 'avatar.png'); //The image will be saved in the folder 'generated' with the name 'avatar.png'
$avatar->saveInDB(); //It will save the preset and the image location in the databse.
```

To use checkPresetIsUnique() and saveInDB() :  
1 - Make sure you have PDO enabled.  
2 - Change the uppercase values when you instantiate $db.  
3 - Create a table 'avatars' with the following SQL code (don't forget to change DBNAME to your database name) :
```sql
CREATE TABLE `DBNAME`.`avatars` ( `id` INT NOT NULL AUTO_INCREMENT , `preset` VARCHAR(255) NOT NULL , `image_location` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```

###Current work

- Generate avatars according to an IP address or a username.
- Add shapes/colours ?

###Contribute

Don't hesitate to improve the code and ask for a pull request, even small ones. I would be delighted to see other people taking part in this project :-).