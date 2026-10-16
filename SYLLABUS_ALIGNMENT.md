# Syllabus alignment — Object-Oriented Programming Using PHP

This project follows **PfC 5103 Object-oriented Programming**, The Lewis College, AY 2026–2027, **Weeks 11–17** in the uploaded BSIT OOP syllabus. Laravel is a **teaching environment selected by the instructor**, not a framework mandated by the syllabus. Topic names below follow the course outline on pages 5–6.

| Syllabus week | Exact course content / subject matter | Starter evidence | Activity guide |
|---|---|---|---|
| 11 | **Namespaces and Autoloading:** Organizing PHP Classes; Namespaces; Composer Autoloading Basics | `composer.json` PSR-4, `app/Models/Book.php`, `BookService.php`, `BookReport.php`, `php artisan oop:demo`, `php artisan oop:project`, `/weeks/11` | `docs/WEEK_11.md` |
| 12 | **Working with Databases Using OOP PHP:** PHP Data Objects (PDO); CRUD Operations; Prepared Statements | `app/Database/`, `php artisan oop:pdo-demo`, `/weeks/12` CRUD form | `docs/WEEK_12.md` |
| 13 | **Object-Oriented Application Development:** Applying MVC Concepts; Code Organization; Reusable Components | `/weeks/13` route → `Week13Controller` → `LibraryCatalogService` → Book model → Blade view | `docs/WEEK_13.md` |
| 14 | **PRE FINAL EXAMINATION** | Review checkpoint only; no new topic | `docs/WEEK_14_CHECKPOINT.md` |
| 15 | **Testing, Debugging, and Documentation:** Debugging Techniques; Error Logging; Code Documentation and Comments | `tests/Unit`, `tests/Feature`, `Log::info` Week13, `storage/logs`, documentation | `docs/WEEK_15.md` |
| 16 | **Software Quality and Best Practices:** Coding Standards (PSR); Code Refactoring; Version Control with Git (Introduction) | Laravel Pint, `git status`, Git commit workflow, refactoring prompts | `docs/WEEK_16.md` |
| 17 | **Final Project Development and Presentation:** Project Integration; Software Demonstration; Technical Documentation and Presentation | `/my-project`, `app/StudentProject/`, proposal/report/checklist templates | `docs/WEEK_17.md` |

The syllabus continues with **Week 18 — FINAL EXAMINATION**. This ZIP does not create an exam. The course outline lists PDO explicitly: the Week 12 example deliberately teaches **raw PHP PDO** (with parameter binding) rather than substituting Eloquent.

**Assessment note:** Practice-task checklists and suggested rubrics in the ZIP are instructor-authored aids, *not verbatim grading policies in the syllabus*. Use your existing LMS rules and official course grading system.
