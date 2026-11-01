# Игры разума (PHP)

[![hexlet-check](https://github.com/s-cygankov/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/s-cygankov/php-project-45/actions)
Погрузитесь в экосистему PHP, научитесь настраивать рабочее окружение. Подружитесь с CodeSniffer (линтером, анализатором качества кода) и менеджером зависимостей Composer. Поймёте, чем git отличается от GitHub, поработаете с внешними репозиториями. Получите опыт построения архитектуры полноценного приложения и написания чистого кода.

Учебный проект Хекслета: https://ru.hexlet.io/programs/php
Как это должно работать: https://asciinema.org/a/l40Lrk3midkLmNEOmgZErGnY7

## Стек

- PHP 8.3 или выше
- Composer version 2
- Make

## Установка

Клонируйте репозиторий (по HTTPS или по SSH: `git@github.com:s-cygankov/php-project-45.git`) и установите зависимости:

```bash
git clone https://github.com/s-cygankov/php-project-45.git
cd php-project-45
make install
```

## Использование
### Запуск игр

| Игра | Команда | Суть |
|---|---|---|
| Чётность | `make brain-even` | ответить, чётное ли число |
| Калькулятор | `make brain-calc` | посчитать выражение |
| НОД | `make brain-gcd` | найти наибольший общий делитель |
| Прогрессия | `make brain-progression` | найти пропущенное число |
| Простое число | `make brain-prime` | ответить, простое ли число |

### Brain Even
[![asciicast](https://asciinema.org/a/UUDZrG47rYGWAVzD.svg)](https://asciinema.org/a/UUDZrG47rYGWAVzD)
### Brain Calc
[![asciicast](https://asciinema.org/a/p0TE65PCDW4O3Bs2.svg)](https://asciinema.org/a/p0TE65PCDW4O3Bs2)
### Brain Gcd
[![asciicast](https://asciinema.org/a/cBfzxnD2YBEf8ekq.svg)](https://asciinema.org/a/cBfzxnD2YBEf8ekq)
### Brain Progression
[![asciicast](https://asciinema.org/a/wbFTbyvoOqTdLTfy.svg)](https://asciinema.org/a/wbFTbyvoOqTdLTfy)
### Brain Prime
[![asciicast](https://asciinema.org/a/3N5sa6ZENp7f35zt.svg)](https://asciinema.org/a/3N5sa6ZENp7f35zt)

---

<details>
<summary>Автоматические тесты Хекслета</summary>

Тесты запускаются на каждый коммит. За запуск отвечает файл `.github/workflows/hexlet-check.yml` — не удаляйте и не переименовывайте ни его, ни репозиторий.

</details>

## О Хекслете

[Хекслет](https://ru.hexlet.io/) — школа программирования: авторские программы обучения с практикой, поддержкой наставников и реальными проектами, которые остаются в резюме. Этот репозиторий — один из таких проектов.
