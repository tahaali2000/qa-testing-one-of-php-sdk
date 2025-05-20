# API

```php
$aPIController = $client->getAPIController();
```

## Class Name

`APIController`

## Methods

* [Get a List of Items](../../doc/controllers/api.md#get-a-list-of-items)
* [Create a New Item](../../doc/controllers/api.md#create-a-new-item)


# Get a List of Items

```php
function getAListOfItems(): ItemsResponse
```

## Response Type

[`ItemsResponse`](../../doc/models/items-response.md)

## Example Usage

```php
$result = $aPIController->getAListOfItems();
```


# Create a New Item

```php
function createANewItem(ItemsRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ItemsRequest`](../../doc/models/items-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body = ItemsRequestBuilder::init()->build();

$aPIController->createANewItem($body);
```

