# Week 11 — Namespaces and Autoloading

**Syllabus coverage:** Organizing PHP Classes · Namespaces · Composer Autoloading Basics.

## Learning objectives

- Organize PHP classes into separate model, service, and report files.
- Describe the difference between `namespace`, `use`, `use ... as ...`, and Composer autoloading.
- Demonstrate the `App\\` to `app/` PSR-4 mapping in an actual Laravel project.

## Instructor demonstration (working code)

1. Open `composer.json` and find `"App\\": "app/"` in `autoload.psr-4`.
2. Open `app/Models/Book.php`, `app/Services/BookService.php`, and `app/Reports/BookReport.php`.
3. Identify `namespace App\\Models;`, `namespace App\\Services;`, `namespace App\\Reports;`, and `use App\\Models\\Book as LibraryBook;`.
4. Open `routes/console.php` and observe that the classes are not manually required one by one.
5. Run `php artisan oop:demo`, observe **two** separate book records. Start the Laravel web server and visit `/weeks/11`.

## Your ongoing project — choose ONE topic

Examples: Event Registration, Gadget Inventory, Canteen Menu, Pet Care, Community Service, or another topic approved by your instructor.

1. Fill out `docs/PROJECT_PLAN.md` with your chosen topic, model, two properties, and two other classes.
2. In `app/StudentProject/Models/ProjectItem.php`, adapt the class name, constructor and **two** data fields to your topic.
3. In `app/StudentProject/Services/ProjectService.php`, adapt the `use ... as ...` alias, make **two distinct objects**, and return their values.
4. In `app/StudentProject/Reports/ProjectReport.php`, adapt the type-hint and topic-specific report.
5. Update `StudentProjectController.php` and `student-project.blade.php` so `/my-project` displays your own information. Update all import names and references consistently.
6. Run `php artisan oop:project` to show both of your own records in the terminal (not the unchanged instructor books). Then run `composer dump-autoload` **if you change autoload settings**; class file edits in existing PSR-4 folders usually need no regeneration.
7. Preview `/my-project`; take screenshots of your class structure, code showing namespace + alias, and both records.

**Do not simply relabel the original book demonstration**. You must change the actual classes in your separate project workspace.

## Explain in your own words (2 short answers)

1. Why did you choose the topic, and how do your namespaces organize the classes?
2. What is different about `use`/an alias versus Composer PSR-4 loading?

### Output checklist

- [ ] Own approved topic and two distinct objects
- [ ] Three properly named class files (model/service/report)
- [ ] Correct `namespace`, `use`, and one alias
- [ ] Working `/my-project` page and `php artisan oop:project` terminal output, plus saved screenshots
- [ ] Commit and sync to your own GitHub repository

**Note:** The prior standalone PHP activity used `src/` and `php index.php`; in Laravel the mapping is `app/` and classes are loaded by its Composer bootstrap. The learning principles are the same.
