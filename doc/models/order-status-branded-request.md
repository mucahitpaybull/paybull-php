
# Order Status Branded Request

## Structure

`OrderStatusBrandedRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `merchantKey` | `string` | Required | - | getMerchantKey(): string | setMerchantKey(string merchantKey): void |
| `invoiceId` | `string` | Required | - | getInvoiceId(): string | setInvoiceId(string invoiceId): void |
| `isDirectBank` | `int` | Required | - | getIsDirectBank(): int | setIsDirectBank(int isDirectBank): void |

## Example (as JSON)

```json
{
  "merchant_key": "$2y$10$w/ODdbTmfubcbUCUq/ia3OoJFMUmkM1UVNBiIQIuLfUlPmaLUT1he",
  "invoice_id": "96166",
  "is_direct_bank": 1
}
```

