# Week 16 — Software Quality and Best Practices

**Syllabus coverage:** Coding Standards (PSR) · Code Refactoring · Version Control with Git (Introduction).

## Instructor demonstration

1. Read `composer.json` PSR-4 and [PHP-FIG PSR-4](https://www.php-fig.org/psr/psr-4/). Discuss how file case and namespace structure affect autoloading.
2. Run `./vendor/bin/pint --test`. Pint checks coding style (Laravel conventions based on PSR-related standards). If it reports formatting differences, run `./vendor/bin/pint`, review `git diff`, and then re-run tests.
3. Demonstrate safe refactoring: extract duplicate record formatting from a controller into a service without changing visible output.
4. Open Codespaces terminal and run:

   ```bash
   git status
   git diff
   git add .
   git commit -m "Refactor student project and add tests"
   git push
   ```

   The instructor should teach Git configuration/first push separately if a learner's authentication requires it; Codespaces usually provides repo credentials.

## Your same-topic project

1. Find at least one repeated or oversized method in your project.
2. Refactor it to a reusable method or class. Keep model/SQL/view responsibilities separate.
3. Run `./vendor/bin/pint --test` then fix formatting; run `php artisan test` after refactoring.
4. Compare the before/after behavior and demonstrate that the functionality still works.
5. Make at least **two meaningful Git commits** representing separate milestones; don't commit `.env`, database files, or vendor dependencies.

## Evidence

- [ ] Description of the refactor (before/after)
- [ ] Pint check and test results
- [ ] Git commit history showing separate milestones
- [ ] No hardcoded secrets or personal data
