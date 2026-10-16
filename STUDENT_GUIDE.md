# Student guide — One Codespace across Weeks 11–17

**You need:** your personal GitHub account, supported web browser and internet. You do **not** need local XAMPP.

1. Open the template repository your instructor posted in the LMS.
2. Click **Use this template → Create a new repository**; name it `lastname-firstname-oop-laravel`. This creates **your** copy.
3. On your own repository click **Code → Codespaces → Create codespace on main**. Wait for the first setup to finish.
4. In the VS Code web terminal, run `php artisan --version`, `php artisan oop:demo`, `php artisan oop:pdo-demo`, `php artisan test`.
5. Run `php artisan serve --host=0.0.0.0 --port=8000`. Open **Ports → 8000 → Open in Browser** to see the sample examples.
6. Follow [SYLLABUS_ALIGNMENT.md](SYLLABUS_ALIGNMENT.md) and the matching guide under `docs/` each week. Your project starts in **`app/StudentProject/`**, separate from the teacher demonstrations.
7. After every completed session use the Source Control sidebar → stage → **Commit** → **Sync Changes**. Check the changes actually appear in your GitHub repository.
8. Submit your repository link and evidence files according to your instructor's LMS requirements. If your repository is private, give your instructor read access.
9. Stop your Codespace when finished to conserve GitHub compute hours. Running and stored Codespaces can count toward your account's limits.

**Never** upload your `.env`, passwords, or real private records. Keep port visibility **Private**. If you see `vendor/autoload.php not found`, run `bash .devcontainer/setup.sh` after connectivity recovers. If a class is not found, check file path case, namespace, `use` alias, and `App\\` to `app/` mapping.

## Weekly short commands

- Week 11: `php artisan oop:demo` for demonstration; `php artisan oop:project` for your own selected topic
- Week 12: `php artisan oop:pdo-demo`
- Week 13: `php artisan route:list`; open `/weeks/13`
- Week 15: `php artisan test`; view `storage/logs/laravel.log` after opening `/weeks/13`
- Week 16: `./vendor/bin/pint --test`, `git status`, `git diff`
- Week 17: open `/my-project`, document and present your own completed topic-specific program.
