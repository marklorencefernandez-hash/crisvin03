# Week 15 — Testing, Debugging, and Documentation

**Syllabus coverage:** Debugging Techniques · Error Logging · Code Documentation and Comments.

## Instructor demonstration

1. Run `php artisan test`. Inspect `tests/Unit/InventoryRepositoryTest.php`, `tests/Unit/StudentProjectTest.php`, and `tests/Feature/WeekRoutesTest.php`.
2. In `InventoryRepositoryTest`, find a test that inserts SQL-injection-like text and verifies it is treated as data.
3. Open `/weeks/13` in a browser. It executes `Log::info('Week 13 MVC demo viewed')` in `Week13Controller.php`.
4. Open `storage/logs/laravel.log` in Codespaces to see the generated log entry. Avoid logging passwords, real student records, or secret tokens.
5. Modify a sample value and observe any related test failures. Use exception messages, stack traces, and `php artisan test --filter=...` to isolate problems.

## Your same-topic project

1. Add at least **two meaningful automated tests** specific to your project. Recommended: a repository CRUD test and an HTTP feature test.
2. Make test database storage independent from the classroom database (use `sqlite::memory:` or a temporary database); never erase real records in tests.
3. Add one `Log::info` or `Log::warning` for a non-sensitive application action or failure.
4. Add concise PHPDoc where types/intent are unclear. Document at least the model, the repository and one controller endpoint in `docs/PROJECT_REPORT.md` (copy the template).
5. Demonstrate a bug, show its error/trace, fix it and rerun `php artisan test`.

## Evidence

- [ ] Test output showing tests pass after your fix
- [ ] Screenshot or transcription of a non-sensitive log entry
- [ ] Concise documentation and comments explaining important methods
- [ ] Brief before/after debugging explanation
