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

## Starts with and ends with meta query

<https://core.trac.wordpress.org/ticket/53450>

## Register and dispatch new js event

### Register and dispatch

```JAVASCRIPT
const event = new Event('unique_event_name');
document.dispatchEvent(event);
```

### Listen to the event

```JAVASCRIPT
document.addEventListener('unique_event_name', function () {
 //do something
});
```
