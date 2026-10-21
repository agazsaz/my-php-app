# PHP CI/CD Pipeline

Лабораторная работа: настройка пайплайна CI/CD для PHP-приложения с использованием GitHub Actions и Docker.

## 1. Локальный запуск Docker
Приложение успешно собирается и запускается в контейнере локально. Команда `docker run --rm my-php-app:latest` выводит приветствие.

**<img width="279" height="52" alt="Снимок экрана 2026-10-09 145207" src="https://github.com/user-attachments/assets/a4ba7aa1-d6a2-49c5-a089-20d35138c5f4" />
**

## 2. Успешный запуск пайплайна (GitHub Actions)
При пуше в ветку `main` автоматически запускается пайплайн, состоящий из трех последовательных джобов: `Syntax Check`, `Run Tests` и `Build Docker Image`. Все этапы завершились успешно (статус Success).

**<img width="1236" height="316" alt="Снимок экрана 2026-10-21 214521" src="https://github.com/user-attachments/assets/765399b8-ccc9-4081-9953-2bdb1c814af8" />
**

## 3. Логи тестирования
Джоб `Run Tests` успешно выполняет юнит-тесты с помощью PHPUnit. Тесты пройдены без ошибок.

**<img width="1201" height="418" alt="Снимок экрана 2026-10-21 220438" src="https://github.com/user-attachments/assets/cd99a8bc-1b30-4345-a74f-e95726a8bf22" />
**

## 4. Логи сборки Docker-образа в CI
Джоб `Build Docker Image` собирает образ с помощью `docker/build-push-action` и проверяет его работоспособность, запуская контейнер прямо в среде GitHub Actions.

**<img width="1558" height="884" alt="Снимок экрана 2026-10-21 215401" src="https://github.com/user-attachments/assets/9862d78a-64a5-44a4-8996-2a396b37e04b" />
**

## Вывод
В ходе лабораторной работы был настроен полный цикл CI/CD для PHP-приложения. Реализована автоматическая проверка синтаксиса, запуск тестов и сборка Docker-образа при каждом пуше. Все поставленные задачи выполнены в полном объеме.
