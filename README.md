# PHP OOP Semester Codespaces — Laravel Classroom Starter

**The Lewis College · PfC 5103 Object-oriented Programming · AY 2026–2027**

A single browser-based **GitHub Codespaces template** for the syllabus topics from **Week 11 through Week 17**. It is a Laravel 13/PHP 8.4 application, inspired by the `.devcontainer` and GitHub template setup of [TaskFlow Starter](https://github.com/dannielcanaryquipia/taskflow-starter). It is not a copy of TaskFlow's Expo app.

> **The Laravel framework is installed automatically when Codespaces starts.** This ZIP contains the classroom **Laravel application source/configuration** but does not bundle downloaded Composer dependencies (`vendor/`) or `composer.lock`. You need internet access on the first start. Teacher: test a Codespace before assigning. A 2-core Codespace can need several minutes.

## Quick start for students

1. Open the instructor's GitHub template link. Select **Use this template → Create a new repository**; use your own account.
2. In **your** new repository, click **Code → Codespaces → Create codespace on main**. Wait for the setup message to finish.
3. Open **Terminal → New Terminal**, then run:

   ```bash
   php -v
   composer --version
   php artisan --version
   php artisan oop:demo
   php artisan oop:project
   php artisan oop:pdo-demo
   php artisan test
   ```

4. Start the web app: `php artisan serve --host=0.0.0.0 --port=8000`.
5. Open the **Ports** tab, locate port `8000`, choose **Open in Browser**. Keep the port **Private**. The main page links to Week 11, Week 12, Week 13 and `/my-project`.
6. Edit *your own* project in `app/StudentProject/` while following the week-by-week `docs/` instructions. **Commit and push regularly, then stop your Codespace** after class.

## Syllabus modules

| Week | Lesson | Browser or command | Guide |
|---|---|---|---|
| 11 | Namespaces & Composer autoloading | `/weeks/11`, `php artisan oop:demo` | [Week 11](docs/WEEK_11.md) |
| 12 | Raw PHP PDO, CRUD, prepared statements | `/weeks/12`, `php artisan oop:pdo-demo` | [Week 12](docs/WEEK_12.md) |
| 13 | MVC, code organization, reusable components | `/weeks/13` | [Week 13](docs/WEEK_13.md) |
| 14 | Pre-final examination | LMS checkpoint; no new exercise | [Week 14](docs/WEEK_14_CHECKPOINT.md) |
| 15 | Testing, debugging, logging, documentation | `php artisan test` | [Week 15](docs/WEEK_15.md) |
| 16 | PSR/Pint, refactoring, Git | `./vendor/bin/pint --test`, `git status` | [Week 16](docs/WEEK_16.md) |
| 17 | Final project integration, demo, report | `/my-project`, project plan/report | [Week 17](docs/WEEK_17.md) |

## Sample VS student project

**Never overwrite example code unless instructed.** Teacher demonstration modules live in `app/Models`, `app/Services`, `app/Reports`, `app/Database`, and the week-specific controllers. Your personal project starts in **`app/StudentProject/`** with `Models`, `Services`, and `Reports` and is shown at `/my-project`. The goal is to take the same original topic from Week 11 through Week 17.

- In **Week 11**, choose your topic, rename classes and property names, keep proper namespaces, `use` and an alias.
- In **Week 12**, add a PDO repository with real `CREATE`, `READ`, `UPDATE`, `DELETE` and prepared statements for your selected topic.
- In **Week 13**, connect those classes to a controller, route and Blade page using MVC.
- In **Week 15**, add tests, debugging evidence, logging, and documentation.
- In **Week 16**, refactor, run Pint, and use Git commits.
- In **Week 17**, complete the system, demonstrate it, and submit technical documentation.

## Commands

```bash
php artisan oop:demo                # Week 11 instructor example
php artisan oop:project             # Week 11 students chosen topic / 2 records
php artisan oop:pdo-demo            # Week 12 in-memory SQLite PDO lifecycle
php artisan route:list              # Week 13 routing / MVC
php artisan test                    # Week 15 automated tests
./vendor/bin/pint --test            # Week 16 Laravel PSR-style check
./vendor/bin/pint                   # Week 16 autoformat; inspect diff first
composer dump-autoload              # When composer.json autoload rules change
php artisan serve --host=0.0.0.0 --port=8000
```

## Important technical notes

- Requires **modern browser and stable internet** on older school PCs; no XAMPP or local VS Code install. Cloud resources and account usage limits apply.
- No MySQL is required initially: Week 12 uses **SQLite through PDO**. `/weeks/12` stores demo data in `database/classroom_pdo.sqlite`, ignored by Git; `oop:pdo-demo` uses temporary memory database. It is not a production multiuser database.
- Laravel **Eloquent is not a substitute** for syllabus Week 12's direct PDO learning goal. Inspect `PdoSqliteFactory` and `InventoryRepository`.
- Keep **Ports private**, do not deploy this debug-enabled example to the public internet, and do not commit `.env`, passwords, personally identifiable student data, or `vendor/`.
- The class examples do not require Node/npm or a frontend build step. Blade views use embedded CSS.
- The ZIP omits a `composer.lock`; dependency versions are resolved at first setup. Instructor can commit a generated lock file after testing their master Codespace to make all students' installs reproducible.
- Use the [instructor guide](INSTRUCTOR_SETUP.md), [student guide](STUDENT_GUIDE.md), [syllabus alignment](SYLLABUS_ALIGNMENT.md), and [final submission checklist](docs/FINAL_SUBMISSION_CHECKLIST.md).
