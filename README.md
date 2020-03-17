## Structured data for SilverStripe 4

### Installation

`composer require jinjie/structureddata`

### How to use

Add the following to mysite.yml

```yml
SilverStripe\CMS\Model\SiteTree:
  extensions:
    - StructuredData\Extensions\StructuredDataExtension
```

Flush!

#### Define your data

Check out https://github.com/spatie/schema-org for documentation

```php
public function getStructuredSchemaData() {
    $organization = new Organization();
    $organization
        ->name('Swift DevLabs');

    return $organization;
}
```
