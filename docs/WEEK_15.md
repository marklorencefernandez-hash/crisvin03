# Week 15 — Testing, Debugging, and Documentation

**Syllabus Coverage:** Debugging Techniques · Error Logging Strategies · Code Documentation Standards

## Instructor Demonstration

The following demonstration illustrates testing, debugging, and logging practices:

1. **Execute Test Suite:**
   ```bash
   php artisan test
   ```
   Review the following test files:
   - `tests/Unit/InventoryRepositoryTest.php`
   - `tests/Unit/StudentProjectTest.php`
   - `tests/Feature/WeekRoutesTest.php`

2. **Security Testing Example:**
   - Examine `InventoryRepositoryTest` for a test that inserts SQL-injection-pattern text
   - Verify that prepared statements correctly treat malicious input as data rather than executable code

3. **Logging Implementation:**
   - Navigate to `/weeks/13` in your browser
   - Observe execution of `Log::info('Week 13 MVC demo viewed')` in `Week13Controller.php`

4. **Log File Inspection:**
   - Open `storage/logs/laravel.log` in your Codespace
   - Locate the generated log entry
   - **Security Warning:** Never log passwords, personally identifiable information, or authentication tokens

5. **Debugging Practice:**
   - Modify a sample value in the demonstration code
   - Observe any resulting test failures
   - Utilize exception messages and stack traces for diagnosis
   - Use `php artisan test --filter=...` to isolate specific test cases

## Student Project Development

**Continuity Requirement:** Maintain consistency with your established project topic.

### Implementation Requirements

1. **Automated Testing:**
   - Develop minimum of **two meaningful automated tests** specific to your project domain
   - Recommended test coverage:
     - Repository CRUD operations test
     - HTTP feature test for browser interactions

2. **Test Database Isolation:**
   - Utilize `sqlite::memory:` or temporary database for test execution
   - **Critical:** Never delete or modify production data during test runs
   - Maintain complete separation between test and development data

3. **Logging Implementation:**
   - Add one `Log::info()` or `Log::warning()` statement for a non-sensitive application event or error condition
   - Ensure no passwords, API keys, or personally identifiable information appears in logs

4. **Documentation:**
   - Add concise PHPDoc comments where types or intent are not immediately clear
   - Document minimum of:
     - Model class
     - Repository class
     - One controller endpoint
   - Complete `docs/PROJECT_REPORT.md` using the provided template

5. **Debugging Exercise:**
   - Identify and document one encountered bug
   - Provide error message or stack trace
   - Explain resolution approach
   - Rerun `php artisan test` to verify fix

## Deliverables

Submit the following evidence:

- [ ] Test output demonstrating successful test execution after bug resolution
- [ ] Screenshot or transcription of a non-sensitive log entry
- [ ] Concise documentation and comments explaining key methods
- [ ] Brief before-and-after debugging explanation (include error message and solution)
