# chat
chat

### usersテーブル
|カラム|型|null|
|----|----|----|
|id|BigInt|x|
|name|string|x|
|email|string|x|
|password|string|x|
|image|string|○|
|created_at|timestamp|x|
|updated_at|timestamp|x|
|deleted_at|timestamp|○|

### messagesテーブル
|カラム|型|null|
|----|----|----|
|id|BigInt|x|
|text|string|x|
|from_user_id|int|x|
|to_user_id|int|x|
|created_at|timestamp|x|
|updated_at|timestamp|x|
|deleted_at|timestamp|○|
