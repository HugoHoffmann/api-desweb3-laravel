# Documentação da API

1. Deverá conter o contas a receber
2. Deverá conter o contas a pagar
3. Informar balanço geral(saldo)
4. Criar:
   1. Contas a Receber
   2. Contas a Pagar

---

## contas a Pagar

### GET `/api/contasPagar`
Retorna todas as contas a pagar, conforme exemplo:
```json
[
{
  "id": "b1e6a81c-c1cc-47d2-b903-276a734047b4",
  "nome": "Cafeeeeeeeeeeeeeee",
  "status": "P",
  "valor": "99.00",
  "valorpago": "99.00",
  "data": "2019-09-01",
  "datapagamento": "2019-09-01",
  "created_at": "2019-09-17 23:15:08",
  "updated_at": "2019-09-17 23:16:45"
}
]
```

### GET `/api/contasPagar/{uuid}`
Retorna uma conta a pagar em específico, conforme exemplo:
```json
{
  "id": "b1e6a81c-c1cc-47d2-b903-276a734047b4",
  "nome": "Cafeeeeeeeeeeeeeee",
  "status": "P",
  "valor": "99.00",
  "valorpago": "99.00",
  "data": "2019-09-01",
  "datapagamento": "2019-09-01",
  "created_at": "2019-09-17 23:15:08",
  "updated_at": "2019-09-17 23:16:45"
}
```

### POST `/api/contasPagar`
Cria uma nova Contas a pagar
Necessário enviar um JSON conforme exemplo:
```json
{
  "nome": "Cafeeeeeeeeeeeeeee",
  "status": "P",
  "valor": "99.00",
  "valorpago": "99.00",
  "data": "2019-09-01",
  "datapagamento": "2019-09-01",
}
```

### PATCH `/api/contasPagar/{uuid}`
Altera uma conta a pagar existente.
Necessário enviar um JSON conforme exemplo:
```json
{
	"nome": "Cafeeeeeeeeeeeeeee",
	"status": "P",
	"data": "2019-09-01",
	"datapagamento": "2019-09-01",
	"valor": "99",
	"valorpago": "99"
}
```

### DELETE `/api/contasPagar/{uuid}`
Deleta uma conta a pagar existente

---

## Contas a receber

### GET `/api/contasReceber`
Retorna todas as contas a receber, conforme exemplo:
```json
[
{
    "id": "7aac1337-bca3-4329-bd6c-2a2063d56119",
    "nome": "Cafe 2",
    "status": "P",
    "valor": "100.00",
    "data": "2019-09-01",
    "datarecebido": "2019-09-01",
    "valorrecebido": "100.00",
    "created_at": "2019-09-17 23:19:02",
    "updated_at": "2019-09-17 23:19:02"
  }
]
```

### GET `/api/contasReceber/{uuid}`
Retorna uma conta a receber em específico, conforme exemplo:
```json
{
  "id": "7aac1337-bca3-4329-bd6c-2a2063d56119",
  "nome": "Cafe 2",
  "status": "P",
  "valor": "100.00",
  "data": "2019-09-01",
  "datarecebido": "2019-09-01",
  "valorrecebido": "100.00",
  "created_at": "2019-09-17 23:19:02",
  "updated_at": "2019-09-17 23:19:02"
}
```

### POST `/api/contasReceber`
Cria uma nova Conta a Receber
Necessário enviar um JSON conforme exemplo:
```json
{
  "id": "7aac1337-bca3-4329-bd6c-2a2063d56119",
  "nome": "Cafe 2",
  "status": "P",
  "valor": "100.00",
  "data": "2019-09-01",
  "datarecebido": "2019-09-01",
  "valorrecebido": "100.00",
}
```

### PATCH `/api/contasReceber/{uuid}`
Altera uma conta a receber existente.
Necessário enviar um JSON conforme exemplo:
```json
{
	"nome": "Cafe 3",
	"status": "P",
	"data": "2019-09-01",
	"datarecebido": "2019-09-01",
	"valor": "100",
	"valorrecebido": "100"
}
```

### DELETE `/api/contasReceber/{uuid}`
Deleta uma conta a receber existente

---

## Balanço

### GET `/api/balanco`
Retorna o saldo geral, conforme exemplo:
```json
[
{
    "saldo": "0"
}
]
```
