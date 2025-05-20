
# Items Request

## Structure

`ItemsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `value` | `?int` | Optional | - | getValue(): ?int | setValue(?int value): void |
| `tags` | `?(string[])` | Optional | - | getTags(): ?array | setTags(?array tags): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `details` | [`?Details`](../../doc/models/details.md) | Optional | - | getDetails(): ?Details | setDetails(?Details details): void |
| `status` | [`?string(StatusEnum)`](../../doc/models/status-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `pricing` | [Pricing](../../doc/models/pricing.md)\|[Pricing](../../doc/models/pricing.md)1\|[Pricing](../../doc/models/pricing.md)2\|[Pricing](../../doc/models/pricing.md)3\|[Pricing](../../doc/models/pricing.md)4\|[Pricing](../../doc/models/pricing.md)5\|[Pricing](../../doc/models/pricing.md)6\|null | Optional | This is a container for any-of cases. | getPricing(): | setPricing( pricing): void |

## Example (as JSON)

```json
{
  "id": 140,
  "name": "name6",
  "value": 92,
  "tags": [
    "tags1",
    "tags2",
    "tags3"
  ],
  "metadata": {
    "key0": "metadata7",
    "key1": "metadata8"
  }
}
```

