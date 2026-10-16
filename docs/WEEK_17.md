# Week 17 — Final Project Development and Presentation

**Syllabus coverage:** Project Integration · Software Demonstration · Technical Documentation and Presentation.

Your final project must evolve from **your own topic selected in Week 11**, not merely from the instructor's Library or Inventory example.

## Required integrated features

1. A clear, specific project problem and brief introduction.
2. Three or more meaningful OOP classes with properly organized namespaces and one documented `use ... as ...` alias.
3. Working Composer PSR-4 autoloading (`App\\` → `app/`).
4. A direct PDO repository for your topic performing **Create, Read, Update and Delete with parameterized SQL**.
5. A browser page demonstrating **Model–View–Controller** and appropriate reusable services.
6. At least **two topic-specific records** and a database that persists between browser requests.
7. Tests covering your business rules/data operations, plus an example of debugging or error logging.
8. Reasonable coding consistency (Pint / PSR practices), documentation, and Git commit history.

## Suggested live demonstration flow (5–8 minutes)

1. Introduce the project title, real-world problem, and purpose.
2. Identify classes, namespaces, alias and PSR-4 in `composer.json`.
3. Demonstrate saving two records, editing one, deleting another using your own interface.
4. Trace one request from route to controller to repository/service to Blade.
5. Run `php artisan test` and explain one automated test.
6. Run `./vendor/bin/pint --test` and show recent meaningful Git commits.
7. Briefly explain a debugging challenge and how you fixed it.

## Written submission

- Complete [`docs/PROJECT_PLAN.md`](PROJECT_PLAN.md) and [`docs/PROJECT_REPORT_TEMPLATE.md`](PROJECT_REPORT_TEMPLATE.md) (save a copy named `PROJECT_REPORT.md` with your real information).
- Follow [`FINAL_SUBMISSION_CHECKLIST.md`](FINAL_SUBMISSION_CHECKLIST.md).
- Submit the repository URL, screenshots, and documentation through the instructor's LMS. If private, invite your instructor with suitable repository access. Do not include secrets or private personal data.

**Reminder:** This is a suggested practical project brief aligned to the syllabus, not a replacement for your instructor's official final-project grading policy.
