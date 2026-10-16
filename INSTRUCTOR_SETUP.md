# Instructor setup — One GitHub template for Weeks 11–17

1. Extract the ZIP. Create an **empty public** repository in your GitHub account (for example `oop-php-laravel-semester-starter`).
2. Upload **the extracted contents**, preserving directory structure and hidden `.devcontainer/`, `.vscode/`, and `.env.example` files. Do not upload only the ZIP. If the GitHub upload interface doesn't preserve folders, use `git` from a working computer or GitHub web editor for missing files.
3. Confirm these paths exist on GitHub: `.devcontainer/devcontainer.json`, `.devcontainer/setup.sh`, `composer.json`, `artisan`, `routes/web.php`, `docs/WEEK_11.md`, `docs/WEEK_17.md`.
4. In **Settings → General**, enable **Template repository**. Then test **Use this template**.
5. Before class, start **Code → Codespaces → Create codespace on main**, select a 2-core machine, and wait for `postCreateCommand` Composer installation. If network setup fails, retry `bash .devcontainer/setup.sh`.
6. Verify:

   ```bash
   php -v
   composer --version
   php artisan --version
   php artisan oop:demo
   php artisan oop:project
   php artisan oop:pdo-demo
   php artisan test
   ./vendor/bin/pint --test
   php artisan serve --host=0.0.0.0 --port=8000
   ```

   The Pint check may report style issues in student code as exercises progress. For the **master** template, use `./vendor/bin/pint` before distributing and commit resulting changes.
7. Open **Ports → 8000 → Open in Browser**. Check `/`, `/weeks/11`, `/weeks/12`, `/weeks/13`, `/my-project`. Verify create/update/delete on the Week 12 demo form; do not confuse this example with the student's project.
8. (Recommended) After the first successful `composer install`, **commit `composer.lock` to the master repository** to pin dependency versions, then have students create fresh repositories from the finalized template.
9. Publish the master URL in the LMS. Students use **Use this template → Create a new repository**, then run their own Codespace. They should **not** work directly in your master repository.
10. Require individual GitHub links or zip exports, terminal/browser evidence, and final documentation according to your LMS. For private student repositories, arrange instructor access ahead of grading.

## Instructor checklist

- [ ] Codespace installs Laravel (no need for local XAMPP).
- [ ] Week 11 namespaced classes + alias work.
- [ ] Week 12 uses **direct PDO with parameter binding**, not only Eloquent.
- [ ] Week 13 MVC diagram is reflected in the route/controller/view code.
- [ ] Week 14 stays a pre-final exam.
- [ ] Week 15 tests run, and logs exist when the Week 13 page is visited.
- [ ] Week 16 Pint, Git operations and PSR practices are explained.
- [ ] Week 17 student-owned project space, checklists and report template exist.

The template's proposed formative practice and rubrics are not automatically your syllabus' official grading policy. See [SYLLABUS_ALIGNMENT.md](SYLLABUS_ALIGNMENT.md).
