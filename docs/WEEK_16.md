# Week 16 — Software Quality and Best Practices

**Syllabus Coverage:** PSR Coding Standards · Code Refactoring Principles · Version Control with Git (Introduction)

## Instructor Demonstration

The following demonstration illustrates software quality practices:

1. **PSR Standards Review:**
   - Examine `composer.json` for PSR-4 autoloading configuration
   - Review [PHP-FIG PSR-4 Specification](https://www.php-fig.org/psr/psr-4/)
   - Discuss impact of file case sensitivity and namespace structure on autoloading

2. **Code Style Verification:**
   ```bash
   ./vendor/bin/pint --test
   ```
   Pint checks coding style compliance (Laravel conventions based on PSR standards)
   
   If formatting differences are reported:
   ```bash
   ./vendor/bin/pint
   git diff  # Review changes before committing
   php artisan test  # Verify functionality preserved
   ```

3. **Refactoring Exercise:**
   - Demonstrate safe refactoring technique: extract duplicate record formatting logic from controller into service layer
   - Verify that visible output remains unchanged
   - Confirm that responsibilities remain properly separated

4. **Version Control Operations:**
   Open a Codespaces terminal and execute:
   ```bash
   git status
   git diff
   git add .
   git commit -m "Refactor student project and add tests"
   git push
   ```

**Note:** Git configuration and initial authentication setup should be taught separately if student credentials require configuration. GitHub Codespaces typically provides repository credentials automatically.

## Student Project Development

**Continuity Requirement:** Continue with your established project topic.

### Implementation Requirements

1. **Code Review:**
   - Identify minimum of one repeated or oversized method in your project
   - Candidates for refactoring:
     - Duplicate logic across multiple methods
     - Methods exceeding 20-30 lines
     - Complex conditional logic

2. **Refactoring Implementation:**
   - Extract identified code into reusable method or class
   - Maintain clear separation of concerns:
     - **Model:** Data representation
     - **Repository:** Database operations
     - **Service:** Business logic
     - **View:** Presentation layer

3. **Quality Verification:**
   ```bash
   ./vendor/bin/pint --test  # Check style compliance
   ./vendor/bin/pint         # Apply automatic formatting
   php artisan test          # Verify functionality preserved
   ```

4. **Behavioral Verification:**
   - Compare before-and-after behavior
   - Demonstrate that functionality remains unchanged
   - Document any improvements in code clarity or reusability

5. **Version Control:**
   - Create minimum of **two meaningful Git commits** representing distinct development milestones
   - Examples of appropriate commit boundaries:
     - "Refactor service layer extraction"
     - "Add unit tests for refactored methods"
   - **Exclusions:** Do not commit:
     - `.env` files
     - Database files
     - `vendor/` directory
     - Credentials or secrets

## Deliverables

Complete the following checklist:

- [ ] Description of refactoring performed (before and after comparison)
- [ ] Pint style check results
- [ ] Test execution results demonstrating preserved functionality
- [ ] Git commit history showing separate development milestones
- [ ] Confirmation that no hardcoded secrets or personal data are committed
