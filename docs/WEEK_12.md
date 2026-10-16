# Week 12 — Working with Databases Using OOP PHP

**Syllabus coverage:** PHP Data Objects (PDO) · CRUD Operations · Prepared Statements.

> This lesson teaches **raw PHP PDO**, even though the app runs inside Laravel. Laravel's Eloquent ORM is not a replacement for demonstrating `new PDO()`, `prepare()`, `bindValue()`, and `execute()`.

## Instructor demonstration

1. Run `php artisan oop:pdo-demo` (creates two records, reads both, updates one, deletes one). Each run uses temporary `sqlite::memory:` so results are predictable.
2. Open `app/Database/PdoSqliteFactory.php` and find the SQLite DSN, `PDO::ATTR_ERRMODE`, and exception handling by PDO.
3. Inspect `app/Database/InventoryRepository.php`: every input-driven `INSERT`, `SELECT ... WHERE`, `UPDATE`, and `DELETE` uses a prepared statement. `all()` uses a fixed query with no user input.
4. Start server and visit `/weeks/12`. Create two records, update one, delete one, and refresh to verify SQLite persistence.
5. In `app/Http/Controllers/Week12Controller.php`, locate input validation and the repository methods. Laravel helps with HTTP forms and CSRF; direct PDO runs the database operations.

## Your project activity

Use **the same topic you started Week 11**. Do not switch your topic without instructor approval.

1. Add a repository class under `app/StudentProject/Repositories/` (for example `EventRepository.php`). Use namespace `App\\StudentProject\\Repositories`.
2. Decide what table and columns represent your chosen model. Include an integer primary key and at least two topic-specific attributes.
3. Write `CREATE TABLE IF NOT EXISTS` (SQLite) and implement separate methods: `create`, `all`, `find`, `update`, `delete` using real SQL and `PDO::prepare()`.
4. Reuse or adapt `PdoSqliteFactory::connect()` to supply a PDO object. Keep your own data separate from the instructor's inventory example if possible.
5. Create at least two records related to your topic, change one record, and delete another. Make sure you can query results after each action.
6. Add appropriate controller routes/forms for your own project (they can appear on `/my-project`), validating inputs and using CSRF tokens for POST/PATCH/DELETE. Never expose raw user input inside SQL string concatenation.
7. Compare `PDO` with Laravel `Eloquent` in 3–4 sentences, making clear that this syllabus lesson is about PDO.

## Evidence to submit

- [ ] Your own repository class and constructor accepting `PDO`
- [ ] SQL for CREATE, READ, UPDATE, DELETE with parameter binding
- [ ] Screenshots of two records before/after update and delete
- [ ] Brief explanation of why prepared statements reduce SQL injection risk
- [ ] GitHub commit containing the work

**No MySQL installation required:** the teaching app uses local SQLite through PDO. If another DBMS is required later, ask your instructor for separate instructions.
