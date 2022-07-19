
# Payment With 2 D Request

## Structure

`PaymentWith2DRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ccHolderName` | `string` | Required | - | getCcHolderName(): string | setCcHolderName(string ccHolderName): void |
| `ccNo` | `string` | Required | - | getCcNo(): string | setCcNo(string ccNo): void |
| `expiryMonth` | `string` | Required | - | getExpiryMonth(): string | setExpiryMonth(string expiryMonth): void |
| `expiryYear` | `string` | Required | - | getExpiryYear(): string | setExpiryYear(string expiryYear): void |
| `currencyCode` | `string` | Required | - | getCurrencyCode(): string | setCurrencyCode(string currencyCode): void |
| `installmentsNumber` | `int` | Required | - | getInstallmentsNumber(): int | setInstallmentsNumber(int installmentsNumber): void |
| `invoiceId` | `string` | Required | - | getInvoiceId(): string | setInvoiceId(string invoiceId): void |
| `invoiceDescription` | `string` | Required | - | getInvoiceDescription(): string | setInvoiceDescription(string invoiceDescription): void |
| `total` | `float` | Required | - | getTotal(): float | setTotal(float total): void |
| `merchantKey` | `string` | Required | - | getMerchantKey(): string | setMerchantKey(string merchantKey): void |
| `items` | [`Item[]`](../../doc/models/item.md) | Required | - | getItems(): array | setItems(array items): void |
| `name` | `string` | Required | - | getName(): string | setName(string name): void |
| `surname` | `string` | Required | - | getSurname(): string | setSurname(string surname): void |
| `hashKey` | `string` | Required | - | getHashKey(): string | setHashKey(string hashKey): void |

## Example (as JSON)

```json
{
  "cc_holder_name": "John Dao",
  "cc_no": "5406675406675403",
  "expiry_month": "12",
  "expiry_year": "2026",
  "currency_code": "TRY",
  "installments_number": 1,
  "invoice_id": "34546434353",
  "invoice_description": "INVOICE TEST DESCRIPTION",
  "total": 5,
  "merchant_key": "$2y$10$w/ODdbTmfubcbUCUq/ia3OoJFMUmkM1UVNBiIQIuLfUlPmaLUT1he",
  "items": [
    {
      "name": "Item",
      "price": 24.0,
      "quantity": 1,
      "description": "item3 description"
    }
  ],
  "name": "John",
  "surname": "Dao",
  "hash_key": "661ebbf2acc9d8bc:cb27:47tnM4SnmuVWRq9YMaHo2npFjXr7Nfe04poc__ri3g__R1NylhHZcj0Zu3Eul4K7tPmEV2kRxpiDUa8If4xgxAHyM6j+mJaLGL73FFFxoEEJcwhqr5GYOTbQbT7+G2TtnU"
}
```

