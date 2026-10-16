# Week 12 — Database Operations with Object-Oriented PHP

**Syllabus Coverage:** PHP Data Objects (PDO) · CRUD Operations · Parameterized Prepared Statements

> **Important Pedagogical Note:** This module focuses exclusively on **raw PHP PDO** implementation, despite operating within the Laravel framework. Laravel's Eloquent ORM is intentionally excluded from this lesson to ensure foundational understanding of direct database interactions through PDO.

## Instructor Demonstration

The following demonstration illustrates comprehensive CRUD operations using PHP PDO:

1. Execute the PDO demonstration command:
   ```bash
   php artisan oop:pdo-demo
   ```
   This command creates two records, reads both, updates one, and deletes another. Each execution utilizes `sqlite::memory:` for predictable, isolated results.

2. Examine `app/Database/PdoSqliteFactory.php`:
   - Locate the SQLite Data Source Name (DSN) configuration
   - Identify `PDO::ATTR_ERRMODE` settings
   - Review PDO exception handling implementation

3. Inspect `app/Database/InventoryRepository.php`:
   - Observe that all input-driven operations (`INSERT`, `SELECT ... WHERE`, `UPDATE`, `DELETE`) utilize prepared statements
   - Note that the `all()` method uses a fixed query as it accepts no user input

4. Start the development server and navigate to `/weeks/12`:
   - Create two records through the web interface
   - Update one record
   - Delete one record
   - Refresh the page to verify SQLite persistence

5. Review `app/Http/Controllers/Week12Controller.php`:
   - Identify input validation implementation
   - Examine repository method invocations
   - Note that Laravel handles HTTP forms and CSRF protection while PDO manages database operations

## Student Project Development

**Critical:** Maintain consistency with the topic selected in Week 11. Topic changes require explicit instructor approval.

### Implementation Requirements

1. **Repository Class Creation:**
   Create a repository class within `app/StudentProject/Repositories/` (e.g., `EventRepository.php`)
   - Declare namespace: `App\\StudentProject\\Repositories`

2. **Database Schema Design:**
   Define your table structure with:
   - Integer primary key
   - Minimum of two domain-specific attributes appropriate to your topic

3. **CRUD Method Implementation:**
   Implement the following methods using raw SQL with `PDO::prepare()`:
   - `create()` — Insert new records
   - `all()` — Retrieve all records
   - `find()` — Retrieve single record by identifier
   - `update()` — Modify existing record
   - `delete()` — Remove record
   
   Include `CREATE TABLE IF NOT EXISTS` statement for SQLite initialization

4. **PDO Integration:**
   - Utilize `PdoSqliteFactory::connect()` to obtain PDO instances
   - Maintain data isolation from instructor demonstration tables when feasible

5. **Data Operations:**
   - Create minimum of two domain-specific records
   - Perform update operation on one record
   - Execute delete operation on another record
   - Verify query results after each operation

6. **Web Interface Development:**
   - Implement controller routes and forms for your project (accessible via `/my-project`)
   - Validate all user inputs
   - Implement CSRF token protection for POST/PATCH/DELETE requests
   - **Security Critical:** Never concatenate raw user input into SQL strings

7. **Comparative Analysis:**
   Write a 3–4 sentence comparison between PDO and Laravel Eloquent, clearly demonstrating understanding that this module focuses on PDO fundamentals

## Deliverables

Submit the following evidence:

- [ ] Repository class implementation with constructor accepting PDO instance
- [ ] Complete SQL statements demonstrating CREATE, READ, UPDATE, DELETE with parameter binding
- [ ] Screenshots showing two records before and after update and delete operations
- [ ] Written explanation of how prepared statements mitigate SQL injection vulnerabilities
- [ ] GitHub commit containing completed work

**Database Note:** MySQL installation is not required. The educational environment utilizes SQLite through PDO. Contact your instructor if alternative DBMS requirements are specified.
