### Features

- Find a location in a circle which one you give radius meters.
- Find the distance location from anotrher location.
- Get the Google Maps link. Just give the lat, long. Take whole link.

# Location Search - PHP - Laravel

![Tourist-Male-Holding-Map](https://user-images.githubusercontent.com/57594143/196124306-c6a71b11-a675-44eb-82ad-323e28c694e3.jpeg)


![](https://img.shields.io/badge/Location%20Search-%3C3-yellow) ![](https://img.shields.io/github/issues/behlulbozal/location-search) ![](https://img.shields.io/github/tag/behlulbozal/location-search) ![](https://img.shields.io/github/release/behlulbozal/location-search) 


# Getting Started

####  Installing

	composer require behlulbozal/location-search

#### Migration Types
Add this columns to migration with these names and types.
```php
// Example Model Migration
 $table->double('latitude')->nullable();
 $table->double('longitude')->nullable();
```

####  Starting

```php
use behlulbozal\LocationSearch\Location;
Location::FindInCircle($lat, $long, $radius, Example::class);
```

# Usage 

####  Find In A Circle

```php
Location::FindInCircle($latitude, $longitude, $radius, Example::class);
```

####  Get Distance Between Two Location

```php
Location::GetDistance($latitude1, $longitude1, $latitude2, $longitude2);
```

####  Get Google Link

```php
Location::GoogleLink($latitude1, $longitude1);
```

# Contribution 

####  Get Google Link

You can create PR for upgrades. Open issues or solve the issues ;)


------------


![](https://avatars.githubusercontent.com/u/57594143?v=4)
BEHLÜL BOZAL
