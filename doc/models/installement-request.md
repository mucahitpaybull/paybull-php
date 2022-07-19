
# Installement Request

## Structure

`InstallementRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `creditCard` | `string` | Required | - | getCreditCard(): string | setCreditCard(string creditCard): void |
| `amount` | `string` | Required | - | getAmount(): string | setAmount(string amount): void |
| `currencyCode` | `string` | Required | - | getCurrencyCode(): string | setCurrencyCode(string currencyCode): void |
| `merchantKey` | `string` | Required | - | getMerchantKey(): string | setMerchantKey(string merchantKey): void |
| `is2d` | `int` | Required | - | getIs2d(): int | setIs2d(int is2d): void |

## Example (as JSON)

```json
{
  "credit_card": "534261",
  "amount": "248.00",
  "currency_code": "TRY",
  "merchant_key": "$2y$10$w/ODdbTmfubcbUCUq/ia3OoJFMUmkM1UVNBiIQIuLfUlPmaLUT1he",
  "is_2d": 0
}
```

