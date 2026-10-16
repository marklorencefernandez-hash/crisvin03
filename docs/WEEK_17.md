# Week 17 — Final Project Integration and Presentation

**Syllabus Coverage:** Project Integration · Software Demonstration · Technical Documentation and Presentation

**Critical Requirement:** Your final project must represent original work based on **your own topic selected in Week 11**. Projects that merely duplicate the instructor's Library or Inventory demonstration do not satisfy this requirement.

## Required Integrated Features

Your completed project must demonstrate the following:

1. **Problem Definition:**
   - Clear, specific problem statement
   - Brief introduction explaining real-world context

2. **Object-Oriented Architecture:**
   - Minimum of three meaningful OOP classes with properly organized namespaces
   - One documented `use ... as ...` alias implementation
   - Working Composer PSR-4 autoloading (`App\\` → `app/`)

3. **Database Layer:**
   - Direct PDO repository for your domain
   - Complete **Create, Read, Update, and Delete** operations
   - Parameterized SQL preventing injection vulnerabilities

4. **Web Application:**
   - Browser interface demonstrating **Model–View–Controller** architecture
   - Appropriate reusable service implementations
   - Minimum of **two domain-specific records**
   - Database persistence across browser requests

5. **Quality Assurance:**
   - Minimum of two tests covering business rules or data operations
   - Evidence of debugging or error logging implementation

6. **Professional Standards:**
   - Reasonable coding consistency (Pint / PSR practices)
   - Comprehensive documentation
   - Meaningful Git commit history

## Live Demonstration Guidelines

### Presentation Format (5–8 minutes)

Structure your demonstration using the following sequence:

1. **Introduction (30-60 seconds):**
   - State project title
   - Describe real-world problem addressed
   - Explain project purpose and intended users

2. **Technical Architecture (1-2 minutes):**
   - Identify key classes, namespaces, and aliasing
   - Show PSR-4 configuration in `composer.json`

3. **Functional Demonstration (2-3 minutes):**
   - Create two domain-specific records through your interface
   - Update one existing record
   - Delete another record
   - Verify changes persist in database

4. **Code Walkthrough (1-2 minutes):**
   - Trace one complete request flow:
     - Route definition
     - Controller invocation
     - Repository/Service interaction
     - Blade template rendering

5. **Quality Assurance (1-2 minutes):**
   - Execute `php artisan test` and explain one automated test
   - Run `./vendor/bin/pint --test` to verify coding standards
   - Display recent, meaningful Git commits

6. **Challenges and Solutions (30-60 seconds):**
   - Briefly explain one significant debugging challenge encountered
   - Describe resolution approach

## Written Submission Requirements

### Required Documentation

1. Complete [`docs/PROJECT_PLAN.md`](PROJECT_PLAN.md) with your project specifications

2. Generate final technical report:
   - Copy [`docs/PROJECT_REPORT_TEMPLATE.md`](PROJECT_REPORT_TEMPLATE.md)
   - Save as `docs/PROJECT_REPORT.md`
   - Complete all sections with your actual project information

3. Review and verify completion of [`FINAL_SUBMISSION_CHECKLIST.md`](FINAL_SUBMISSION_CHECKLIST.md)

### Submission Deliverables

Submit the following through your instructor's designated LMS:

- Repository URL (with appropriate instructor access for private repositories)
- Screenshots demonstrating:
  - Working browser interface
  - Terminal test execution
  - Key project code sections
- Completed documentation files

### Security and Privacy

**Important:** Ensure your submission excludes:
- Authentication secrets or API keys
- Personally identifiable information
- Database credentials
- `.env` files

---

**Disclaimer:** This document provides a suggested practical project implementation aligned with syllabus requirements. It does not replace your instructor's official final project grading policy or institutional assessment rubric.
