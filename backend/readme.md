# Documentação da API

1. Deve ser criado um usuário
2. O usuário precisa fazer login
3. Utilizando o token retornado no login devem ser executados os próximos passos
4. Criar:
   1. Categorias
   2. Calçados
   3. Pedidos
   4. PedidosCalcados

## Auth

### POST `/api/auth/login`
Efetua o login
Necessário enviar um JSON conforme exemplo: 
```json
{
  "email": "la.moratelli@gmail.com",
  "password": "123456"
}
```
### POST `/api/auth/logout`
Efetua o logout
<p style='color:#FF0000'>Necessário estar logado.</p>

### POST `/api/auth/refresh`
Atualiza o `token`
<p style='color:#FF0000'>Necessário estar logado.</p>

### POST `/api/auth/me`
Retorna as informações do usuário logado
<p style='color:#FF0000'>Necessário estar logado.</p>

---

## Usuário

### GET `/api/usuarios`
Retorna todos os usuários da aplicação, conforme exemplo:
```json
[
  {
    "id": "2caa41af-b9af-422b-bb93-e270cf3013e3",
    "nome": "Luiz",
    "email": "la.moratelli@gmail.com",
    "password": "$2y$10$BVfqg5BSgXiU8W.tN32LA.JI3N0s1wBiUeBB2dcfPxRTRWQT5zHHC",
    "created_at": "2019-09-10 14:49:03",
    "updated_at": "2019-09-10 19:05:06"
  }
]
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### GET `/api/usuarios/{id}`
Retorna todas as informações de um usuário específico, conforme exemplo:
```json
{
  "id": "2caa41af-b9af-422b-bb93-e270cf3013e3",
  "nome": "Luiz",
  "email": "la.moratelli@gmail.com",
  "password": "$2y$10$BVfqg5BSgXiU8W.tN32LA.JI3N0s1wBiUeBB2dcfPxRTRWQT5zHHC",
  "created_at": "2019-09-10 14:49:03",
  "updated_at": "2019-09-10 19:05:06"
}
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### POST `/api/usuarios`
Cria um novo usuário
Necessário enviar um JSON conforme exemplo:
```json
{
  "nome": "Luiz",
  "email": "la.moratelli@gmail.com",
  "password": "123456"
}
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### PUT/PATCH `/api/usuarios/{id}`
Altera um usuário existente, necessário que o usuário logado seja o mesmo que está sendo alterado.
Necessário enviar um JSON conforme exemplo:
```json
{
  "nome": "Luiz"
}
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### DELETE `/api/usuarios/{id}`
Deleta um usuário existente

<p style='color:#FF0000'>Necessário estar logado.</p>

---

## Categoria

### GET `/api/categorias`
Retorna todos as categorias da aplicação, conforme exemplo:
```json
[
  {
    "id": "1a826a9e-8f5d-4aa5-9db4-a27d25f06944",
    "nome": "Verão",
    "created_at": "2019-09-10 19:00:27",
    "updated_at": "2019-09-10 19:00:27"
  }
]
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### GET `/api/categorias/{id}`
Retorna todas as informações de uma categoria específico, conforme exemplo:
```json
{
  "id": "1a826a9e-8f5d-4aa5-9db4-a27d25f06944",
  "nome": "Verão",
  "created_at": "2019-09-10 19:00:27",
  "updated_at": "2019-09-10 19:00:27"
}
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### POST `/api/categorias`
Cria uma nova categoria
Necessário enviar um JSON conforme exemplo:
```json
{
  "nome": "Verão"
}
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### PUT/PATCH `/api/categorias/{id}`
Altera uma categoria existente
Necessário enviar um JSON conforme exemplo:
```json
{
  "nome": "Inverno"
}
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### DELETE `/api/categorias/{id}`
Deleta uma categoria existente

<p style='color:#FF0000'>Necessário estar logado.</p>

---

## Calçado

### GET `/api/categorias/{id}/calcados`
Retorna todos os calçados de uma categoria da aplicação, conforme exemplo:
```json
[
  {
    "id": "ea40d7af-a471-4da1-adc6-2d37d0128856",
    "nome": "Bota",
    "categoria_id": "1a826a9e-8f5d-4aa5-9db4-a27d25f06944",
    "preco": "10.50",
    "created_at": "2019-09-10 19:00:47",
    "updated_at": "2019-09-10 19:00:47"
  }
]
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### GET `/api/categorias/{id}/calcados/{id}`
Retorna todas as informações de um calçado de uma categoria específica, conforme exemplo:
```json
{
  "id": "ea40d7af-a471-4da1-adc6-2d37d0128856",
  "nome": "Bota",
  "categoria_id": "1a826a9e-8f5d-4aa5-9db4-a27d25f06944",
  "preco": "10.50",
  "created_at": "2019-09-10 19:00:47",
  "updated_at": "2019-09-10 19:00:47"
}
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### POST `/api/categorias/{id}/calcados`
Cria um novo calçado de uma categoria
Necessário enviar um JSON conforme exemplo:
```json
{
  "nome": "Bota",
  "preco": "10.50"
}
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### PUT/PATCH `/api/categorias/{id}/calcados/{id}`
Altera um calçado de uma categoria existente
Necessário enviar um JSON conforme exemplo:
```json
{
  "nome": "Tamanco",
  "preco": "100.50"
}
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### DELETE `/api/categorias/{id}/calcados/{id}`
Deleta um calçado de uma categoria existente

<p style='color:#FF0000'>Necessário estar logado.</p>

---

## Pedido

### GET `/api/pedidos`
Retorna todos os pedidos da aplicação, conforme exemplo:
```json
[
  {
    "id": "238cff3b-9c1d-4cb6-80a1-10b4d47025fb",
    "usuario_id": "2caa41af-b9af-422b-bb93-e270cf3013e3",
    "desconto": "10.00",
    "created_at": "2019-09-10 19:12:11",
    "updated_at": "2019-09-10 19:12:11"
  }
]
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### GET `/api/pedidos/{id}`
Retorna todas as informações de um pedido específico, conforme exemplo:
```json
{
  "id": "238cff3b-9c1d-4cb6-80a1-10b4d47025fb",
  "usuario_id": "2caa41af-b9af-422b-bb93-e270cf3013e3",
  "desconto": "10.00",
  "created_at": "2019-09-10 19:12:11",
  "updated_at": "2019-09-10 19:12:11"
}
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### POST `/api/pedidos`
Cria um novo pedido
Necessário enviar um JSON conforme exemplo:
```json
{
  "desconto": "10.50"
}
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### PUT/PATCH `/api/pedidos/{id}`
Altera um pedido existente
Necessário enviar um JSON conforme exemplo:
```json
{
  "desconto": "11.50"
}
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### DELETE `/api/pedidos/{id}`
Deleta um pedido existente

<p style='color:#FF0000'>Necessário estar logado.</p>

---

## Pedido Calçado

### GET `/api/pedidos/{id}/calcados`
Retorna todos os calçcados de um pedido da aplicação, conforme exemplo:
```json
[
  {
    "id": "a23a999c-2b84-4523-ab4d-90d21dda0edc",
    "pedido_id": "238cff3b-9c1d-4cb6-80a1-10b4d47025fb",
    "calcado_id": "ea40d7af-a471-4da1-adc6-2d37d0128856",
    "quantidade": 1,
    "created_at": "2019-09-10 19:29:29",
    "updated_at": "2019-09-10 19:29:29"
  }
]
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### GET `/api/pedidos/{id}/calcados/{id}`
Retorna todos os calçcados de um pedido específico, conforme exemplo:
```json
{
  "id": "a23a999c-2b84-4523-ab4d-90d21dda0edc",
  "pedido_id": "238cff3b-9c1d-4cb6-80a1-10b4d47025fb",
  "calcado_id": "ea40d7af-a471-4da1-adc6-2d37d0128856",
  "quantidade": 1,
  "created_at": "2019-09-10 19:29:29",
  "updated_at": "2019-09-10 19:29:29"
}
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### POST `/api/pedidos/{id}/calcados`
Adiciona um ou mais calçados ao pedido
Necessário enviar um JSON conforme exemplo:
```json
{
  "calcados": [
    {
      "id": "ea40d7af-a471-4da1-adc6-2d37d0128856",
      "quantidade": 1
    }
  ]
}
```
<p style='color:#FF0000'>Necessário estar logado.</p>

### DELETE `/api/pedidos/{id}/calcados/{id}`
Deleta um ou mais calçados do pedido existente
Necessário enviar um JSON conforme exemplo:
```json
{
  "calcados-id": [
    "ea40d7af-a471-4da1-adc6-2d37d0128856"
  ]
}
```

<p style='color:#FF0000'>Necessário estar logado.</p>