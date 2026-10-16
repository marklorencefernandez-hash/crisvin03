# PHP Object-Oriented Programming — Laravel Development Environment

**The Lewis College · PfC 5103 Object-Oriented Programming · Academic Year 2026–2027**

This repository provides a comprehensive GitHub Codespaces-based development environment for completing the semester curriculum covering **Weeks 11 through 17**. Built on Laravel 13 and PHP 8.4, this template offers students a fully configured, browser-accessible workspace that requires no local installation.

The environment is inspired by modern cloud-native development practices and incorporates automatic dependency management through Composer. The `.devcontainer` configuration ensures consistent development environments across all student workspaces.

> **Important:** The Laravel framework and all dependencies are installed automatically during Codespace initialization. The first launch requires a stable internet connection and may take several minutes on a 2-core instance. Instructors should verify functionality before distributing to students.

## Getting Started

### Initial Setup

1. Navigate to the instructor-provided GitHub template repository and select **Use this template → Create a new repository**. Create the repository under your personal GitHub account.

2. Access your newly created repository and initiate a Codespace by selecting **Code → Codespaces → Create codespace on main**. Allow the automated setup process to complete.

3. Launch a new terminal session via **Terminal → New Terminal** and verify the environment:

   ```bash
   php -v
   composer --version
   php artisan --version
   php artisan oop:demo
   php artisan oop:project
   php artisan oop:pdo-demo
   php artisan test
   ```

4. Start the development server:
   ```bash
   php artisan serve --host=0.0.0.0 --port=8000
   ```

5. Navigate to the **Ports** panel, locate port `8000`, and select **Open in Browser**. Ensure the port visibility remains set to **Private**. The application homepage provides navigation to weekly exercises and your project at `/my-project`.

6. Develop your individual project within the `app/StudentProject/` directory, following the week-specific documentation in the `docs/` folder. Maintain regular Git commits and remember to stop your Codespace after each session to conserve resources.

## Curriculum Overview

| Week | Topic | Interface | Documentation |
|------|-------|-----------|---------------|
| 11 | Namespaces & Composer Autoloading | `/weeks/11`, `php artisan oop:demo` | [Week 11 Guide](docs/WEEK_11.md) |
| 12 | PHP PDO, CRUD Operations, Prepared Statements | `/weeks/12`, `php artisan oop:pdo-demo` | [Week 12 Guide](docs/WEEK_12.md) |
| 13 | Model-View-Controller Architecture & Code Organization | `/weeks/13` | [Week 13 Guide](docs/WEEK_13.md) |
| 14 | Pre-Final Examination | Institutional assessment via LMS | [Week 14 Checkpoint](docs/WEEK_14_CHECKPOINT.md) |
| 15 | Testing, Debugging, Logging & Documentation | `php artisan test` | [Week 15 Guide](docs/WEEK_15.md) |
| 16 | PSR Standards, Code Refactoring & Version Control | `./vendor/bin/pint --test`, `git status` | [Week 16 Guide](docs/WEEK_16.md) |
| 17 | Final Project Integration, Demonstration & Report | `/my-project`, comprehensive documentation | [Week 17 Guide](docs/WEEK_17.md) |

## Project Structure and Development Guidelines

### Demonstration Code vs. Student Projects

**Critical:** Maintain separation between instructor demonstration code and your personal project implementation. Demonstration modules are located in:
- `app/Models`
- `app/Services`
- `app/Reports`
- `app/Database`
- Week-specific controllers

Your personal project development should be isolated within **`app/StudentProject/`**, containing:
- `Models/`
- `Services/`
- `Reports/`
- `Repositories/`

The primary objective is to develop a single, cohesive project from Week 11 through Week 17, maintaining consistent domain focus throughout the semester.

### Weekly Development Progression

- **Week 11:** Select your project domain, establish appropriate class names and property definitions, implement proper namespaces with `use` declarations and class aliasing.

- **Week 12:** Integrate a PDO-based repository implementing full CRUD operations (Create, Read, Update, Delete) with parameterized prepared statements for your chosen domain.

- **Week 13:** Connect your classes to a controller, define routes, and create Blade views following Model-View-Controller architecture principles.

- **Week 15:** Develop automated tests, implement debugging strategies, integrate logging functionality, and produce comprehensive documentation.

- **Week 16:** Refactor code for improved quality, apply PSR coding standards using Pint, and establish a meaningful Git commit history.

- **Week 17:** Complete system integration, prepare a live demonstration, and submit comprehensive technical documentation.

## Available Commands

```bash
# Week 11: Namespace and autoloading demonstrations
php artisan oop:demo                # Instructor demonstration example
php artisan oop:project             # Student project with two records

# Week 12: PDO database operations
php artisan oop:pdo-demo            # In-memory SQLite PDO lifecycle demonstration

# Week 13: MVC and routing
php artisan route:list              # Display all registered routes

# Week 15: Testing framework
php artisan test                    # Execute automated test suite

# Week 16: Code quality and standards
./vendor/bin/pint --test            # Verify PSR coding standards compliance
./vendor/bin/pint                   # Auto-format code (review changes before committing)

# General utilities
composer dump-autoload              # Regenerate autoload files after composer.json modifications
php artisan serve --host=0.0.0.0 --port=8000  # Start development server
```

## Technical Specifications and Important Notes

### System Requirements
- Modern web browser with stable internet connectivity
- Valid GitHub account with Codespaces access
- No local XAMPP, PHP, or development environment installation required
- Subject to GitHub Codespaces usage limits and quota restrictions

### Database Configuration
- **SQLite** serves as the primary database system for Week 12 onwards
- The `/weeks/12` demonstration utilizes `database/classroom_pdo.sqlite` (excluded from version control)
- The `oop:pdo-demo` command operates with an in-memory temporary database
- **Note:** SQLite is appropriate for educational purposes but not recommended for production multi-user applications

### Learning Objectives
- **Laravel Eloquent ORM is intentionally excluded from Week 12 instruction**
- Week 12 focuses exclusively on raw PHP Data Objects (PDO) to ensure foundational understanding
- Refer to `app/Database/PdoSqliteFactory.php` and `app/Database/InventoryRepository.php` for implementation patterns

### Security and Best Practices
- Maintain **Private** port visibility for all development servers
- **Never deploy** this debug-enabled environment to public-facing infrastructure
- Exclude the following from version control:
  - `.env` files containing credentials
  - Personally identifiable information
  - Database files
  - The `vendor/` directory
  - Passwords and authentication tokens

### Frontend Configuration
- The demonstration code does not require Node.js, npm, or frontend build processes
- Blade templates utilize embedded CSS for styling
- Frontend build tools may be integrated for advanced projects if desired

### Dependency Management
- The distributed package excludes `composer.lock` to ensure clean resolution of dependencies
- Instructors may commit a generated `composer.lock` file after testing to ensure reproducible installations across all student environments

### Additional Resources
- [Instructor Setup Guide](INSTRUCTOR_SETUP.md)
- [Student Usage Guide](STUDENT_GUIDE.md)
- [Syllabus Alignment Documentation](SYLLABUS_ALIGNMENT.md)
- [Final Submission Checklist](docs/FINAL_SUBMISSION_CHECKLIST.md)
