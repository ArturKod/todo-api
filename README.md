**Тестовое задание (Junior PHP Developer)**

## Реализовал REST API для управления списком задач (To-Do-List) на PHP с использованием Laravel

1. Создал Laravel-проект

2. Реализовал API с CRUD-операциями для задач:
    - Создание задачи: POST /tasks (поля: title, description, status).
    - Просмотр списка задач: GET /tasks (возвращает все задачи).
    - Просмотр одной задачи: GET /tasks/{id}.
    - Обновление задачи: PUT /tasks/{id}.
    - Удаление задачи: DELETE /tasks/{id}. (реализовал softDeletes)

3. Валидация данных для title (не должен быть пустым), status должен быть boolean.

4. Использовал MySQL в качестве базы данных.

5. Код выгрузил в GitHub.

Тестировал API в **Postman**