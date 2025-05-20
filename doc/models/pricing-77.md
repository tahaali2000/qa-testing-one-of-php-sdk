
# Pricing 77

## Structure

`Pricing77`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `price` | `?float` | Optional | - | getPrice(): ?float | setPrice(?float price): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `discount` | `?float` | Optional | - | getDiscount(): ?float | setDiscount(?float discount): void |
| `validUntil` | `?DateTime` | Optional | - | getValidUntil(): ?\DateTime | setValidUntil(?\DateTime validUntil): void |
| `tax` | `?float` | Optional | - | getTax(): ?float | setTax(?float tax): void |
| `taxRate` | `?float` | Optional | - | getTaxRate(): ?float | setTaxRate(?float taxRate): void |
| `membershipFee` | `?float` | Optional | - | getMembershipFee(): ?float | setMembershipFee(?float membershipFee): void |
| `validityPeriod` | `?DateTime` | Optional | - | getValidityPeriod(): ?\DateTime | setValidityPeriod(?\DateTime validityPeriod): void |
| `shippingCost` | `?float` | Optional | - | getShippingCost(): ?float | setShippingCost(?float shippingCost): void |
| `shippingMethod` | `?string` | Optional | - | getShippingMethod(): ?string | setShippingMethod(?string shippingMethod): void |
| `serviceCharge` | `?float` | Optional | - | getServiceCharge(): ?float | setServiceCharge(?float serviceCharge): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `installment` | `?float` | Optional | - | getInstallment(): ?float | setInstallment(?float installment): void |
| `paymentDue` | `?DateTime` | Optional | - | getPaymentDue(): ?\DateTime | setPaymentDue(?\DateTime paymentDue): void |

## Example (as JSON)

```json
{
  "price": 109.32,
  "currency": "currency4",
  "discount": 137.04,
  "validUntil": "2016-03-13T12:52:32.123Z",
  "tax": 245.28
}
```

