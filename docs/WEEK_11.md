# Week 11 — Namespaces and Autoloading

**Syllabus Coverage:** Organizing PHP Classes · Namespaces · Composer Autoloading Fundamentals

## Learning Objectives

Upon completion of this module, students will be able to:

- Organize PHP classes into logically separated model, service, and report files
- Articulate the distinctions between `namespace`, `use`, `use ... as ...`, and Composer autoloading mechanisms
- Demonstrate practical implementation of PSR-4 autoloading mapping (`App\\` → `app/`) within a Laravel project structure

## Instructor Demonstration

The following demonstration illustrates working code implementing namespace and autoloading concepts:

1. Open `composer.json` and locate the PSR-4 autoloading configuration: `"App\\": "app/"`

2. Examine the following files to understand namespace organization:
   - `app/Models/Book.php`
   - `app/Services/BookService.php`
   - `app/Reports/BookReport.php`

3. Identify namespace declarations:
   - `namespace App\\Models;`
   - `namespace App\\Services;`
   - `namespace App\\Reports;`
   - Class aliasing: `use App\\Models\\Book as LibraryBook;`

4. Open `routes/console.php` and observe that classes are automatically loaded without explicit `require` statements

5. Execute the demonstration command:
   ```bash
   php artisan oop:demo
   ```
   Observe two distinct book records in the output

6. Start the Laravel development server and navigate to `/weeks/11` in your browser

## Student Project Development

### Topic Selection

Select **one** project domain from the following examples or propose an alternative subject to your instructor:

- Event Registration System
- Technology Inventory Management
- Canteen Menu Management
- Pet Care Tracking System
- Community Service Coordination
- Other instructor-approved domain

### Implementation Requirements

1. Complete the `docs/PROJECT_PLAN.md` template with your selected topic, model definition, two properties, and two additional classes

2. Adapt `app/StudentProject/Models/ProjectItem.php`:
   - Modify the class name to reflect your domain
   - Update the constructor
   - Define **two** domain-specific data fields

3. Modify `app/StudentProject/Services/ProjectService.php`:
   - Implement appropriate `use ... as ...` aliasing
   - Instantiate **two distinct objects**
   - Return formatted values

4. Update `app/StudentProject/Reports/ProjectReport.php`:
   - Add proper type hints
   - Generate domain-specific report output

5. Update `StudentProjectController.php` and `student-project.blade.php`:
   - Ensure `/my-project` route displays your project information
   - Maintain consistency across all import statements and references

6. Execute the project command to verify implementation:
   ```bash
   php artisan oop:project
   ```
   Confirm that your two custom records display (not the instructor's book examples)

7. Regenerate autoload files if necessary:
   ```bash
   composer dump-autoload
   ```
   **Note:** File edits within existing PSR-4 directories typically do not require regeneration

8. Verify browser functionality:
   - Navigate to `/my-project`
   - Capture screenshots of class structure, namespace and alias usage, and both records

**Important:** Do not simply relabel the instructor's book demonstration. You must implement original classes within your separate project workspace.

## Reflection Questions

Provide concise written responses (2–3 sentences each) to the following:

1. **Topic Selection and Organization:**  
   Explain your rationale for selecting your project topic and describe how your namespace structure organizes the related classes.

2. **Autoloading Mechanisms:**  
   Articulate the distinction between `use` declarations with aliasing versus Composer PSR-4 autoloading functionality.

## Deliverables

Complete the following checklist before submission:

- [ ] Original, instructor-approved project topic with two distinct domain objects
- [ ] Three properly organized class files (Model, Service, Report) with appropriate naming
- [ ] Correct implementation of `namespace` declarations, `use` statements, and one class alias
- [ ] Functional `/my-project` browser page and working `php artisan oop:project` terminal output
- [ ] Screenshots documenting class structure, code implementation, and data output
- [ ] Git commit and synchronization to personal GitHub repository

**Note:** Previous standalone PHP activities may have utilized `src/` directories with `php index.php` execution. In Laravel, the equivalent mapping is `app/` with classes loaded through Composer's bootstrap mechanism. The underlying learning principles remain identical.
