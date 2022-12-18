# Important Tips

This file contains important tips

## Serialized Array exact string match

```PHP
'meta_query' => array(
    array(
        'key' => 'meta_key_name', // name of custom field
        'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "01234"
        'compare' => 'LIKE'
    )
)
```
