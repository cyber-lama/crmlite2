## Eloquent (начало)
1. `ModelName::where('colimn_name', 'operatorName', 'value')`
2. `ModelName::findOrFail('id')` - получить запись по id, или отдать ошибку 404
3. `ModelName::find('id')` - получить запись по id
4. `ModelName::orderByDesc/orderBy('column')` - сортировка
5. `<Query>->first()` - получить одну запись
6. `<Query>->all()` - получить все записи
