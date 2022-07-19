
# Preauth Confirm Payment API Request

## Structure

`PreauthConfirmPaymentAPIRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoiceId` | `string` | Required | - | getInvoiceId(): string | setInvoiceId(string invoiceId): void |
| `merchantKey` | `string` | Required | - | getMerchantKey(): string | setMerchantKey(string merchantKey): void |
| `status` | `int` | Required | - | getStatus(): int | setStatus(int status): void |
| `hashKey` | `string` | Required | - | getHashKey(): string | setHashKey(string hashKey): void |
| `total` | `int` | Required | - | getTotal(): int | setTotal(int total): void |

## Example (as JSON)

```json
{
  "invoice_id": "123456",
  "merchant_key": "$2y$10$w/ODdbTmfubcbUCUq/ia3OoJFMUmkM1UVNBiIQIuLfUlPmaLUT1he",
  "status": 1,
  "hash_key": "661ebbf2acc9d8bc:cb27:47tnM4SnmuVWRq9YMaHo2npFjXr7Nfe04poc_ri3g_R1NylhHZcj0Zu3Eul",
  "total": 97
}
```

