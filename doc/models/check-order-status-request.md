
# Check Order Status Request

## Structure

`CheckOrderStatusRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `merchantKey` | `string` | Required | - | getMerchantKey(): string | setMerchantKey(string merchantKey): void |
| `invoiceId` | `string` | Required | - | getInvoiceId(): string | setInvoiceId(string invoiceId): void |
| `includePendingStatus` | `string` | Required | - | getIncludePendingStatus(): string | setIncludePendingStatus(string includePendingStatus): void |

## Example (as JSON)

```json
{
  "merchant_key": "$2y$10$w/ODdbTmfubcbUCUq/ia3OoJFMUmkM1UVNBiIQIuLfUlPmaLUT1he",
  "invoice_id": "94846",
  "include_pending_status": "true"
}
```

