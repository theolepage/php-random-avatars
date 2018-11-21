# php-random-avatars

![Example](example.png)

PHP class to randomly generate simple avatars of 25x25 pixels.  

Inspired of [Identicon](http://en.wikipedia.org/wiki/Identicon).

## Usage

You can use `index.php` as an example.

```php
require 'randomAvatarsGenerator.php';
$db = new PDO('mysql:host=HOST;dbname=DBNAME', 'USER', 'PASSWORD');

$avatar = new randomAvatarsGenerator(); // Instantiate randomAvatarsGenerator.
$avatar->generate(); // Generate a random preset.
$avatar->checkPresetIsUnique(); // Make sure that the preset has never been saved in the database. If yes it will try to generate another one.
$avatar->draw(); // Draw the image corresponding to the preset.
$avatar->saveImage('generated', 'avatar.png'); // Save the image in the folder 'generated' with the name 'avatar.png'.
$avatar->saveInDB(); // Save the preset and the image location in the databse.
```

To use features relying on a database (`checkPresetIsUnique` and `saveInDB`):  
1. Make sure you have PDO enabled.
2. Change the uppercase values when you instantiate `$db`.
3. Create a table 'avatars' with the SQL code below.
```sql
CREATE TABLE `DBNAME`.`avatars` ( `id` INT NOT NULL AUTO_INCREMENT , `preset` VARCHAR(255) NOT NULL , `image_location` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```

## To-do

- Generate avatars according to an IP address or a username.
- Add shapes/colours?
- Improve structure to make it a PHP module