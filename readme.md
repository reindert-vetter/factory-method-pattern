## Laravel Facade
```php
<?php
Psp::setDriver($tenant->payment_provider);
$isPaid = Psp::isPaid();
```

vs:

## Factory method pattern
```php
<?php
$driver = PaymentProviderFactory::create($tenant->payment_provider);
$isPaid = $driver->isPaid();
```



