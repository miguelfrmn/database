## Usage

Get a class instance:
```php
$db = Database::getInstance();
```

Select all rows:
```php
$rows = $db->select('employees');
```

Select only employees named Miguel ordered by city:
```php
$where = array('name'=>'miguel');
$order = 'city asc';
$rows = $db->select('employees', compact('where','order'));
```

Select only one row:
```php
$where = array('id'=>123);
$row = $db->selectOne('employees', compact('where'));
```

Insert a new row:
```php
$data = array('name'=>'miguel', 'city'=>'madrid');
$db->insert('employees', $data);
```

Updating rows:
```php
$where = array('id'=>123);
$data = array('city'=>'new york');
$db->update('employees', $data, compact('where'));
```

Custom query:
```php
$rows = $db->query('SELECT * FROM employees');
```

Custom sentence:
```php
$db->execute("UPDATE employees SET name = 'mike' WHERE id = 123");
```