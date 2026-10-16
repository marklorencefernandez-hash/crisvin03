# Instructor Setup Guide — GitHub Codespaces Template for Weeks 11–17

## Initial Repository Configuration

### Step 1: Repository Creation

1. Extract the provided distribution package

2. Create an **empty public repository** in your institutional or personal GitHub account
   - Recommended naming: `oop-php-laravel-semester-starter`

3. Upload the extracted contents to GitHub:
   - **Critical:** Preserve complete directory structure
   - Include hidden directories: `.devcontainer/`, `.vscode/`
   - Include configuration files: `.env.example`, `.gitignore`, `.editorconfig`
   
   **Note:** If GitHub's web upload interface does not preserve folder structures, utilize Git command-line tools or GitHub's web editor for manual file creation.

4. Verify the following paths exist in your GitHub repository:
   - `.devcontainer/devcontainer.json`
   - `.devcontainer/setup.sh`
   - `composer.json`
   - `artisan`
   - `routes/web.php`
   - `docs/WEEK_11.md` through `docs/WEEK_17.md`

### Step 2: Template Configuration

1. Navigate to **Settings → General** in your repository

2. Enable the **Template repository** option

3. Test the template functionality:
   - Select **Use this template** button
   - Verify successful repository creation process
### Step 3: Environment Verification

Before distributing the template to students, perform comprehensive testing:

1. **Initiate Codespace:**
   - Select **Code → Codespaces → Create codespace on main**
   - Choose a 2-core machine configuration
   - Wait for `postCreateCommand` Composer installation to complete
   
   **Troubleshooting:** If network or installation failures occur, manually execute:
   ```bash
   bash .devcontainer/setup.sh
   ```

2. **Verify Core Functionality:**
   
   Execute the following commands and verify successful operation:
   
   ```bash
   # Verify PHP installation
   php -v
   
   # Verify Composer installation
   composer --version
   
   # Verify Laravel installation
   php artisan --version
   
   # Test demonstration commands
   php artisan oop:demo
   php artisan oop:project
   php artisan oop:pdo-demo
   
   # Execute test suite
   php artisan test
   
   # Verify code style checker
   ./vendor/bin/pint --test
   
   # Start development server
   php artisan serve --host=0.0.0.0 --port=8000
   ```
   
   **Note:** Initial Pint execution may report style issues in student code templates. For the master template, execute `./vendor/bin/pint` to apply formatting before distribution, then commit the changes.

3. **Browser Interface Verification:**
   
   - Navigate to **Ports → 8000 → Open in Browser**
   - Verify the following routes function correctly:
     - `/` (Homepage)
     - `/weeks/11` (Namespace demonstration)
     - `/weeks/12` (PDO demonstration)
     - `/weeks/13` (MVC demonstration)
     - `/my-project` (Student project template)
   
   - Test Week 12 demonstration:
     - Create two records via web form
     - Update one record
     - Delete one record
     - Verify persistence across page refreshes
   
   **Important:** This demonstration is separate from student project work

4. **Dependency Lock File (Recommended):**
   
   After successful Composer installation:
   ```bash
   # Commit the generated composer.lock file to master repository
   git add composer.lock
   git commit -m "Lock dependency versions for reproducible installations"
   git push
   ```
   
   This ensures consistent dependency versions across all student environments.
## Student Distribution and Repository Management

### Distribution Process

1. Publish the master template repository URL through your institution's Learning Management System (LMS)

2. Instruct students to:
   - Access the template repository
   - Select **Use this template → Create a new repository**
   - Create the repository under their personal GitHub account
   - Launch their individual Codespace from their new repository

**Important:** Students must create their own repositories. They should never work directly in the master template repository.

### Submission and Assessment

1. **Repository Access:**
   - For public student repositories: collect repository URLs
   - For private repositories: arrange instructor access permissions before grading deadlines

2. **Required Evidence:**
   - Terminal command output screenshots
   - Browser interface screenshots
   - Completed documentation files
   - Repository URL or exported ZIP file

3. **Submission Method:**
   Configure submission requirements according to your LMS specifications

## Verification Checklist

Verify the following functionality before course deployment:

- [ ] Codespace successfully installs Laravel without local XAMPP requirement
- [ ] Week 11: Namespaced classes with alias implementation function correctly
- [ ] Week 12: Direct PDO with parameter binding works (not solely Eloquent ORM)
- [ ] Week 13: MVC diagram accurately reflects route/controller/view code structure
- [ ] Week 14: Remains designated as pre-final examination period
- [ ] Week 15: Test suite executes successfully; logs generate when Week 13 page is accessed
- [ ] Week 16: Pint style checker, Git operations, and PSR practices function as documented
- [ ] Week 17: Student project workspace, checklists, and report template exist and are accessible

## Important Notes

**Pedagogical Alignment:** The formative practice exercises and suggested rubrics provided in this template are educational frameworks. They do not automatically constitute your official institutional syllabus or grading policy.

**Customization:** Refer to `SYLLABUS_ALIGNMENT.md` for guidance on adapting this template to your specific institutional requirements.

**Support Resources:** Additional documentation available:
- Student usage guidelines
- Syllabus alignment documentation
- Final submission requirements
