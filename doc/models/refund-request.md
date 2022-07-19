
# Refund Request

## Structure

`RefundRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoiceId` | `string` | Required | - | getInvoiceId(): string | setInvoiceId(string invoiceId): void |
| `merchantKey` | `string` | Required | - | getMerchantKey(): string | setMerchantKey(string merchantKey): void |
| `amount` | `string` | Required | - | getAmount(): string | setAmount(string amount): void |

## Example (as JSON)

```json
{
  "invoice_id": "9737",
  "merchant_key": "$2y$10$w/ODdbTmfubcbUCUq/ia3OoJFMUmkM1UVNBiIQIuLfUlPmaLUT1he",
  "amount": "0.5"
}
```

