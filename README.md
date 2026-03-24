# Лабораторная работа №6: Изучение нереляционных баз данных (Redis, Elasticsearch, ClickHouse) и взаимодействие с ними через API с помощью GuzzleClient.

## 👩‍💻 Автор
ФИО: Баграмов Владимир Андреевич  
Группа: ПМИ2 ИП1 ПГ2

---

## 📌 Описание задания
Закрепить навыки работы с HTTP-запросами и API-интерфейсами для взаимодействия с современными нереляционными СУБД.
Вариант задания: 12 (Геолокация, Elasticsearch).


Результат доступен по адресам: 
[http://localhost:8080/index.php](http://localhost:8080/index.php) - Вывод данных Elasticsearch

---

## ⚙️ Как запустить проект

1. Клонировать репозиторий:
   ```bash
   git clone <ссылка на репозиторий>
   cd WEB-Lab6
Запустить контейнеры:
```bash
docker-compose up -d --build
```
Открыть в браузере:
```http://localhost:8080/index.php```
📂 Содержимое проекта

```docker-compose.yml``` — описание используемых контейнеров

```nginx/default.conf``` — конфигурационный файл сервера Nginx

```www/index.php``` — PHP-файл с выводом данных из Elasticsearch

```www/ClientFactory.php``` — PHP-файл с описанием класса ClientFactory, работающего с сервером через HTTP-запросы

```www/ElasticExample.php``` — PHP-файл с описанием класса ElasticExample, работающего с системой ElasticSearch

Файлы composer:

```www/src```, ```www/vendor```, ```www/composer.json```, ```www/composer.lock```.

✅ Результат
Сервер в Docker успешно запущен, Nginx отдаёт PHP-файл с данными из Elasticsearch.
